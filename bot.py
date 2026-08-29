import os
import json
import telebot
from flask import Flask, request

TOKEN = "8865163398:AAHjV3Xzz7p5kuobNgTQ1wupB7i2bko9OBU"
bot = telebot.TeleBot(TOKEN)
server = Flask(__name__)

# فایلی پاشەکەوتکردنی کەناڵی گرووپەکان
CHANNELS_FILE = "group_channels.json"

def load_channels():
    if os.path.exists(CHANNELS_FILE):
        with open(CHANNELS_FILE, "r") as f:
            try:
                return json.load(f)
            except:
                return {}
    return {}

def save_channels(data):
    with open(CHANNELS_FILE, "w") as f:
        json.dump(data, f)

# گەڕان بەدوای کەناڵی تایبەتی ئەم گرووپە
def get_group_channel(chat_id):
    data = load_channels()
    return data.get(str(chat_id))

@bot.message_handler(commands=['start'])
def send_welcome(message):
    welcome_text = (
        "سڵاو! من بۆتی پاراستنی گرووپ و جۆینی ناچاریم. 🛡️\n\n"
        "بۆ بەستنەوەی کەناڵەکەت بەم گرووپەوە، تکایە لە ناو گرووپ ئەم فەرمانە بنێرە:\n"
        "👉 `/setchannel @Username`"
    )
    bot.reply_to(message, welcome_text, parse_mode="Markdown")

# فەرمانی دیاریکردنی کەناڵ بۆ هەر گرووپێک لەلایەن ئەدەمینەوە
@bot.message_handler(commands=['setchannel'])
def set_channel(message):
    if message.chat.type not in ['group', 'supergroup']:
        bot.reply_to(message, "⚠️ ئەم فەرمانە تەنها لە ناو گرووپەکان کار دەکات!")
        return
    
    # پشکنینی ئەوەی ئایا ناتکەر ئەدەمینە یان نا
    try:
        member = bot.get_chat_member(message.chat.id, message.from_user.id)
        if member.status not in ['administrator', 'creator']:
            bot.reply_to(message, "❌ تەنها ئەدەمینەکانی گرووپ دەتوەنن ئەم فەرمانە بەکاربهێنن!")
            return
    except:
        return

    parts = message.text.split()
    if len(parts) < 2:
        bot.reply_to(message, "⚠️ تکایە ناوی کەناڵەکەش بنووسە.\nنموونە:\n`/setchannel @MyChannel`", parse_mode="Markdown")
        return

    channel_username = parts[1]
    
    # پاشەکەوتکردنی کەناڵەکە بۆ ئەم گرووپە
    data = load_channels()
    data[str(message.chat.id)] = channel_username
    save_channels(data)

    bot.reply_to(message, f"✅ بە سەرکەوتوویی کەناڵی **{channel_username}** بەم گرووپەوە بەستراوەوە!", parse_mode="Markdown")

# پشکنینی پەیامی ئەندامان
@bot.message_handler(func=lambda message: True, content_types=['text', 'photo', 'video', 'document'])
def group_protector(message):
    if message.chat.type in ['group', 'supergroup']:
        user_id = message.from_user.id
        chat_id = message.chat.id

        # لێخۆشبوون بۆ ئەدەمینەکان
        try:
            chat_member = bot.get_chat_member(chat_id, user_id)
            if chat_member.status in ['administrator', 'creator']:
                return
        except:
            pass

        # ١. پشکنینی لینک (پاراستنی گرووپ لە سپام)
        if message.text and ('http://' in message.text or 'https://' in message.text or 't.me/' in message.text):
            try:
                bot.delete_message(chat_id, message.message_id)
                warning = bot.reply_to(message, f"بەڕێز {message.from_user.first_name}، ناردنی لینک قەدەغەیە! ❌")
                import time
                time.sleep(5)
                bot.delete_message(chat_id, warning.message_id)
            except:
                pass
            return

        # ٢. پشکنینی جۆینی ناچاری بەپێی کەناڵی ئەو گرووپە
        channel_username = get_group_channel(chat_id)
        if channel_username:
            try:
                member = bot.get_chat_member(channel_username, user_id)
                is_member = member.status in ['member', 'administrator', 'creator']
            except:
                is_member = False

            if not is_member:
                try:
                    bot.delete_message(chat_id, message.message_id)
                    msg = bot.send_message(
                        chat_id,
                        f"⚠️ بەڕێز {message.from_user.first_name}، ناتوانیت پەیام بنێریت تاوەکو سەرەتا جۆینی کەناڵی گرووپەکە نەبیت:\n🔗 {channel_username}",
                        parse_mode="Markdown"
                    )
                    import time
                    time.sleep(6)
                    bot.delete_message(chat_id, msg.message_id)
                except:
                    pass

@server.route(f"/{TOKEN}", methods=['POST'])
def redirect_message():
    json_string = request.get_data().decode('utf-8')
    update = telebot.types.Update.de_json(json_string)
    bot.process_new_updates([update])
    return "!", 200

@server.route("/")
def webhook():
    return "Multi-tenant Bot is running!", 200

if __name__ == "__main__":
    port = int(os.environ.get('PORT', 5000))
    import threading
    t = threading.Thread(target=bot.infinity_polling, kwargs={"skip_pending": True})
    t.start()
    server.run(host="0.0.0.0", port=port)
