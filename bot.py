import os
import telebot
from flask import Flask, request

TOKEN = "8865163398:AAHjV3Xzz7p5kuobNgTQ1wupB7i2bko9OBU"
bot = telebot.TeleBot(TOKEN)
server = Flask(__name__)

@bot.message_handler(commands=['start'])
def send_welcome(message):
    user_name = message.from_user.first_name
    welcome_text = f"سڵاو {user_name}! من بۆتی تۆم و ئامادەم ٢٤ کاتژمێر خزمەتت بکەم. 🤖\n\nفەرمانی /help بنێرە بۆ زانینی تواناکانم."
    bot.reply_to(message, welcome_text)

@bot.message_handler(commands=['help'])
def send_help(message):
    help_text = "🔧 **لیستی فەرمانەکان:**\n\n/start - دەستپێکردنی بۆت\n/help - یارمەتی و فەرمانەکان"
    bot.reply_to(message, help_text, parse_mode="Markdown")

@bot.message_handler(func=lambda message: True)
def echo_all(message):
    bot.reply_to(message, f"پەیامەکەت گەیشت: {message.text}")

@server.route(f"/{TOKEN}", methods=['POST'])
def redirect_message():
    json_string = request.get_data().decode('utf-8')
    update = telebot.types.Update.de_json(json_string)
    bot.process_new_updates([update])
    return "!", 200

@server.route("/")
def webhook():
    return "Bot is running!", 200

if __name__ == "__main__":
    port = int(os.environ.get('PORT', 5000))
    
    import threading
    t = threading.Thread(target=bot.infinity_polling, kwargs={"skip_pending": True})
    t.start()
    
    server.run(host="0.0.0.0", port=port)
