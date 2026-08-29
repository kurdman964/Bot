import telebot

# تۆکنی بۆتەکەت کە داتناوە
TOKEN = "8817896049:AAF0Gs6DRns47oCkCzqO9UTVlfJeQNea0VU"
bot = telebot.TeleBot(TOKEN)

# فەرمانی /start
@bot.message_handler(commands=['start'])
def send_welcome(message):
    user_name = message.from_user.first_name
    welcome_text = f"سڵاو {user_name}! من بۆتی تۆم و ئامادەم ٢٤ کاتژمێر خزمەتت بکەم. 🤖\n\nفەرمانی /help بنێرە بۆ زانینی تواناکانم."
    bot.reply_to(message, welcome_text)

# فەرمانی /help
@bot.message_handler(commands=['help'])
def send_help(message):
    help_text = "🔧 **لیستی فەرمانەکان:**\n\n/start - دەستپێکردنی بۆت\n/help - یارمەتی و فەرمانەکان\n\nهەروەها دەتوانیت هەر نامەیەک بنێریت و من دووبارەی دەکەمەوە!"
    bot.reply_to(message, help_text, parse_mode="Markdown")

# وەڵامدانەوە بۆ هەر پەیامێکی تر (Echo)
@bot.message_handler(func=lambda message: True)
def echo_all(message):
    bot.reply_to(message, f"پەیامەکەت گەیشت: {message.text}")

# کارپێکردنی بۆتەکە بە شێوەیەکی بەردەوام
print("Bot is running...")
bot.infinity_polling()
