

<?php
ob_start();
$MED0001 = "8916246734:AAEkks4zyD4l5qMPIY1TCqVOKgTcTA2c_W0
";
define('API_KEY',$MED0001);
echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setWebhook?url=https://".$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$Cc14Cc = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$Cc14Cc";
$Cc14Cc = file_get_contents($url);
return json_decode($Cc14Cc);}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message = $update->message;
$username = $message->from->username;
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$Name = $update->callback_query->from->first_name;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$username = $message->from->username;
$Name = $update->callback_query->from->first_name;
$admin = "1108040488";
$admins = 1108040488;
$from_id = $message->from->id;
$user_id = $message->from->id;
mkdir("ii12ii");
mkdir("zkref");
$useree = $update->callback_query->message->chat->id;
$Name = $update->callback_query->from->first_name;
$MEDO = file_get_contents("MEDO.txt");
$MEDO0 = file_get_contents("MEDO0.txt");
$MEDO1= file_get_contents("MEDO1.txt");
$MEDO5 = file_get_contents("MEDO2.txt");
$MEDO6 = file_get_contents("MEDO3.txt");
$MEDO20 = json_decode(file_get_contents('php://input'));
$MEDO18 = $update->message;
$MEDO13 = $MEDO18->chat->id;
$MEDO17 = $MEDO18->text;
$MEDO19 = $MEDO20->callback_query->data;
$MEDO12 = $MEDO20->callback_query->message->chat->id;
$MEDO14 =  $MEDO20->callback_query->message->message_id;
$MEDO15 = $MEDO18->from->first_name;
$MEDO16 = $MEDO18->from->username;
$MEDO11 = $MEDO18->from->id;
$MEDO2 = explode("\n",file_get_contents("MEDO4.txt"));
$MEDO3 = count($MEDO2)-1;
if ($MEDO18 && !in_array($MEDO11, $MEDO2)) {
file_put_contents("MEDO4.txt", $MEDO11."\n",FILE_APPEND);
}
$MEDO9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$MEDO0&user_id=".$MEDO11);
$MEDO10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$MEDO1&user_id=".$MEDO11);
if($MEDO18 && (strpos($MEDO9,'"status":"left"') or strpos($MEDO9,'"Bad Request: USER_ID_INVALID"') or strpos($MEDO9,'"status":"kicked"') or strpos($MEDO10,'"status":"left"') or strpos($MEDO10,'"Bad Request: USER_ID_INVALID"') or strpos($MEDO10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$MEDO13,
'text'=>'•⊱ بە لێبووردنەوە دەبێت سەرەتا بەشداری کەناڵ بکەیت ⊰•
•⊱ دوای بەشداری کردن /start بنێرە ⊰•
•⊱ کەناڵ 👇 ⊰•
'.$MEDO0.'
'.$MEDO1,
]);return false;}
if($MEDO17 == "/admin" and $MEDO11 == $admin){
bot("sendmessage",[
"chat_id"=>$MEDO13,
"text"=>"بەخێر بێیت ،  $fn
• ئەمە دەستەی کۆنترۆڵی تایبەتی تۆیە ، 🔰
• دەتوانیت کۆنترۆڵی سەرجەم فەرمانەکانی بۆتەکە بکەیت لە لێرەوە ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- فەرمانەکانی بەشداری ناچاری یەکەم ، 📢' ,'callback_data'=>"MEDO"]],
[['text'=>'• دابینکردنی کەناڵ ، 🌚🤞🏻' ,'callback_data'=>"MEDO0"],['text'=>'• سڕینەوەی کەناڵ ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- فەرمانەکانی بەشداری ناچاری دووەم ، 📢' ,'callback_data'=>"MEDO"]],
[['text'=>'• دابینکردنی کەناڵ ، 🌝🤞🏻' ,'callback_data'=>"MEDO2"],['text'=>'• سڕینەوەی کەناڵ ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- نیشاندانی کەناڵەکانی بەشداری ، 📛' ,'callback_data'=>"MEDO4"]],
[['text'=>'- فەرمانەکانی پەخشکردن ، 🗣' ,'callback_data'=>"MEDO"]],
[['text'=>'• پەیامی ئاراستەکردن (Forward) ، ☝️🏻💚' ,'callback_data'=>"MEDO5"],['text'=>'• پەیامی دەقی ، ☝️🏻💛' ,'callback_data'=>"MEDO6"]],
[['text'=>'- ژمارەی بەشداربووان ، 🐳' ,'callback_data'=>"MEDO7"]],
[['text'=>'- ئاگادارکردنەوە کاتێک کەسێک دەچێتە ناو بۆتەوە ، ⚠️' ,'callback_data'=>"MEDO"]],
[['text'=>'• چالاککردنی ئاگادارکردنەوە ، ✅' ,'callback_data'=>"MEDO9"],['text'=>'• ناچالاککردنی ئاگادارکردنەوە ، ❎' ,'callback_data'=>"MEDO10"]],
[['text'=>'- ئاراستەکردنی پەیام لە ئەندامانەوە ، 🔁' ,'callback_data'=>"MEDO"]],
[['text'=>'• چالاککردنی ئاراستەکردن ، ✅' ,'callback_data'=>"MEDO11"],['text'=>'• ناچالاککردنی ئاراستەکردن ، ❎' ,'callback_data'=>"MEDO12"]],
]
])
]);
}
if($O19 == "MEDO" ){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
"text"=>"  • بەخێر بێیت ، $Name
• ئەمە دەستەی کۆنترۆڵی تایبەتی تۆیە ، 🔰
• دەتوانیت کۆنترۆڵی سەرجەم فەرمانەکانی بۆتەکە بکەیت لە لێرەوە ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- فەرمانەکانی بەشداری ناچاری یەکەم ، 📢' ,'callback_data'=>"MEDO"]],
[['text'=>'• دابینکردنی کەناڵ ، 🌚🤞🏻' ,'callback_data'=>"MEDO0"],['text'=>'• سڕینەوەی کەناڵ ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- فەرمانەکانی بەشداری ناچاری دووەم ، 📢' ,'callback_data'=>"MEDO"]],
[['text'=>'• دابینکردنی کەناڵ ، 🌝🤞🏻' ,'callback_data'=>"MEDO2"],['text'=>'• سڕینەوەی کەناڵ ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- نیشاندانی کەناڵەکانی بەشداری ، 📛' ,'callback_data'=>"MEDO4"]],
[['text'=>'- فەرمانەکانی پەخشکردن ، 🗣' ,'callback_data'=>"MEDO"]],
[['text'=>'• پەیامی ئاراستەکردن ، ☝️🏻💚' ,'callback_data'=>"MEDO5"],['text'=>'• پەیامی دەقی ، ☝️🏻💛' ,'callback_data'=>"MEDO6"]],
[['text'=>'- ژمارەی بەشداربووان ، 🐳' ,'callback_data'=>"MEDO7"]],
[['text'=>'- ئاگادارکردنەوە کاتێک کەسێک دەچێتە ناو بۆتەوە ، ⚠️' ,'callback_data'=>"MEDO"]],
[['text'=>'• چالاککردنی ئاگادارکردنەوە ، ✅' ,'callback_data'=>"MEDO9"],['text'=>'• ناچالاککردنی ئاگادارکردنەوە ، ❎' ,'callback_data'=>"MEDO10"]],
[['text'=>'- ئاراستەکردنی پەیام لە ئەندامانەوە ، 🔁' ,'callback_data'=>"MEDO"]],
[['text'=>'• چالاککردنی ئاراستەکردن ، ✅' ,'callback_data'=>"MEDO11"],['text'=>'• ناچالاککردنی ئاراستەکردن ، ❎' ,'callback_data'=>"MEDO12"]],
]
])
]);
unlink("MEDO.txt");
}
if($MEDO19 == "MEDO0"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- باشە ، ئێستا ناسنامەی کەناڵەکەت بنێرە بۆ ئەوەی لە خزمەتگوزاری بەشداری ناچاری بۆ کەناڵی یەکەم دابنرێت ، 📢
#نموونە :
▪️@ii12',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
file_put_contents("MEDO.txt","MEDO0");
}
if($MEDO17 and $MEDO == "MEDO0" and $MEDO11 == $admin){
bot("sendmessage",[
"chat_id"=>$MEDO13,
"text"=>'- کەناڵەکە بە سەرکەوتوویی دانرا ، 📣
• بۆتەکە بە ئەدمن بەرز بکەرەوە لە ناو کەناڵدا ، 🗞',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
file_put_contents("MEDO0.txt","$MEDO17");
unlink("MEDO.txt");
}
if($MEDO19 == "delete11"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- باشە ئایا دڵنیایت کە دەتەوێت کەناڵەکە بسڕیتەوە لە بەشداری ناچاری ، 🚫
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• نەخێر ، ❎', 'callback_data'=>'MEDO'],
['text'=>'• بەڵێ ، ✅','callback_data'=>'MEDO1'],
]
]])
]);
}
if($MEDO19 == "MEDO1"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- کەناڵی یەکەم بە سەرکەوتوویی لە بەشداری ناچاری سڕایەوە ، 📮',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
unlink("MEDO.txt");
unlink("MEDO0.txt");
}
if($MEDO19 == "MEDO2"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- باشە ، ئێستا ناسنامەی کەناڵەکەت بنێرە بۆ ئەوەی لە خزمەتگوزاری بەشداری ناچاری بۆ کەناڵی دووەم دابنرێت ، 📢
#نموونە :
▪️@ii12ii',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
file_put_contents("MEDO.txt","MEDO1");
}
if($MEDO17 and $MEDO == "MEDO1" and $MEDO11 == $admin){
bot("sendmessage",[
"chat_id"=>$MEDO13,
"text"=>'- کەناڵەکە بە سەرکەوتوویی دانرا ، 📣
• بۆتەکە بە ئەدمن بەرز بکەرەوە لە ناو کەناڵدا ، 🗞',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
file_put_contents("MEDO1.txt","$MEDO17");
unlink("MEDO.txt");
}
if($MEDO19 == "delete22"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- باشە ئایا دڵنیایت کە دەتەوێت کەناڵەکە بسڕیتەوە لە بەشداری ناچاری ، 🚫',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• نەخێر ، ❎', 'callback_data'=>'MEDO'],
['text'=>'• بەڵێ ، ✅','callback_data'=>'MEDO3'],
]
]])
]);
}
if($MEDO19 == "MEDO3"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- کەناڵی دووەم بە سەرکەوتوویی لە بەشداری ناچاری سڕایەوە ، 📮',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
unlink("MEDO.txt");
unlink("MEDO1.txt");
}
if($MEDO19 == "MEDO4"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>"- ئەمە لیستی کەناڵەکانی بەشداری ناچارییە ، 🔰
• کەناڵی یەکەم ،  $MEDO0 📢
• کەناڵی دووەم ،  $MEDO1 📣
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
unlink("MEDO.txt");
}
if($MEDO19 == "MEDO5"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>"~ پەیامەکەت بنێرە و ئاراستەی [ $MEDO3 ] بەشداربوو دەکرێت ، 🐙 ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
file_put_contents("MEDO.txt","MEDO2");
}
if($MEDO18 and $MEDO == "MEDO2" and $MEDO11 == $admin){
bot("sendmessage",[
"chat_id"=>$MEDO13,
"text"=>'- ئاراستەکردنەکە بە سەرکەوتوویی ئەنجامدرا 🦕',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
for($i=0;$i<count($MEDO2); $i++){
bot('forwardMessage', [
'chat_id'=>$MEDO2[$i],
'from_chat_id'=>$MEDO11,
'message_id'=>$MEDO18->message_id
]);
unlink("MEDO.txt");
}
}
if($MEDO19 == "MEDO6"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>MEDO14,
'text'=>"~ پەیامەکەت بنێرە و دەنێردرێت بۆ [ 20MEDO3 ] بەشداربوو ، 🐠",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
file_put_contents("MEDO.txt","MEDO3");
}
if($MEDO17 and $MEDO == "MEDO3" and $MEDO11 == $admin){
bot("sendmessage",[
"chat_id"=>$MEDO13,
"text"=>'- بڵاوکردنەوە بە سەرکەوتوویی ئەنجامدرا 🐋',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
for($i=0;$i<count($MEDO2); $i++){
bot('sendMessage', [
'chat_id'=>$MEDO2[$i],
'text'=>$MEDO17
]);
unlink("MEDO.txt");
}
}
if($MEDO19 == "MEDO7"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>"- ژمارەی بەشداربووانی بۆت  [ $MEDO3 ] بەشداربووە ، 🦑",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
unlink("MEDO.txt");
}
if($MEDO19 == "MEDO9"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- هاتنەژوورەوەی بەشداربووان چالاککرا ، 🐎',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
file_put_contents("MEDO2.txt","MEDO");
}
if($MEDO17 == "/start" and $MEDO5 == "MEDO" and $MEDO11 != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"- ئەندامێکی نوێ هاتە ناو بۆتەوە ، 🛡
• ناوی ، $MEDO15 ، 🦕
• ناسنامە (یوزەر) ، @$MEDO16 ، 🐢
• ئایدی ، $MEDO11 ، 🐝
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  ژمارەی بەشداربووان ، { $MEDO3 } ، 🦑 ",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($MEDO19 == "MEDO10"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- هاتنەژوورەوەی بەشداربووان ناچالاککرا ، 🦍 ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
unlink("MEDO.txt");
unlink("MEDO2.txt");
}
if($MEDO19 == "MEDO11"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- ئاراستەکردنی پەیامەکان چالاککرا ، 🦇',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
file_put_contents("MEDO3.txt","MEDO");
}
if($MEDO18 and $MEDO6 == "MEDO" and $MEDO11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$MEDO11,
'message_id'=>$MEDO18->message_id
]);
}
if($MEDO18 and $MEDO6 == "MEDO" and $MEDO11 == $admin){
bot('sendMessage',[
'chat_id'=>$MEDO18->reply_to_message->forward_from->id,
'text'=>$MEDO17,
]);
}
if($MEDO19 == "MEDO12"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- ئاراستەکردنی پەیامەکان ناچالاککرا ، 🐌',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
unlink("MEDO.txt");
unlink("MEDO3.txt");
}
if($text ==  '/start' and !in_array($from_id, $getid) and !strpos($ch1 , '"status":"left"' ) !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
••⊱ بەخێر بێیت عزیزم $name ⊰• 😻💞
•⊱ لە بۆتی پرسیارە بوێرەکاندا ⊰• 🙀💞
•⊱ لە بۆتەکەدا 𝟔 بەشی جیاواز هەیە ⊰• 😸💞
•⊱ پەنجە بنێ بە نیشاندانی بەشەکان و بەشی گونجاو هەڵبژێرە ⊰• 😾💞
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
D𝒐𝒏 𝒕 𝒓𝒐𝒓𝒈𝒆𝒕 𝒕𝒐 𝒓𝒐𝒍𝒍𝒐𝒘 𝒎𝒆 - @cC14Cc 💞
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱نیشاندانی بەشەکان😾💞⊰•", 'callback_data'=>'help']],
[['text'=>"•⊱بەشی لادانی تایبەت⊰•", 'callback_data'=>'XNXX9']],
[['text'=>"$tilitet",'switch_inline_query'=>"$from_id"]],
[['text'=>"•⊱ WE ⊰•",'url'=>'T.me/cC14Cc']],
[['text'=>"•⊱ M𝒚 𝒂𝒄𝒄𝒐𝒖𝒏𝒕𝒔 ⊰• ",'url'=>'T.me/GGGGW']],
]
])]);}

if($data=="home"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱ بەخێر بێیت عزیزم $name ⊰• 😻💞
•⊱ لە بۆتی پرسیارە بوێرەکاندا ⊰• 🙀💞
•⊱ لە بۆتەکەدا 6 بەشی جیاواز هەیە ⊰• 😸💞
•⊱ پەنجە بنێ بە نیشاندانی بەشەکان و بەشی گونجاو هەڵبژێرە ⊰• 😾💞
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
D𝒐𝒏 𝒕 𝒓𝒐𝒓𝒈𝒆𝒕 𝒕𝒐 𝒓𝒐𝒍𝒍𝒐𝒘 𝒎𝒆 - @cC14Cc 💞
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱نیشاندانی بەشەکان 😾💞⊰•", 'callback_data'=>'help']],
[['text'=>"•⊱بەشی لادانی تایبەت⊰•", 'callback_data'=>'XNXX9']],
[['text'=>"•⊱ WE ⊰• ",'url'=>'T.me/cC14Cc']],
[['text'=>"•⊱ M𝒚 𝒂𝒄𝒄𝒐𝒖𝒏𝒕𝒔 ⊰• ",'url'=>'T.me/GGGGW']],
]
])]);}
if($data=="help"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
•⊱ بەخێر بێیت $name ⊰• 😻💞
•⊱ دووبارە ئەمانەش بەشەکانن بۆت ⊰• 😸💞
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
D𝒐𝒏 𝒕 𝒓𝒐𝒓𝒈𝒆𝒕 𝒕𝒐 𝒓𝒐𝒍𝒍𝒐𝒘 𝒎𝒆 - @cC14Cc
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"𝟏 ⊱پرسیاری ئیماندارەکان ♡",'callback_data'=>'X5']],
[['text'=>"𝟐 ⊱بوێریت وێنە ♡",'callback_data'=>'X4']],
[['text'=>"𝟑 ⊱پرسیاری بوێرانەی ئاستی 𝟏 ♡",'callback_data'=>'X1']],
[['text'=>"𝟒 ⊱پرسیاری بوێرانەی ئاستی 𝟐  ♡",'callback_data'=>'X2']],
[['text'=>"𝟓 ⊱پرسیاری لادەرەکان ♡",'callback_data'=>'X3']],
[['text'=>"𝟔 ⊱ پرسیاری هاوسەران بۆ کچان ♡",'callback_data'=>'X7']],
[['text'=>"𝐃𝐄𝐕 𖤐",'callback_data'=>'X8']],
[['text'=>"•⊱بەشی لادانی تایبەت⊰•", 'callback_data'=>'XNXX9']],
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>"home"]],
[['text'=>"•⊱ WE ⊰•",'url'=>'T.me/GGGGW']],
[['text'=>"•⊱ M𝒚 𝒂𝒄𝒄𝒐𝒖𝒏𝒕𝒔 ⊰• ",'url'=>'T.me/cC14Cc']],
]
])
]);
}
if($data=="XNXX9"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
• بەخێر بێیت گیانەکەم بۆ بەشی لادانی تایبەت
• ئەوەی گونجاوە لە دوگمەکانی خوارەوە هەڵبژێرە
@GGGGW",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• لیستی فیلمەکان ",'callback_data'=>'SAD1'],['text'=>"• ️لیستی چیرۆکەکان ",'callback_data'=>'SAD2']],
[['text'=>"• لیستی جووڵاوەکان ",'callback_data'=>'SAD3']],
[['text'=>"• لیستی دەنگەکان ",'callback_data'=>'SAD4']],
[['text'=>"گەڕانەوە 🔙",'callback_data'=>"home"]],
]
])
]);
}
if($data=="SAD1"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
• بەخێر بێیتەوە $Name
• ئەوە لیستی فیلمەکانە ئەوەی دەتەوێت هەڵبژێرە بۆ جێبەجێکردنی ،
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
 • لێرە کلیک بکە و نوێیەکانمان دووبکەوە ، ؛",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• فیلمی یەکەم ",'callback_data'=>'AA1']],
[['text'=>"• فیلمی دووەم ",'callback_data'=>'AA2'],['text'=>"فیلمی سێیەم ",'callback_data'=>'AA3']],
[['text'=>"• فیلمی چوارەم ",'callback_data'=>'AA4']],
[['text'=>"• فیلمی پێنجەم ",'callback_data'=>'AA5'],['text'=>"• فیلمی شەشەم ",'callback_data'=>'AA6']],
[['text'=>"• فیلمی حەوتەم ",'callback_data'=>'AA7']],
[['text'=>"• فیلمی هەشتەم ",'callback_data'=>'AA8'],['text'=>"• فیلمی نۆیەم ",'callback_data'=>'AA9']],
[['text'=>" • فیلمی دەیەم ",'callback_data'=>'AA10']],
[['text'=>"گەڕانەوە 🔙",'callback_data'=>"XNXX9"]],
]
])
]);
}
if($data=="SAD2"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
• بەخێر بێیت ،  $Name
• لە لیستی چیرۆکەکاندا ئەوەی دەتەوێت هەڵبژێرە بۆ جێبەجێکردنی ، !
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
 • لێرە کلیک بکە و نوێیەکانمان دووبکەوە ،  ؛",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• چیرۆکی یەکەم ",'callback_data'=>'OO1'],['text'=>"• چیرۆکی دووەم ",'callback_data'=>'OO2']],
[['text'=>"• چیرۆکی سێیەم ",'callback_data'=>'OO3']],
[['text'=>"• چیرۆکی چوارەم ",'callback_data'=>'OO4'],['text'=>"• چیرۆکی پێنجەم ",'callback_data'=>'OO5']],
[['text'=>"گەڕانەوە 🔙",'callback_data'=>"XNXX9"]],
]
])
]);
}
if($data=="SAD3"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
• بەخێر بێیت ،  $Name
• لە لیستی جووڵاوەکاندا ئەوەی دەتەوێت هەڵبژێرە بۆ جێبەجێکردنی ، !
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
 • لێرە کلیک بکە و نوێیەکانمان دووبکەوە ،  ؛",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• جووڵاوی یەکەم ",'callback_data'=>'BB1'],['text'=>"• جووڵاوی دووەم ",'callback_data'=>'BB2']],
[['text'=>"• جووڵاوی سێیەم ",'callback_data'=>'BB3']],
[['text'=>"• جووڵاوی چوارەم ",'callback_data'=>'BB4'],['text'=>"• جووڵاوی پێنجەم ",'callback_data'=>'BB5']],
[['text'=>"• جووڵاوی شەشەم ",'callback_data'=>'BB6'],['text'=>"• جووڵاوی حەوتەم ",'callback_data'=>'BB7']],
[['text'=>"• جووڵاوی هەشتەم ",'callback_data'=>'BB8']],
[['text'=>"• جووڵاوی نۆیەم ",'callback_data'=>'BB9'],['text'=>"• جووڵاوی دەیەم ",'callback_data'=>'BB10']],
[['text'=>"گەڕانەوە 🔙",'callback_data'=>"XNXX9"]],
]
])
]);
}
if($data=="SAD4"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
• بەخێر بێیتەوە $Name
• ئەوە لیستی دەنگەکانە ئەوەی دەتەوێت هەڵبژێرە بۆ جێبەجێکردنی ،
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
 • لێرە کلیک بکە و نوێیەکانمان دووبکەوە ، 🚷 ؛",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• دەنگی یەکەم ",'callback_data'=>' DL1'],['text'=>"• دەنگی دووەم ",'callback_data'=>'DL2']],
[['text'=>"• دەنگی سێیەم ",'callback_data'=>'DL3']],
[['text'=>"• دەنگی چوارەم ",'callback_data'=>'DL4'],['text'=>"• دەنگی پێنجەم ",'callback_data'=>'DL5']],
[['text'=>"• دەنگی شەشەم ",'callback_data'=>'DL6'],['text'=>"• دەنگی حەوتەم ",'callback_data'=>'DL7']],
[['text'=>"• دەنگی هەشتەم ",'callback_data'=>'DL8']],
[['text'=>"• دەنگی نۆیەم ",'callback_data'=>'DL9'],['text'=>"• دەنگی دەیەم ",'callback_data'=>'DL10']],
[['text'=>"گەڕانەوە 🔙",'callback_data'=>'XNXX9']],
]
])
]);
}
if($data == "AA1"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/12",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی یەکەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "AA2"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/13",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی دووەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "AA3"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/14",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی سێیەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "AA4"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/15",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی چوارەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "AA5"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/16",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی پێنجەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "AA6"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/17",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی شەشەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "AA7"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/18",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی حەوتەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "AA8"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/19",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی هەشتەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "AA9"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/20",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی نۆیەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "AA10"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/21",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی دەیەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "OO1"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
سڵاو
ناوکان خوازراون
من ناوم محەممەدە تەمەنم ٢٠ ساڵە، چیرۆکێکی ڕاستەقینەیە لەگەڵ کچە خاڵەکەم ناوی لۆلۆیە.. کچە خاڵەکەم زۆر سەرنجڕاکێشە و سیفەتەکانی فولن، پێستی قاوەیی و قنگێکی بەرز، مەمکی سپی وگۆشتن و کلکەی پەمەیی، ئۆفیێش نامەوێت پێتان بڵێم جەستەی بە توندی شێتکەرە
جا من زۆر خەیاڵم لەسەری بوو، ڕۆژێک لە کاتێکدا سەیرکردنی چیرۆکە سێکسییەکانم دەکرد لە تێلیگرام، گوتم با بۆی بنێرم بەڵکو بەزەیی پێمدا بێتەوە، بۆیە یەکێکم کۆپی کرد و بۆیم نارد.. جا دواى ٤ کاتژمێر وەڵامی دایەوە کە ئەمە چییە شەرم لەم قسەیە ناکەیت و قسەی خۆش😂 بۆیە ڕۆژان تێپەڕین و چەند ڕۆژێک تێپەڕی چووم بۆ لایان و لەوێ مامەوە نزیکەی مانگێکی تەواو، لە ڕۆژی ٤ەمدا دانیشتبووم لە ژوورەکەیدا واتە ماڵی خاڵم متمانەی تەواویان پێم هەبوو دەیانزانى من ئەم جۆرە شتانەم نییە😂 جا تەواو بووم دانیشتبووم لە ژوورەکەیدا مۆبایلەکەم دەگۆڕی، باسی هاوڕێیەکەی بۆ دەکردم وەک ئەوەی دەست بەسەر مۆبایلەکەیدا گرتووە و دۆزیویەتیەوە کە دەچێتە سەر ماڵپەڕە سێکسییەکان.. من پێم گوت بەڵێ هاوڕێکەت سەرتاپای قسەیە😂 ئەو خۆی وا نیشاندا کە نەزانێت سەرتاپا چییە.. پێم گوت بەڵێ و تۆش دەتەوێت سێکس ببینی؟ گوتی هەتە؟ پێم گوت وەرە، گوێپلاگەکەم خستە یەک گوێمەوە و ئەوی تری خستە گوێی ئەو و زیاتر لە ١٠ ڤیدیۆم بۆ نیشان دا ئەو کۆتایی پێ هات بە باشی، دەستی نا بە مەمکیەوە و پێی گوتم هەستە دەرگاکە داخە، دەیویست بیداتە من بەڵام کاتێک هاتم دەرگاکە داخەم خاڵنم هات، خۆم بەو شێوەیە نیشان دا کە لە ژوورەکە دەردەچم😂 جا درێژەی بابەتەکە بۆتان تەواو دەکەم لە کاتژمێر ٢ی شەوەوە هەمووانم خەواند و چوومە ژوورەکەی و بینیم بە ئاگایە.. گوتم ها چییە ئێستا؟ گوتی نەخێر ڕای خۆم گۆڕی 😢 من لە ناخەوە گوتم بۆری.. بۆیە کەمێک وەستام، لە کۆتاییەدا دەستم نا بە مەمکیەوە وگوشیم و قیژاندی و دەناڵاند من دەیگوشیم و ئەو دەگووت ئاخ ئاخ، مەمکیم دەرهێنا و بە توندی مژیم و شیرم پێدا، جا دەستی دەرهێنا لە خوارەوە و کۆنی گرتم و خلیسکاندی و لە هەمان کاتدا مەمکیم مژى و لە ناکاو دەستی گرتم و خستە خوارەوە بۆ کۆنی، من گەرم و تەڕم گرت، بۆیە دەستم کرد بە خلیسکاندنی و مژینی مەمکی، ئەو تەواو تێکوپێک شکابوو لە کۆتاییەدا لەباری دەکەم بەرموودە و پانتۆڵ و قاچەکانی کردەوە و دەستم کرد بە لەمژین و مژین و ئەو دەناڵاند و بە زۆر هەناسەی دەدا، من زمانی خۆم خستە ناو کونەکەی کۆنیەوە و لە ناکاو لەسەرم هاتە خوارەوە.. وە دواتر پێم گوت هەستە بمژە، ئەو خەریک بوو هێڵی بەربووی لە مژین، پێم گوت تەنها بیخەرە ناو دەمتەوە بە دڵت دەبێت، جا خستییە ناو دەمیەوە و شیرم پێدا، پێم گوت هەستە لەسەر سکت بخەوە، جا لەسەر سکی خەوت و منیش چوو دەرمانی زەیتی چێشتلێنانم هێنا😂 پەنجەکەم پڕ کرد و فڕێمە سەر قنگی، دەستم کرد بە داخستنی پەنجەیەک و دەرکردنی، گوتی ئازاری هەیە محەممەد، گوتم بەرگە بگرە کەمێک، پەنجەم خستە ناوەوە و ئەو ڕاچڵەکی و گوتی محەممەد ئەوانە دەردەچن ئازاری هەیە، گوتم ئەوەت چییە خەڵکە، کەمێک هەستی پێ ناکەیت.. لە کۆتاییەدا بینیم لەسەر دوو پەنجە ئارام بووەوە.. گوتم با کۆنم بخەمە ناوەوە.. کۆنم درێژ و پانیە بەڵام زۆر پانیە😂 جا هاتم سەری دانام و ئەو ڕاچڵەکی ئازاری هەیە و دەناڵاند، گوتم دەموچانت بخە ژێر سەرینەکەوە، جا خستمیانە ناو ناوەڕاستەوە و ئەو دەقیژاند ئازاری هەیە ئازاری هەیە، جا دەموچاوی کردە بەرامبەر سەرین و سەری گرت و پاڵی بە سەرینەوە نا بۆ ئەوەی نەیقیژێنێت، ڕاستەوخۆ هەموویم خستە ناوەوە و دەستم کرد بە لێدان و ئەو دەقیژاند لە ژێر سەرینەوە ئااخ ئازارت هەاىە ئازیزم ئازیزم واز لەمە بێنە، من بێدەنگ بووم بەڵام لێدانم دەدا 😅 ئەو دوای ٥ خولەک ئارام بووەوە و دەستی کرد بە هەستکردن بە ئازار، نامەوێت پێتان بڵێم لە هەردوو کۆتاییم کرد، بۆیە پێم گوتم محەممەد دیمەنێک دەوێت لە فیلمێکدا بینیومە دەمەوێت تاقیم بکەمەوە گوتم بەڵێ چییە، کۆنم دەرهێنا و مەمکی هێنا، مەمکی لەسەر کۆنم گرت و سەرکەوت و دابەزی.. من لە دڵی خۆمدا گوتم کۆنی ئەم شێوازە😂.. ئێمە هەموو ڕۆژێک سێکس دەکەین لەگەڵیدا و زۆر جووڵەمان تاقی کردەوە.. مانگێکی تەواو سێکس و مژین😂
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
[['text'=>" گەڕانەوە 🔙",'callback_data'=>'SAD2']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" چاودێری چیرۆکی یەکەم دەکات ،
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "OO2"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"چیرۆکی دایک فەهد
دایک فەهد تەمەنم ٣٧ ساڵە هاوسەرەکەم کۆچی دوایی کردووە، فەهدم هەیە و دوو کچ، فەهد لە بەشە ناوخۆییەکان دەخوێنێت زۆربەی رۆژان کوڕی مامم یاسر دێت بۆ لایمان تەمەنی ٢٥ ساڵە، هەمیشە دەنێرم بۆ لای ئەو دەچێت بۆ دوکان کارەکەم تەواو دەکات، کچەکانم سارە ٢١ و بێداء ١٧ خوێنکارن، یاسر قۆزە زۆربەی کاتەکان هات بۆ لامان و مایەوە لەگەڵ إسراء کاتێک دەچووینە دەرەوە چونکە دەمانترسا بە تەنیا بمێنێتەوە، ڕۆژێک چوومە دەرەوە کارێکم هەبوو گەڕامەوە کاغەزەکانم بیرچوو و بێداء لە دەوام بوو وە کۆپیم لە کلیلی خانوو هەبوو نەمدەویست دابنیشم إسراء دەرگاکەم کردەوە و چووژم ناوەوە و دەنگی شتێکی سەیرم بیست نزیک بوومەوە بۆ بیستنی دەنگەکە بە پەنجەرەکەدا سووڕامەوە یاسرەم بینی لە چێشتخانەکە وەستابوو بە بێ جلوبەرگ و کچەکەم إسراء بێ جلوبەرگ بوو و مەمکی دەمژی، تووشی شۆک بووم نەمدەزانی چی بڵێم مامەوە وە ئەوان مژین و مژینیان کرد گوتم ناچمە ژوورەوە نەمدەزانی چی بە کچەکەم یان یاسر بڵێم ترسام بابەتەکە دەربچێت دەبێت بابەتەکە بشارمەوە و من نیگەران بووم و سەیری کچەکەم دەکەم دەمژی و یاری بە کۆنی دەکرد دواتر سووڕایەوە و ئەو کۆنی دەرخستبوو دەستی نا بە کۆنییەوە و ئەو دەستی کرد بە داخستنە ناو کۆنییەوە و ئەو دەقیژاند ئاخی ئازارم دەدات تۆ کووشتمت بە نەرمی کاتێک تەواو بوو و سەیرم دەکردن لە پەنجەرەوە جلوبەرگیان لەبەرکردەوە گەڕامەوە دەرگا و چوومە ژوورەوە و وامکرد هەست بکەن من هاتووم بینی یاسر گوتی هەی مامە لە کوێ هاتم بۆ لای ئێوە بەڵام إسراء نووستووە هاتمە ژوورەوە بە نیگەرانی و کچەکەم گەڕایەوە بۆ خەوتن و من دەزانم کە ئاگادارە و ئەم بابەتە دووبارە دەبێتەوە و من دەزانم و هیچم پێ ناکرێت و جارێک پاشنیوەڕۆ چاودێریم کرد سەرکەوت بوون بۆ ژووری سەرەوە سەرکەوتم بۆ بینینی ئەوەی چیان هەبووە بینی یاسر نووستووە و إسراء هەڵدەستێت و دادەنیشێت بەردەوام بووم لە سەیرکردن و شتێکی ترم خەیاڵ کرد و دەنگی کچەکەم بیست قیژاندی ئاخی خستیە ناو کۆنییەوە و بحەسێنەوە، دەستم نا بە کۆنییەوە و دەستم کرد به یاری کردن و زۆر خەوبینیم بەرگە نەگرت دابەزیم بۆ حەمام و تەواو بووم و دەستیان کرد بە دووبارەکردنەوەی هەموو ڕۆژێک لە ژووری سەرەوە دەیکات کاتێک إسراء هەست دەکات من و خوشکەکەی خەوتووین پەیوەندی پێوە دەکات و دێت و دەستم کرد بە سەرکەوتن و سەیرکردن و چۆنیەتی سێکسکردن لەگەڵیدا بەردەوام بووم لە خۆشویستنی ئەوەی بێت و سێکسی لەگەڵ بکات پەیوەندیم پێوە کرد و پێم گوت پێویستم پێتبووە هات بۆ لام گوتم پێویستم پێتبت لەگەڵ مندا شتەکان داببەزێنە لە بنمیچەوە سەرکەوت و داوام لە إسراء کرد لە خوارەوە ڕێکی بخات و کار دەکەین من و ئەو و کەشوهەوای تاریک دەستی پێکرد مەمکم هێنا و چەقۆیم لە پێشیدا کاتێک گەیشت بە داخستنی لەگەڵیدا و گوتم مامه ناتبینم تاریکە دەستم کرد بە چەقۆ و کۆنی لەگەڵیدا داخرا ئەو هەستم بە کۆنی کرد هەڵسا دەستی نا بە کۆنییەوە و من بێدەنگ بووم بەرزی کردەوە جلوبەرگەکانم و من بێدەنگ بووم تاریک بوو کاتێک دەستی کرد بە یاری کردن بە کۆنی و پەنجەکەی خستە ناو کونەکە و من بێدەنگ بووم هەستم بە دابەزین کرد بۆ بۆنکردنی کۆنی و خەوم لێکەوت و من یاری بە مەمکم کرد هێنایەوە و خستییە ناوەوە و دەستی کرد به لێدان و هەردووکیان بێدەنگ بوون دەستم کرد بە قیژاندن ئاخی ئازارم دەدات هەستم دەکەم پارچەم دەکات کاتێک لە کۆنی داگرت و شتەکانی هەڵگرت و دابەزی و دابەزیم گەرماوم کرد و من هێشتا برسی بووم دەستم کرد بە یاری کردن لەگەڵ کۆن و مەمکم ماندوو بووم و زۆر خەوم لێکەوت بانگی إسراءم کرد وەرە پشتی بۆم بشۆرە و من بە بێ جلوبەرگ و جەستەم جوانە کۆنیم گەورەیە إسراء هات دەستی کرد بە شۆردن و هەستی کرد بە دەستی لەسەر پشتی مەمکم زۆر خەو لێکەوت گوتم با جلوبەرگت نەڕزێت داکەنە داکەندم مایەوە بە بەستیان و پانتۆڵ و ئەو لە پشتی من دەشۆر و سکم و من یادم دەکردەوە و خەواڵوو بووم دەستم نا بە سەر کۆنییەوە و دەستم کرد بە خلیسکاندن ئەم شتەی بینی بەڵام بێدەنگ بوو قسەم لەگەڵ کرد گوتم مەمکم باش بشۆر پێش ئەوەی مەمکی لێ بدەیت و دەستی کرد بە شۆردن دواتر پێم گوت مەمکم برسییەتی و ئەو پێكەنی گوتی دەچێتە سەر و ماچی کرد و گوتم دووبارە ماچی بکە و پێكەنین و خۆشەویستی دروست بوو کاتێک هێشتمە ماچی بکات و مایەوە بۆ ماچی و دەستی کرد بە مژینی مەمکم خەو لێکەوت کۆتایی پێ هات دەستم درێژ کرد بۆ مەمکی و دەستم کرد بە یاری کردن و ئەو یاری کرد خەو لێکەوت دەمم برد و دەستمان کرد بە مژین و یاری کردن بە کۆن و یاری بە کۆنی کردم داکەندم و چێژمان وەرگرت گوتی یاسر چێژی لەگەڵ من وەرگرت جارێک لە کۆنی خۆم گوتم با ئەمڕۆ بێت پەیوەندیم پێوە کرد و سەرکەوتن و سێکسیان کرد هاتمە ژوورەوە و چووم مەمکم مژی لەگەڵ کۆنی إسراء و ئەو ماندوو بوو جلوبەرگەکانم داکەند و دایخستە ناو کۆنییەوە و من دەقیژاندم و ئەو لێدانی دا دواتر لەسەر پشتی نووست و دانیشت لەسەری و کچەکەم یاری بە مەمکم کرد و تەواو بوو و دۆخەکە بەردەوام بوو و سێکس یان یاسر یان من یان کچەکەم و بۆوە ٤ مانگ سێکسی لەگەڵ ئێمە کرد من و إسراء و دەستخۆشی لە یاسر
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
[['text'=>" گەڕانەوە 🔙",'callback_data'=>'SAD2']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" چاودێری چیرۆکی دووەم دەکات ،
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "OO3"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ئەمڕۆ چیرۆکم لەگەڵ خۆشەویستی ژیانم و خوشکەکەیەتی
بە ڕاستی ناوەکان خەیاڵین من عەلی تەمەنم ٢٢ ساڵە باڵابەرز و ماسولکەدارم و خۆشەویستەکەم لەیلا تەمەنی ٢٠ ساڵە کورتە باڵا و سپیە😍 پێش ساڵێک ناسیم قسەمان دەکرد لە سەرەتادا قسەی ئاسایی دواتر پێم گوت برسییمە ئەویش شەرمی کرد و تەلەفۆنەکەی داخست دواتر دوای سەعاتێک تەلەفۆنم بۆ کرد گوتم بۆچی تەلەفۆنت داخست قورستر قسەی دەکرد دواتر ڕازی بوو و سێکسمان کرد بە کامێرا بۆ ماوەی مانگێک لەسەر ئەم بارودۆخە بووین دواتر پێم گوت دەمەوێتت ببینم گوتی تەنها ئەگەر خێزانەکەم چوونکە دێنە بەغدا و من دەمێنمەوە لەگەڵ خوشکە گەورەکەم دەتوانیت بێیت گوتم و خوشکەکەت گوتی خەمت نەبێت نایهێڵم گومانت هەبێت کاتێک خەوتووە دەتخەمە ژوورەوە باشە چووڕامە ناوەوە خوشکەکەی خەوتبوو چووینە ژوورەوە ئۆفی خودا دروستی نەکردووە دەمم گرت بۆ چارەکە سەعاتێک دواتر جلەکەم ڕاکێشا دڕا و سەیاتە پەمەییەکەی دەرکەوت و شەرتەکەم ڕاکێشا پانتۆڵی بنکەی خەتەنەی مۆر دانیشتم مەمکم مژی و دابەزیم بۆ سەرکی گەیشتمە کۆنی جلەکەم خستە دەممەوە و دەستم کرد بە فووکردنە ناو کۆنی ئەو تەنها ئەوەی دەکرد ئا ئا ئا ئا دەناڵاند باشە زمانم دانەو و تونی لەگەڵ زمانمدا درزی خستە ناو کافرەوە دواتر دەستم کرد بە مژین و لە دەممدا هێنامە دەرەوە دواتر پێم گوت نۆبەی تۆیە کۆنم گرت کچە گیانە دوو سەرەی دەرکرد بەڵام تەنها دۆندرمە و سەری خستە ناو دەمیەوە و تف کردە سەر مەمکم و خلیسکاند دواتر پێم گوت دابەبەش گوتی ئازاری هەیە گوتم فازلینم بۆ دەهێنیت و لەگەڵتدا نەرم دەبم گوتی باشە فازلینم هێنا و چەوریم کرد و کۆنی ئەو و کۆنی خۆم و من برای تۆم بیرم چوو خوشکەکەم لە ماڵەوەیە کردم و دابەزیمە سەر هەمووی و هەموویم خستە ناوەوە تەنانەت هێلکەکانیش و ئەو لە هەموو دەنگێکدا کافر بوو و قیژاندی و هیچ هەستی پێ نەکرد ئەگەر دەرگاکە نەکرایەوە و خوشکەکەی بە ڕاکردن نەیەت خوشکەکەمم خستە دەمەوە و قەمسەڵەکەم دڕا و دەستم کرد بە مژینی تا خەو لێکەوت دەرگاکەم داخست و ئەو و خوشکەکەم گرت و دوو سەرەم لە کۆنیدا لێدا و خۆشەویستەکەم لە کۆنیەوە سەرەتای لێدا دواتر گەرماومان کرد و دوو سەرە لە خوارەوە لێدام و چاوەڕێم بکەن لە چیرۆکی دووەمدا دوای هەفتەیەک سێکسیان لەگەڵ دەکەم ئەوان و کچە مامیان💜
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
[['text'=>" گەڕانەوە 🔙",'callback_data'=>'SAD2']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" چاودێری چیرۆکی سێیەم دەکات ،
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "OO4"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"سڵاو خۆشەویستان چیرۆکەکەم ڕاستەقینەیە 😇 ئەمڕۆ چیرۆکەکەمان باس دەکەم من و کچێک بە ناوی زەینَب خوێندکارە گرنگە ناوم حەمودییە تەمەنم ١٩ ساڵە لە عیمارەوە و زەینەب تەمەنی ١٨ ساڵە لە عیمارەشەوە هاوسەرگیری نەکردووە خاوەنی قنگێکە کە لە زەوییدا دەتەقێت سپییە گۆشتنە دەگەڕێتەوە دواوە و مەمکێکی هەڵئاوساو لەمەش بە توندی و باڵا بەرز مەمک بە خودا دەمرن و دوو غەممازی هەیە و سپییەکی بەفرینە واتە جەستەی زۆر باشە چونکە ئەو لەگەڵ دایکی لە صالۆن کار دەکات گرنگە جارێک هاتە ماڵمان بۆ ئەوەی جلوبەرگ لە دایکم ببڕێت بینیم زۆر برسییە بێگومان من و ئەو لە نێوانماندا سووکایەتی و شۆخ و شەنگ و پێكەنین هەیە گرنگە لەو ڕۆژەدا خێزانەکەم دەیانویست بچن بۆ باخچە و من لەو کاتەدا حەزم نەبوو وە زەینەبیش برسی بوو و لە لای منە گرنگە خێزانەکەم چووبوون بۆ باخچە و من و ئەو لە ماڵەوە ماینەوە جا پێم گوتت حەز دەکەیت دەرچەم بۆ ئەوەی لە ماڵەوە ئاسوودە بم گوتی نەخێر حەمودی بمێنەوە مەڕۆ پێویستم پێتبووە لە لای من من پێم گوت باشە و لە خەیاڵمدا نەبوو شتێک لەو ڕۆژەدا ڕووبدات بەڵام من برسی بووم و وەک حۆرییەک لە بەهەشت بوو گرنگە ئەو دەچێت بۆ گەرماو و من نەدەزانیم لەوێیە و لەو کاتەیدا کە ئەو دەچوو بۆ گەرماو من خۆم ئامادە دەکردم بڕۆم بۆ حەمام بۆ ئەوەی گەرماو بکەم بەڵام نەمدەزانی ئەو لە خوارەوە لە حەمامەکەیە چونکە ماڵەکەی ئێمە تەنها یەک حەمامی هەیە گرنگە من لە پانتۆڵدا بووم و چووم بۆ حەمام و ئەو لەبیریکردبوو دەرگاکە داخات... بۆیە چوومە ژوور حەمام بینیم ڕووتە و خۆی خلیسکێنەری کۆنی خۆی دەکرد من سەرسام بووم پێی و جیهانم لەبیرچوو ئەو هەستی بە من کرد سووڕایەوە خۆی داپۆشی دەستی کرد بە قورسکردن لەسەر من و دەستی کرد بە جنێودان بە من بەڵام بە شۆخ و شەنگ من داوای لێبووردن لێم کرد و دەرچووم بەڵام بەروبوومەکە لە مێشکمدا مایەوە و کاتی خلیسکاندن لەسەر کۆنی گرنگە خێزانەکەم گەڕانەوە شەوەکە و هەموان لە ژوورەکەیاندا خەوتن کاتژمێر ١ بوو من ڕامهێنراوە هەموو ڕۆژێک یەک سەر لە دوا ١ لێبدەم بۆ ئەوەی بخەوم گرنگە من سەیرکردنی فیلمی سێکسی دەکەم و کۆنم دەبەم و کۆنم دەبەمە سەر کۆنی دەستی کرد بە پەلاماردانی من لە ناکاو من گرنگیم پێ نەدا بەردەوام بووم لە لێدان و ئەو سەیری دەکرد پێی گوترا راستییەکانت بێزارکەرن و پێکەنی هات و نزیک بووەوە لە من گوتی حەمودی دەتەوێت بحەسێیتەوە گوتم خۆزگە گوتی کەواتە من تۆ دەحەسێنمەوە بەڵام بە مەرجێک منیشت بحەسێیتەوە پێم گوت فەرموو مەمک مەبەستە گرنگە گرتنی لە ملی مایەوە نزیکەی ڕووبەعە سەعاتێک لەگەڵیدا حەز دەکەم پاشان دابەزیمە سەر ملی دەستم کرد بە مژین تا خەو لێکەوت پانتۆڵەکەم لێکردەوە و بینیم مەمکەکەی ئۆفی بۆ مەکە و خێزانەکەی کە دروستی کردووە دەستم کرد بە مژینی توند هێنامە دەرەوە مەمکی مژیم و تێر کرد بە ئاوی دەمم و پانتۆڵەکەم داکەند و پانتۆڵی خەتەنەی سوورم داکەند و بينيم قنگ و کۆنی لە شێوەی ڕەنگێکی پەمەیی و لەو هەڵئاوساوە خڕڕڕە بۆ دینەکەی دەمرێت بۆ سێکس تا بەیانی و جەستەی هیچ موویەکی تێدا نەبوو گرنگە بەردەوام بووم لە مژین بۆ نیو سەعات سەرەتای یەکەمم فڕێدا حەسایەوە گوتی ئێستا نۆبەی منە و دەستی کرد بە گرتنی کۆنم و دەستی کرد بە مژین مژین و مژینی لەگەڵ هێلکەکاندا کچی خاوەن کۆنەکان چەند کچیم بینیوە ئەزموونیان هەیە لە مژیندا بەڵام وەک ئەزموونی ئەو نەمدیوە گرنگە بەردەوام بوو لە مژین تا سەرەتای یەکەمم فڕێدایە ناو دەمیەوە و پاشان خستمیە دۆخی سەگ 🐕 دواى تەنها کاتێک دەستم کرد بە خستنە ناو سەریەوە دەستی کرد بە قیژاندن ئاهااااااا و من کۆنم بەست دەستم کرد بە لێدان بەسەرەوە زیاتر لە نیو سەعات پاشان خەوخستن لەسەر پشت و دانیشت لەسەر کۆنم و دەستی کرد بە بازدان و ئاڵوگۆڕکردن لەگەڵیدا خۆشەویستم. و خلیسکاندنی مەمکی گەیشتمە سەرتی سەرەم گوتم لە کوێ فڕێ دەدەم گوتی فڕێ بدە ناو دەممەوە هەموو سەرەتای دووەمم فڕێدایە ناو دەمیەوە و پاشان کەمێک حەسایەوە هات و دەستی کرد بە یاری کردن بە کۆنم و مژینی ئەو وایکرد کۆنم هەڵبستێت لەسەر پیای گوتی ئێستا لە کۆنییەوە دەمەوێت گوتم هەڵمدەگری گوتی تاقیم دەکەینەوە هیچ نەبوو گوتم باشە فازلينم هێნა و دامنا لەسەر (کۆنی کۆنی ئەو) و دامنا لەسەر کۆن و لەسەر سکی خەواندم خستمە ناو سەریەوە دەستی کرد بە قیژاندنێکی گەورە گوتم لێم گەڕێ دەستم کرد بە داخستن کەم کەم و دەستی کرد بە قیژاندن ئاخ ئاخ ئاخ حەمودی ئازاری هەیە دەریپەڕێنە خۆشەویستم بەرگە ناگری پێستم دڕا گوتم خۆشەویستەکەم ئێستا کەمێک ڕادێیت لەگەڵیدا گرنگە بەردەوام بووم لە لێدان بە نەرمی کەم کەم و پاشان زیادیم کرد و دەستم کرد بە کارکردن بە خێرایی و ئەو ئاخ ئاخ ئاخ ئاخ فیدای کۆنت ئا سووکەکانیم حەسێنەوە حەسێنەوە سێکس بکە لەگەڵمدا سێکس بکە بە خودا لەسەر ئەم دۆخە بەردەوام بووم بۆ سەعاتێک سێکس دەکەم لەگەڵیدا و پاشان فڕێم دایە ناو کۆنییەوە سەرەتی سێیەم و چووینە ناوەوە گەرماوم کرد سەرم بڕی و سەرەتی چوارەمم پێدا 😍😍
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
[['text'=>" گەڕانەوە 🔙",'callback_data'=>'SAD2']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" چاودێری چیرۆکی چوارەم دەکات ،
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "OO5"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"سڵاو من تەبارەک لە بەغدا تەمەنم ٢٢ ساڵە خۆشەویستیم هەیە کەسێک بە ناوی عەلاوە.. جا جارێک زۆر بێزاربووم پێم گوت عەلاو با دەرچەین پێی گوت باشە بەیانی دەرچووین و زۆر گەرم بوو پێی گوت با بڕۆین بۆ ماڵمان چونکە خێزانەکەم چووبوونە دەرەوە پێم گوت باشە و من خۆشم دەوێت متمانەم پێیەتی پەیوەندی ٤ ساڵ.. چووینە ماڵەکەیان و خستییە ژوورەکەیەوە و ڕاستەوخۆ دەستی کرد بە ماچکردن و باوەشپێداکردنم لە ملیەوە بۆنی کردم چونکە خاڵی لاوازی من ملی منە.. جلوبەرگی داکەندم و لەسەر جێگاکەی خەواندم و لە مەمکیم مژی و دابەزی بۆ مژینی کۆنم و من زۆر تێکوپێک شکابووم.. جلوبەرگیم داکەند و ماچم کرد و گەستمی و پشتی قورسکردم.. و دابەزیم بۆ سەر کۆنی مژین و یاری کردن بە هێلکەکانی و فڕێمە ناو دەممەوە و ئەو زۆر تێکوپێک شکابوو.. و من لەو جۆرەکانم کە زۆر سێکسیم و حەزم بە توندوتیژییە دەزانێت لە قژم گرت و کۆنی هەمووی خستە ناو قوڕگممەوە گەیشتە قوڕگیشم.. و لێیدام و زللەی توندی لێدام.. و چەماوەیەوە و لەسەر کۆنیم لێیدا و من دەقیژاندم ئاخ بەسە عەلاو و کاتێک پێی دەڵێم بەسە سزادەم لێم دەدات بە پشتێن لەسەر کۆنیم.. و تف لە کونەکەی کۆنیم کرد و کۆنی خستە ناوەوە تەنها سەری مایەوە دەقیژاندم دەریپەڕێنە ئااخ.. دەریپەڕێنە و لە قژم گرت ڕایكێشامە ناو ژوورەوە.. و لێیدام بە پشتێن لەسەر کۆنیم دە لێدان.. و من زۆر ئازارمم چەشت بەڵام چێژبەخش بوو چونکە حەزم بە توندوتیژییە.. و پاشان کۆنی خستە ناو دەممەوە و لە کۆنیمەوە دەستی کرد بە خلیسکاندن.. قاچی بەرزکردەوە کەمێک لە کۆنی خستە ناوەوە قیژاندم ئااخ و لێیدام بە توندی و لە قژم گرت بۆ ئەوەی بێدەنگ بم.. و بە توندی خستیە ناوەوە هەمووی و من قیژاندم قیژاندنێکی زۆر بەهێز دەستم کرد بە گریمان لە ئازارەکە و پێی گوت.. ششش ئەمڕۆ کۆنەت دەڕڕێنم و بەردەوام بوو لە سێکسکردن لەگەڵمدا دەنیشت و دەردەچوو بە توندی.. و فڕێیدایە ناو کۆنیمەوە و پێکهاتەکە زۆر گەرم بوو و کۆنی لە کۆنیمدا مایەوە و ئەو ماچی کردم.. و کۆنی نووست و من زۆر برسی بووم دەستم کرد بە یاری کردن بە کۆنی بەرزیم کردەوە و مژیم و ئەو سەری هەڵدا فول پێی گوت سزا دەدەم پێم گوت بەڵێ سزا بدە و سێکس بکە لەگەڵمدا پێی گوت بەرگە دەگری پێم گوت بەڵێ بەرگە دەگری.. و بە گورتی لە قاچ و دەستم بەست بۆ ئەوەی جووڵە نەکەم و گورتی لە ملی خست و بە توندی بەستیەوە بووم وەک سەگ لە ژێر دەستیدا و دەمی بە لەزگە داخست.. و خولانەوەیم دەکرد لە ژوورەکەدا لەو گورتییەی لە ملیەوە بوو و مۆمێکی بۆ هێنام و کەوتە سەر جەستەم مردیم لە گەرمییەکەی.. و خەواندمی لەسەر پشت و قاچی بەرزکردەوە.. و لە کۆنیم دەدا بە سۆندە مردیم لە ئازارەکە بەڵام زۆر خۆش بوو.. و لێیدا لە جەستەم بە سۆندە و ڕایكێشام لە قژم.. و پاشان خەواندمی لەسەر سکم.. و سۆندەکەی کردە دوو قات زۆر ڕەق بوو خستیە ناو کۆنیمەوە و لێیدا بە پشتێن لەسەر کۆنیم و من دەگریام لە ئازارەکە پێی گوت بەزەییم پێتا نایەت تێر کوشتم و سۆندەکە لە کۆنیمدا سەعاتێکی تەواو دەیخستە ناوەوە و دەردەچوو لێیدا بووم بە شین لە لێدان.. و سۆندەکەی لە کۆنی دەرکرد و ڕاستەوخۆ.. کۆنی خستە ناو کۆنیمەوە و من زۆر ئازارم چەشت و نیو سەعات بەردەوام بوو لە سێکسکردن لەگەڵمدا لە کۆنییەوە و فڕێیدایە ناو کۆنیمەوە و حەسایەوە.. واتە سەعات و نیوێک کونەکەی کۆنی بەتاڵ نەبوو.. پاشان لەزگەکەی لە دەمم دەکردەوە پێی گوت تێر بوویت پێم گوت بەڵێ.. گرنگە گورتییەکەی کردەوە چونکە بەستیبووی و گەرماومان کرد بەیەکەوە و لە حەمامیشدا هێشتمە سەرەتایەکی تر تەواو بکات.. و ڕۆژێکی زۆر خۆش بوو هیوایە لە کچان و کوڕان دەسدرێژی تاقی بکەنەوە چونکە هەستێکی وەصفناکرێت
@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
[['text'=>" گەڕانەوە 🔙",'callback_data'=>'SAD2']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" چاودێری چیرۆکی پێنجەم دەکات ،
name : $Name ، 🐋
id : $useree ، 🐊   ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB1"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/2",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی یەکەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB2"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/3",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی دووەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB3"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/4",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی سێیەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB4"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/6",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی چوارەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB5"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/7",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی پێنجەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB6"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/8",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی شەشەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB7"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/9",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی حەوتەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB8"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/10",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی هەشتەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB9"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/11",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی نۆیەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB10"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/6",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی دەیەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL1"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/32",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی یەکەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL2"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/31",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی دووەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL3"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/30",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی سێیەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL4"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/29",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی چوارەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL5"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/28",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی پێنجەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL6"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/27",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی شەشەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL7"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/26",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی حەوتەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL8"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/25",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی هەشتەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL9"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/24",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی نۆیەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL10"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/23",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی دەیەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data=="X7"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱قنگی مێردەکەت درێژە یان ناوکە شۆخە 😹💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱درێژە⊰•",'callback_data'=>'MJ']],
[['text'=>"•⊱ناوکە شۆخە ⊰•",'callback_data'=>'MG']],
]
])
]);
}
if($data=="MJ"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱دیارە کۆنتت شکاندووە 😹💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'KL']],
]
])
]);
}
if($data=="MG"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱بەزەییم پێتا دێت بێبەش کراوە 😹💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'KL']],
]
])
]);
}
if($data=="KL"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱مێردەکەت بۆت دەلێسێتەوە 😹💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱نەخێر⊰•",'callback_data'=>'HY']],
[['text'=>"•⊱بێگومان⊰•",'callback_data'=>'HU']],]])]);}
if($data=="HY"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
•⊱کەواتە وەرە لای من 😻😹⊰•
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'IO']],]])]);}
if($data=="KL"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱مێردەکەت بۆت دەلێسێتەوە 😹💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱نەخێر⊰•",'callback_data'=>'HY']],
[['text'=>"•⊱بێگومان⊰•",'callback_data'=>'HU']],]])]);}
if($data=="HY"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
•⊱کەواتە وەرە لای من 😻😹⊰•
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'IO']],]])]);}
if($data=="HU"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
•⊱کەمەرشکێنە پیسەکە 😹😹⊰•
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'IO']],]])]);}
if($data=="IO"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱مێردەکەت لە دواوە لێت دەدات😾⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱بەڵێ ئاساییە⊰•",'callback_data'=>'OP']],
[['text'=>"•⊱ڕازی نابم⊰•",'callback_data'=>'PO']],]])]);}
if($data=="OP"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
•⊱ئاخ دواوە بە توندی بە توندی😹💞⊰•
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'SD']],]])]);}
if($data=="PO"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
•⊱کۆنت بۆچی بێبەش دەکەیت 😹⊰•
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'SD']],]])]);}
if($data=="SD"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
•⊱شەوی زاوایەتی چۆنە 😸💓⊰•
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱سەرنجڕاکێشە⊰•",'callback_data'=>'DF']],
[['text'=>"•⊱ناخۆشە⊰•",'callback_data'=>'FD']],]])]);}
if($data=="DF"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
•⊱ئەها زانیاری نوێ 😹😹⊰•
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'TR']],]])]);}
if($data=="FD"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
ا•⊱هاا کەواتە کۆنتت نەگرتووە 🌝😹⊰•
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'TR']],]])]);}
if($data=="TR"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
•⊱لەگەڵ مێردەکەت لە شەودا دەکەیت یان لە ڕۆژدا 🙁😹⊰•
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱شەو⊰•",'callback_data'=>'RT']],
[['text'=>'•⊱لە ڕۆژدا⊰•','callback_data'=>'TY']],
[['text'=>"•⊱هەموو کاتێک⊰•",'callback_data'=>'YU']],]])]);}
if($data=="RT"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱خۆشترین شت 😻💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'NM']],]])]);}
if($data=="TY"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱شەو خۆشترە بەڵام گرنگ ئارامییە 😹💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'NM']],]])]);}
if($data=="YU"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱ئەوە چییە تەنانەت تامیشی نییە 😹💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'NM']],]])]);}
if($data=="NM"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱چەند سەر ئەنجام دەدەن لە هەر سێکسێکدا 😻😹⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱پێنج و بەرەو سەرەوە⊰•",'callback_data'=>'LOL']],
[['text'=>"•⊱پێنج و خوارەوە⊰•",'callback_data'=>'OLO']],]])]);}
if($data=="LOL"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱کۆنم ماندوو نابێت بە مێردەکەت😹⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'JJH']],]])]);}
if($data=="OLO"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱بەڵێ سوپاس بۆ خوا 😹😹⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'AS']],]])]);}
if($data=="AS"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱خیانەتت لە مێردەکەت کردووە 😸😹⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱بەڵێ⊰•",'callback_data'=>'BNM']],
[['text'=>"•⊱نەخێر⊰•",'callback_data'=>'NBM']],
[['text'=>"•⊱جارێک بوو پەشیمان بوومەوە⊰•",'callback_data'=>'NMB']],]])]);}
if($data=="BNM"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"وەرە با دووبارە خیانەت بکەین 😻😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'HHI']],]])]);}
if($data=="MNB"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱دیارە ناپاکەکە کەمتری نەکردووە بۆت 😹💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'HHI']],]])]);}
if($data=="NBM"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱اف اف سەیری پەشیمانی بکە بڕۆ کچە بێ ڕەوشت 🌝😹⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'HHI']],]])]);}
if($data=="HHI"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱مێردەکەت دەتشارێتەوە یان ماندووە ☹️😹⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱اف دەشارێتەوە⊰•",'callback_data'=>'CV']],
[['text'=>"•⊱نەخێر ماندووە⊰•",'callback_data'=>'VC']],]])]);}
if($data=="CV"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱ئۆه چ شتێک لە دواوە شکاندوویەتی لە پێشەوە 😹💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'VB']],]])]);}
if($data=="VC"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱وەرە با بحەسێنمەوە گیانەکەم 😻💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱گەڕانەوە⊰•",'callback_data'=>'home']],]])]);}
if($data=="X1"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"گەڕەکت هەڵبژێرە لە پێشمدا خلیسکێنە یان لە لای دایکت 😞😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"لای من 😹😻",'callback_data'=>'Z1']],
[['text'=>"لای دایکت😟",'callback_data'=>'Z2']],
]
])
]);
}
if($data=="Z1"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"بە خودا ئەگەر لای من بێیت پیرۆزت بێت لەسەرت ڕاستە🤤
#بەردەوامبە😞😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S1']],
]
])
]);
}
if($data=="Z2"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"وەی شتی خۆش نییە لەو نەسڕەی کە دێت بۆت لە دایکتەوە پیرۆز بێت😹😹😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S1']],
]
])
]);
}
if($data=="S1"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"گەڕەکت هەڵبژێرە لە نێوان پانتۆڵی خەتەنە یان ئاسایی 😉😹👙",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"خەتەنە😹😻👄",'callback_data'=>'F1']],
[['text'=>"ئاسایی😌",'callback_data'=>'F2']],]])]);}
if($data=="F1"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
ئاخ کچە خەتەنە دواوە و وەڵڵا بۆ مژین و گەرمی 🤤😹💋
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S2']],]])]);}
if($data=="F2"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
کوڕە کچی ئاسایی بزانە کۆن بووە. 🙁💛 ۦٰ #هەستی پانتۆڵی باوکم دەبێت 😹😹😹😹
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S2']],]])]);}
if($data=="S2"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"گەڕەکت هەڵبژێرە لە نێوان خلیسکاندن و ئاخ ئاخ 😉😹
یان لە نێوان هاوسەرگیری و #ئارامی 😞😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"خلیسکاندن🙊",'callback_data'=>'F3']],
[['text'=>"هاوسەرگیری💋",'callback_data'=>'F4']],]])]);}
if($data=="F3"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
حەزت لە خلیسکاندنە کچی کۆن کە وا خۆت نیشان دەدەیت نەتەوێت هاوسەرگیری بکەیت 😞😹😹
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S3']],]])]);}
if($data=="F4"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
ئاخ کچی هاوسەرگیری بە سروشتی حەزی لێیە 😹😹
#بەردەوامبە 😹🚶‍♂
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S3']],]])]);}
if($data=="S3"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
چەند جار ڕشتوویەتی یان فڕێیدایە ناو پانتۆڵەکەتەوە🤤👙
دوو جار 😉 » زیاتر🙊
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"دوو جار🙊",'callback_data'=>'F5']],
[['text'=>"زیاتر لە دوو جار🙊😻",'callback_data'=>'F6']],]])]);}
if($data=="F5"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
ئەمە کچی دوو جارە ڕێکەوت بوو و تەواو بوو 😞😹😹😹
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S3']],]])]);}
if($data=="F6"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
ئاخ دیارە پڕبووە پڕ وەرە با هاوسەرگیری بکەین 💕😹
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S4']],]])]);}
if($data=="S4"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
دوا جار پەنجەت خستە ناو کۆنتەوە ☹️😹
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"دەترسێم😮",'callback_data'=>'F7']],
[['text'=>'لە مێژە','callback_data'=>'F8']],
[['text'=>"زۆر تێپەڕ نەکردووە🙊😻",'callback_data'=>'F9']],]])]);}
if($data=="F7"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ئاخ وەرە با بۆتەکە پەنجەکەی بخاتە ناوەوە و پشکنین بکات 😞😹💕",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S5']],]])]);}
if($data=="F8"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"پیرۆز بێت لە گورگ و هەستت چۆن بوو؟  💔😹🖕",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S5']],]])]);}
if($data=="F9"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ئاخ وەرە با بۆتەکە پەنجەکەی بخاتە ناوەوە و پشکنین بکات 😞😹💕",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S5']],]])]);}
if($data=="S5"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"تۆ چۆن حەزت لە کۆنە یان خەیارە 😉👙😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"خەیار😻🙊",'callback_data'=>'F23']],
[['text'=>"کۆن",'callback_data'=>'F24']],]])]);}
if($data=="F23"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ئاخ فیدای ئەوەی کە سروشتی حەز لێیە وەرە بمژە
#بەردەوامبە 🤤😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S6']],]])]);}
if($data=="F24"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"کچی خەیار دیارە تاقیت کردووەتەوە 😹😹
#بەردەوامبە",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S6']],]])]);}
if($data=="S6"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"زیاتر لەگەڵ کێ سێکس دەکەیت، ماڵپەڕ یان خۆشەویستەکەت😞😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"😢ماڵپەڕەکان",'callback_data'=>'F26']],
[['text'=>"😋خۆشەویستەکەم",'callback_data'=>'F27']],
[['text'=>"هیچ کەسێک 😌",'callback_data'=>'F28']],]])]);}
if($data=="F26"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"خزمەتگوزاری سێکسم بۆ بکە بە خێرایی • وەرە ،🙌🏼Ֆ سێکس لەگەڵت دەکەم بە بێ بەرامبەر پەیامێک بنێرە بڵێ سێکس لەگەڵم بکە 💕",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S7']],]])]);}
if($data=="F27"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ئاخ خۆشە بە سەرتەوە دیارە تێرت دەکات 😞😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S7']],]])]);}
if($data=="F28"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"بۆچی گیانەکەم 😾😹✨ حەزت لە سێکس نییە",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S8']],]])]);}
if($data=="S8"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"رەنگی مەمکت چۆنە و قەبارەی سەیانت چەندە 😉😻
پەمەیی 35✨🤤
قاوەیی 35 😻💋",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"پەمەیی 35✨🤤",'callback_data'=>'F30']],
[['text'=>"قاوەیی 35💋",'callback_data'=>'F31']],]])]);}
if($data=="F31"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ئاخ ئەەی قاوەیی وەرە فیدای ئەو مەمکە بێ بۆت
بۆ مژین و کوشتن • سڵاو ،💋 💕🤤",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S9']],]])]);}
if($data=="F30"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ئۆفی هەم مەمکی پەمەیی و هەم دواوە
پیرۆز بێت لە خۆشەویستەکەت من لە شوێنی ئەو دەمکوشت لە سێکسکردنداگەڵتدا 🤭😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S9']],]])]);}
if($data=="S9"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"گەڕەکت هەڵبژێرە لە سێکسدا دۆخی 69🤤
یان دۆخی 56😻",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"دۆخی 69🙊",'callback_data'=>'F32']],
[['text'=>"دۆخی 56😻",'callback_data'=>'F33']],
[['text'=>"هیچ کامێک",'callback_data'=>'F34']],]])]);}
if($data=="F32"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ئاخخ دیارە فێری مژین بووی وەرە
ئەمەش فڕێبدە و سێکسی لەگەڵ من بکە ☹️😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S10']],]])]);}
if($data=="F33"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"چەند کۆنە ئاڵوگۆڕ بکە بە دۆخی پشیلە و تەواو 😑😹وەرزشی لەگەڵ بکە 69",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S10']],]])]);}
if($data=="F34"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"کەواتە چ دۆخێک بە دلتە؟  $SSK",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S11']],]])]);}


If($data=="F61"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| لە هەموو شەقامەکەدا خەڵک دەتبینێت و ئازار دەچێژیت بەڵام تەنها لای من پارێزراویت  $SSK 😉",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S12']],]])]);}


if($data=="S11"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| ئامادەییت هەیە مەساج بکەیت لە بەردەم باوکتدا یان بێم بۆت بکەم بە تەنیا",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"مەساجم بۆ بکە",'callback_data'=>'F63']],
[['text'=>"لە بەردەم باوکمدا",'callback_data'=>'F64']],]])]);}

if($data=="F63"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| بەیانی و شەو مەساجت بۆ دەکەم و هیچ پشوویەک نییە $SSK 😉",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S12']],]])]);}

if($data=="F64"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| تەنانەت قۆندرە لە باوکت دەخۆیت 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S12']],]])]);}

if($data=="S12"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| یاری بە سنگت دەکەیت لە بەردەم باوکتدا یان من یاری پێ بکەم",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"تۆ یاری بە سنگم بکە",'callback_data'=>'F65']],
[['text'=>"لە بەردەم باوکمدا",'callback_data'=>'F66']],]])]);}

if($data=="F65"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| یاری پێ دەکەم و دەیمژم 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S13']],]])]);}


If($data=="F66"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| هەتا دەخۆیت زللە و قۆندرە لە باوکتا دەخۆیت 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S13']],]])]);}

if($data=="S13"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| پەنجەت دەنێیتە دواوە یان کەسێک مەمکت دەمژێت",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"لە مەمکما",'callback_data'=>'F67']],
[['text'=>"لە دواوەم",'callback_data'=>'F68']],]])]);}

if($data=="F67"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| ئۆف خۆ لای تۆ باقم تەنها نەمژم دەیئەم 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S14']],]])]);}

if($data=="F68"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| خوای گەورە یارمەتی بكات ئەگەر پەنجەت درێژ بێت 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S14']],]])]);}


if($data=="S14"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| ئەگەر سەرپشکت بکەن لە نێوان خواردنی باچە و مژینی لێوەکانت 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"مژینی لێوەکانم",'callback_data'=>'F70']],
[['text'=>"خواردنی باچە",'callback_data'=>'F71']],]])]);}
if($data=="F70"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| لێوەکانت دەخۆم و زمانت دەمژم وەف",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S15']],]])]);}

if($data=="F71"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| خۆ ئەگەر لەگەڵ مندا ماچت نەکردبایە باشتر نەبوو 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S15']],]])]);}

if($data=="S15"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| ئەگەر سەرپشکت بکەن لە نێوان خەوتن لە ژوورێکدا کە پڕە لە مشک یان ئەوەی دەستم بخەمە ناو ستیانەکەتەوە😹😔",

'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بخەوم",'callback_data'=>'F72']],
[['text'=>"دەست بخەە ناوەوە",'callback_data'=>'F73']],]])]);}

if($data=="F72"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| خۆ ئەگەر دەستم نەخستایە ناوەوە باشتر نەبوو بۆت 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰• ",'callback_data'=>'home']],]])]);}

if($data=="F73"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| ئۆف دەست دەخەمە ناوەوە و سەرمش",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}

if($data=="X3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"💗 بەخێر بێیت گیانەکەم بۆ بەشی پرسیارە گەرمەکان، ڕەگەزەکەت هەڵبژێرە و یاری دەپێکرە و چێژ وەرگرە 👅🔞✨",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"کچ👩",'callback_data'=>'A1']],
[['text'=>"کوڕ👨",'callback_data'=>'A2']],
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}

if($data=="A1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"پانتۆڵەکەت چ ڕەنگێکە 👙🙈 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"پەمەیی🙊😻",'callback_data'=>'B1']],
[['text'=>"ڕەش👍💟",'callback_data'=>'B2']],]])]);}

if($data=="B1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وۆف ئەوەی پەمەیی دەکوژێت 😞😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S16']],]])]);}

if($data=="B2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"خۆزگە بەوەی کە هەتە 😉",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S16']],]])]);}

if($data=="S16"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"قوڕنت چەند گەورەیە",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"گەورە",'callback_data'=>'B3']],
[['text'=>"بچووک",'callback_data'=>'B4']],
[['text'=>"ناوەند",'callback_data'=>'B5']],]])]);}

if($data=="B3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"نۆشی گیانی ئەوەی دەتگرێت 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S17']],]])]);}

if($data=="B4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وۆف ئاچ برای لێستن ɵ̷̥̥᷄ˬɵ̷̥̥᷅",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S17']],]])]);}

if($data=="B5"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ئۆیلی بۆ مژینی مەمکت 💞😻😹",

'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S17']],]])]);}

if($data=="S17"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هیچ کەس لە خزمەکانت لەتت کردووە 🥺🤓 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بەڵێ🙊",'callback_data'=>'B6']],
[['text'=>"نەخێر💔",'callback_data'=>' B7']],]])]);}


if($data=="B6"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هەزار خۆشایی♥️🙈 ڕۆحەکەم",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S18']],]])]);}
if($data=="B7"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"بیچاره بێبەشکراوە😹😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S18']],]])]);}

if($data=="S18"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"گووی گەورە یان بچووک 😾🔥؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"گەورە💙",'callback_data'=>'B8']],
[['text'=>"بچووک",'callback_data'=>'B9']],]])]);}

if($data=="B8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هی نێچ و لێدان 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S19']],]])]);}

if($data=="B9"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هی نێچ و لێدان 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S19']],]])]);}

if($data=="S19"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"کە ئارەزووت دەبێت مەمکت دەشێلی یان قوزت 🤤 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"قوزم😻😌",'callback_data'=>'B10']],
[['text'=>"مەمکەم🙈",'callback_data'=>'B11']],]])]);}

if($data=="B10"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ئۆیلی دەبێت نێچ بێت 🔥🤤 $SSK",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S20']],]])]);}

if($data=="B11"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ئاچ ئێستا مەمکت چەند گەورە بووە لە مەشین ɵ̷̥̥᷄ˬɵ̷̥̥᷅",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S20']],]])]);}



if($data=="S20"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"چی زیاتر لە جەستەتدا دەتوێنێتەوە 🤤😉؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ملم💙",'callback_data'=>'B12']],
[['text'=>"مەمکەم😉🙊",'callback_data'=>'B13']],]])]);}

if($data=="B12"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەکرێت بمژرێت خۆشەویستم؟ 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S21']],]])]);}
if($data=="B13"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەکرێت بمژرێت خۆشەویستم؟ 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S21']],]])]);}

if($data=="S21"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"چەند جار لە پێشەوە دەپەڕێنرێیت 🤔😹 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"هیچ جارێک 😻",'callback_data'=>'B14']],
[['text'=>"زۆر😌",'callback_data'=>'B15']],]])]);}

if($data=="B14"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"تەمەنت خەسارە😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}

if($data=="B15"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هاها ئەوەی فراوان 🙂😹😹😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}


if($data=="A2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ئەگەر سەرپشک کرایت لە نێوان لەتکردنی کچێکی تەمەن ١١ ساڵ 😑😹
یان پیرەژنێکی تەمەن ٦٠ ساڵ 😞💕😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"کچێک😹",'callback_data'=>'B16']],
[['text'=>"پیرەژن",'callback_data'=>'B17']],]])]);}

if($data=="B16"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"لە لە لە کۆتایی تەمەندا پیرەژنێک دەپەڕێنیت 😹😹
`خوا` یارمەتیت بدات ڕۆڵە 😹🚶‍♂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}

if($data=="X4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"•⊱ _بەخێر بێیت عزیزم بۆ بەشی دەبێت وێنە_ ⊰•
•⊱ _یەکێک لە هەڵبژاردەکانی خوارەوە هەڵبژێرە_ ⊰•",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱جوانەمێر⊰•",'callback_data'=>'XQ']],
[['text'=>"•⊱جوانەمیلە⊰•",'callback_data'=>'QX']],
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}

if($data=="XQ"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"•⊱ وێنەیەکی قۆڕنت بنێرە بۆم 🙁😹💞 ⊰•
@MeDo4",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}

if($data=="QX"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>" هەر وێنەیەک بۆ بۆت بنێرە و ئەو بڕیار دەدات",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}

$k5 = array(
"نییە",
"دەبێت",
"ئەمە چییە",
"پیس",
"واتە نیوە بە نیوە",
"کارێکی پیسە",
"وڕ",
"دەبێت زۆر بەهێزە هەمووی 🙁😹💞",
);
$k51 = array_rand($k5, 1);








  If($text != "/start" and $chat_id != $admin ){
      bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"پێداچوونەوە دەکرێت . . . ",
  ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"$k5[$k51]" ,
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- گەڕانەوە", 'callback_data'=>'help']],
]
])]);
unlink("zkref/$useree/zeakef.txt");
unlink("medo941/$useree/inasgram.txt");
}

if($data=="X5"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"♥️⁞ بەخێر بێیت گیانەکەم بۆ بەشی ( دەبێت ئاسایی ) ڕەگەزەکەت هەڵبژێرە و دەست بە یاری بکە و چێژ وەرگرە 💘✨.",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"کچ 🙊",'callback_data'=>'H1']],
[['text'=>"کوڕ😹",'callback_data'=>'H2']],
[['text'=>"گەڕانەوە",'callback_data'=>'home']],]])]);}

if($data=="H2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"تۆ پیاویت نەک یاری بۆ ئەمە
https://www.fuq.com",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}

if($data=="H1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ئەی ڕووتەڵە😹/دەبێت 🌚💃
【قژت بە نەوت بشۆیت🙊🙀/مێشولەیەک بە دەستت بگریت😹】",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"مێشولەیەک بگریت",'callback_data'=>'H3']],
[['text'=>"قژت بشۆیت",'callback_data'=>'H4']],]])]);}

if($data=="H3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەی گیانەکەم💃💃

لەگەڵ مندا گۆرانی بڵێ🔇🔇
ئەی مێشولە و قالۆنە😹💃💃 ها ها ئەی مێشولە و قالۆنە😹💃💃",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S23']],]])]);}

if($data=="H4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ئاحم🌚😹

ئەمە کێیە مێشولە دەگرێت🌚😹
دڵنیایت 🌚😹 ئەمە ڕووخسارتە 😹💃",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S23']],]])]);}

if($data=="S23"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ئەی دوای ڕۆحی بۆت و گەشەپێدەرەکە😹
دەبێت 🙀

【بە بێ مکیاژ دەربکەویت و هەموو عێراق بژمێریت😹/

بڕۆ بۆ لای دایکت و پێی بڵێ من بە دزی هاوسەرگیریم کردووە🙊😹】",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بێ مکیاژ",'callback_data'=>'R1']],
[['text'=>"بڕۆم بۆ لای دایکم",'callback_data'=>'R2']],]])]);}

if($data=="R1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"سوێند بە خودا درۆزنە😹
بە ڕاستی درۆزنە?? سوێند بە حسین درۆزنە😹
ئەو پیسە 😹 شێواوە😴😹
ڕوخسارت وەکو گەشەپێدەری بۆتەکەیە سەیرە😏😹
و بە بێ مکیاژ دەردەکەویت😹💃💃
وزەی گەنجان بۆ هاوسەرگیری دەبڕیت😹💃💃🌚",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S24']],]])]);}

if($data=="R2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەستی خۆش بێت🌚💪

و بەهێز بمێنەوە خۆشەویستم😼
و لە یەکەم زللەوە مەگری😹😹😹😹
💃💃💃💃💃💃",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S24']],]])]);}

if($data=="S24"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەبێت 🌚😹

【بە بێ ستیان دەربکەویت👙/🌚😹/لێو بە ميدۆ بدەیت 🌚😹】",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بە بێ ستیان دەربکەوم",'callback_data'=>'R3']],
[['text'=>"لێو بە ميدۆ بدەم",'callback_data'=>'R4']],]])]);}

if($data=="R3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وۆف🙊😹

و وەرە لای گەشەپێدەر ميدۆ😹💃
دەیەوێت قسەت لەگەڵ بکات🌚😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}


if($data=="R4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"درۆزنەااااااااااااااااااااد🌚😹

دەگەی بە لای من و پانتۆڵەکەت لەبەر دەکەیت 🙁😹💞",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}


if($data=="X8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"شەوی گواستنەوە چۆنە خۆشەویستەکەم 😉😹 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ناوازەیە😻",'callback_data'=>'Q1']],
[['text'=>"ماندوبوون😻",'callback_data'=>'Q2']],]])]);}

If($data=="Q1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هاها گیانەکەم دەبێت باش حەواندووتەوە یان تۆ ڕاهاتووی 😹🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S30']],]])]);}


if($data=="Q2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەی ڕۆحەکەم گەورە دەبیت و لەبیرت دەچێتەوە 😌😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S30']],]])]);}

if($data=="S30"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"چەند جار ڕووتان کردەوە تۆ و مێردەکەت لە شەوی گواستنەوەدا 😻🙊😹 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"زیاتر لە ٥😻",'callback_data'=>'Q3']],
[['text'=>"کەمتر لە ٥😟",'callback_data'=>'Q4']],]])]);}


if($data=="Q3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەزانم قوزە یان تەکسییە چت هەیە 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S31']],]])]);}

if($data=="Q4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەستی خۆش بێت گیانەکەم باش دەکەیت نەوەک تۆ تەکسییە 🤤💔😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S31']],]])]);}

if($data=="S31"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"مێردەکەت مەمکت خۆش دەوێت 😾❤️ ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بەڵێ💓",'callback_data'=>'Q5']],
[['text'=>"نەخێر😧",'callback_data'=>'Q6']],]])]);}

if($data=="Q5"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەبێت تێێر بووبێت لەسەری هەموو ڕۆژێک دەیدەیتێ 💘😹😹✨",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S32']],]])]);}


if($data=="Q6"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەبێت تێێر بووبێت لەسەری هەموو ڕۆژێک دەیدەیتێ 💘😹😹✨",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S32']],]])]);}

if($data=="S32"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"مێردەکەت لە دواوە لەتی کردووی یان نا 🤦‍♂😹 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"نەخێر🙊😻",'callback_data'=>'Q7']],
[['text'=>"بەڵێ👀❤",'callback_data'=>'Q8']],]])]);}

if($data=="Q7"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"تاقی بکەرەوە گیانەکەم تاقی بکەرەوە خۆشە 😹😔😻",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S33']],]])]);}

if($data=="Q8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"چەندە نێچت خۆش دەوێت کەواتە مردووم 🔥🤤😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S33']],]])]);}

if($data=="S33"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"مێردەکەت دەتشارێتەوە یان ناتوانێت 🖤😪 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بەڵێ هەمووی🙊😻",'callback_data'=>'Q9']],
[['text'=>"نەخێر😤😥",'callback_data'=>'Q10']],]])]);}

if($data=="Q9"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"نۆشی گیانتان بێت گیانەکەم 🖤🤓",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S34']],]])]);}



if($data=="Q10"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وەرە لای من دەتشارمەوە خۆشەویستم 🖤😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S34']],]])]);}


if($data=="S34"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"خیانەتت لە مێردەکەت کردووە لەگەڵ کەسێکی تردا یان نا 😹😳 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بەڵێ😹😹",'callback_data'=>'Q11']],
[['text'=>"نەخێر🙋🙌",'callback_data'=>' Q12']],]])]);}

if($data=="Q11"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"بیچاره دەبێت نەزانێت و نەتشارێتەوە 😹😒🤦‍♂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}


if($data=="Q12"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"بێگومان لە قوزتەوە چونکە بووە بە هەنگوین 😻😹😾",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}


if($data=="X8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"IM 𓆩 #عێراق 🇮🇶 𓆪  
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
  ➤  @GGGGW ➤ @cC14Cc",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}
if($data == "BAE"){
    bot('deleteMessage',[
    'chat_id'=>$chat_id2,    'message_id'=>$dev_i,
    ]);
    bot('sendVoice',[
'chat_id'=>$chat_id2,
        'voice'=>"https://t.me/cc15cc/20",
        'caption'=>'WE:- 😹💞 :- @GGGGW',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'','callback_data'=>'home']],
] ])]);}

function bot($method,$datas=[]){
$Cc14Cc = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$Cc14Cc";
$Cc14Cc = file_get_contents($url);
return json_decode($Cc14Cc);}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message = $update->message;
$username = $message->from->username;
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$Name = $update->callback_query->from->first_name;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$username = $message->from->username;
$Name = $update->callback_query->from->first_name;
$admin = "1108040488";
$admins = 1108040488;
$from_id = $message->from->id;
$user_id = $message->from->id;
mkdir("ii12ii");
mkdir("zkref");
$useree = $update->callback_query->message->chat->id;
$Name = $update->callback_query->from->first_name;
$MEDO = file_get_contents("MEDO.txt");
$MEDO0 = file_get_contents("MEDO0.txt");
$MEDO1= file_get_contents("MEDO1.txt");
$MEDO5 = file_get_contents("MEDO2.txt");
$MEDO6 = file_get_contents("MEDO3.txt");
$MEDO20 = json_decode(file_get_contents('php://input'));
$MEDO18 = $update->message;
$MEDO13 = $MEDO18->chat->id;
$MEDO17 = $MEDO18->text;
$MEDO19 = $MEDO20->callback_query->data;
$MEDO12 = $MEDO20->callback_query->message->chat->id;
$MEDO14 =  $MEDO20->callback_query->message->message_id;
$MEDO15 = $MEDO18->from->first_name;
$MEDO16 = $MEDO18->from->username;
$MEDO11 = $MEDO18->from->id;
$MEDO2 = explode("\n",file_get_contents("MEDO4.txt"));
$MEDO3 = count($MEDO2)-1;
if ($MEDO18 && !in_array($MEDO11, $MEDO2)) {
file_put_contents("MEDO4.txt", $MEDO11."\n",FILE_APPEND);
}
$MEDO9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$MEDO0&user_id=".$MEDO11);
$MEDO10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$MEDO1&user_id=".$MEDO11);
if($MEDO18 && (strpos($MEDO9,'"status":"left"') or strpos($MEDO9,'"Bad Request: USER_ID_INVALID"') or strpos($MEDO9,'"status":"kicked"') or strpos($MEDO10,'"status":"left"') or strpos($MEDO10,'"Bad Request: USER_ID_INVALID"') or strpos($MEDO10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$MEDO13,
'text'=>'•⊱ بە لێبووردنەوە دەبێت سەرەتا بەشداری کەناڵ بکەیت ⊰•
•⊱ دوای بەشداری کردن /start بنێرە ⊰•
•⊱ کەناڵ 👇 ⊰•
'.$MEDO0.'
'.$MEDO1,
]);return false;}
if($MEDO17 == "/admin" and $MEDO11 == $admin){
bot("sendmessage",[
"chat_id"=>$MEDO13,
"text"=>"بەخێر بێیت ،  $fn
• ئەمە دەستەی کۆنترۆڵی تایبەتی تۆیە ، 🔰
• دەتوانیت کۆنترۆڵی سەرجەم فەرمانەکانی بۆتەکە بکەیت لە لێرەوە ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- فەرمانەکانی بەشداری ناچاری یەکەم ، 📢' ,'callback_data'=>"MEDO"]],
[['text'=>'• دابینکردنی کەناڵ ، 🌚🤞🏻' ,'callback_data'=>"MEDO0"],['text'=>'• سڕینەوەی کەناڵ ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- فەرمانەکانی بەشداری ناچاری دووەم ، 📢' ,'callback_data'=>"MEDO"]],
[['text'=>'• دابینکردنی کەناڵ ، 🌝🤞🏻' ,'callback_data'=>"MEDO2"],['text'=>'• سڕینەوەی کەناڵ ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- نیشاندانی کەناڵەکانی بەشداری ، 📛' ,'callback_data'=>"MEDO4"]],
[['text'=>'- فەرمانەکانی پەخشکردن ، 🗣' ,'callback_data'=>"MEDO"]],
[['text'=>'• پەیامی ئاراستەکردن (Forward) ، ☝️🏻💚' ,'callback_data'=>"MEDO5"],['text'=>'• پەیامی دەقی ، ☝️🏻💛' ,'callback_data'=>"MEDO6"]],
[['text'=>'- ژمارەی بەشداربووان ، 🐳' ,'callback_data'=>"MEDO7"]],
[['text'=>'- ئاگادارکردنەوە کاتێک کەسێک دەچێتە ناو بۆتەوە ، ⚠️' ,'callback_data'=>"MEDO"]],
[['text'=>'• چالاککردنی ئاگادارکردنەوە ، ✅' ,'callback_data'=>"MEDO9"],['text'=>'• ناچالاککردنی ئاگادارکردنەوە ، ❎' ,'callback_data'=>"MEDO10"]],
[['text'=>'- ئاراستەکردنی پەیام لە ئەندامانەوە ، 🔁' ,'callback_data'=>"MEDO"]],
[['text'=>'• چالاککردنی ئاراستەکردن ، ✅' ,'callback_data'=>"MEDO11"],['text'=>'• ناچالاککردنی ئاراستەکردن ، ❎' ,'callback_data'=>"MEDO12"]],
]
])
]);
}
if($O19 == "MEDO" ){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
"text"=>"  • بەخێر بێیت ، $Name
• ئەمە دەستەی کۆنترۆڵی تایبەتی تۆیە ، 🔰
• دەتوانیت کۆنترۆڵی سەرجەم فەرمانەکانی بۆتەکە بکەیت لە لێرەوە ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- فەرمانەکانی بەشداری ناچاری یەکەم ، 📢' ,'callback_data'=>"MEDO"]],
[['text'=>'• دابینکردنی کەناڵ ، 🌚🤞🏻' ,'callback_data'=>"MEDO0"],['text'=>'• سڕینەوەی کەناڵ ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- فەرمانەکانی بەشداری ناچاری دووەم ، 📢' ,'callback_data'=>"MEDO"]],
[['text'=>'• دابینکردنی کەناڵ ، 🌝🤞🏻' ,'callback_data'=>"MEDO2"],['text'=>'• سڕینەوەی کەناڵ ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- نیشاندانی کەناڵەکانی بەشداری ، 📛' ,'callback_data'=>"MEDO4"]],
[['text'=>'- فەرمانەکانی پەخشکردن ، 🗣' ,'callback_data'=>"MEDO"]],
[['text'=>'• پەیامی ئاراستەکردن ، ☝️🏻💚' ,'callback_data'=>"MEDO5"],['text'=>'• پەیامی دەقی ، ☝️🏻💛' ,'callback_data'=>"MEDO6"]],
[['text'=>'- ژمارەی بەشداربووان ، 🐳' ,'callback_data'=>"MEDO7"]],
[['text'=>'- ئاگادارکردنەوە کاتێک کەسێک دەچێتە ناو بۆتەوە ، ⚠️' ,'callback_data'=>"MEDO"]],
[['text'=>'• چالاککردنی ئاگادارکردنەوە ، ✅' ,'callback_data'=>"MEDO9"],['text'=>'• ناچالاککردنی ئاگادارکردنەوە ، ❎' ,'callback_data'=>"MEDO10"]],
[['text'=>'- ئاراستەکردنی پەیام لە ئەندامانەوە ، 🔁' ,'callback_data'=>"MEDO"]],
[['text'=>'• چالاککردنی ئاراستەکردن ، ✅' ,'callback_data'=>"MEDO11"],['text'=>'• ناچالاککردنی ئاراستەکردن ، ❎' ,'callback_data'=>"MEDO12"]],
]
])
]);
unlink("MEDO.txt");
}
if($MEDO19 == "MEDO0"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- باشە ، ئێستا ناسنامەی کەناڵەکەت بنێرە بۆ ئەوەی لە خزمەتگوزاری بەشداری ناچاری بۆ کەناڵی یەکەم دابنرێت ، 📢
#نموونە :
▪️@ii12',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
file_put_contents("MEDO.txt","MEDO0");
}
if($MEDO17 and $MEDO == "MEDO0" and $MEDO11 == $admin){
bot("sendmessage",[
"chat_id"=>$MEDO13,
"text"=>'- کەناڵەکە بە سەرکەوتوویی دانرا ، 📣
• بۆتەکە بە ئەدمن بەرز بکەرەوە لە ناو کەناڵدا ، 🗞',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
file_put_contents("MEDO0.txt","$MEDO17");
unlink("MEDO.txt");
}
if($MEDO19 == "delete11"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- باشە ئایا دڵنیایت کە دەتەوێت کەناڵەکە بسڕیتەوە لە بەشداری ناچاری ، 🚫
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• نەخێر ، ❎', 'callback_data'=>'MEDO'],
['text'=>'• بەڵێ ، ✅','callback_data'=>'MEDO1'],
]
]])
]);
}
if($MEDO19 == "MEDO1"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- کەناڵی یەکەم بە سەرکەوتوویی لە بەشداری ناچاری سڕایەوە ، 📮',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
unlink("MEDO.txt");
unlink("MEDO0.txt");
}
if($MEDO19 == "MEDO2"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- باشە ، ئێستا ناسنامەی کەناڵەکەت بنێرە بۆ ئەوەی لە خزمەتگوزاری بەشداری ناچاری بۆ کەناڵی دووەم دابنرێت ، 📢
#نموونە :
▪️@ii12ii',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
file_put_contents("MEDO.txt","MEDO1");
}
if($MEDO17 and $MEDO == "MEDO1" and $MEDO11 == $admin){
bot("sendmessage",[
"chat_id"=>$MEDO13,
"text"=>'- کەناڵەکە بە سەرکەوتوویی دانرا ، 📣
• بۆتەکە بە ئەدمن بەرز بکەرەوە لە ناو کەناڵدا ، 🗞',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
file_put_contents("MEDO1.txt","$MEDO17");
unlink("MEDO.txt");
}
if($MEDO19 == "delete22"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- باشە ئایا دڵنیایت کە دەتەوێت کەناڵەکە بسڕیتەوە لە بەشداری ناچاری ، 🚫',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• نەخێر ، ❎', 'callback_data'=>'MEDO'],
['text'=>'• بەڵێ ، ✅','callback_data'=>'MEDO3'],
]
]])
]);
}
if($MEDO19 == "MEDO3"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- کەناڵی دووەم بە سەرکەوتوویی لە بەشداری ناچاری سڕایەوە ، 📮',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
unlink("MEDO.txt");
unlink("MEDO1.txt");
}
if($MEDO19 == "MEDO4"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>"- ئەمە لیستی کەناڵەکانی بەشداری ناچارییە ، 🔰
• کەناڵی یەکەم ،  $MEDO0 📢
• کەناڵی دووەم ،  $MEDO1 📣
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
unlink("MEDO.txt");
}
if($MEDO19 == "MEDO5"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>"~ پەیامەکەت بنێرە و ئاراستەی [ $MEDO3 ] بەشداربوو دەکرێت ، 🐙 ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
file_put_contents("MEDO.txt","MEDO2");
}
if($MEDO18 and $MEDO == "MEDO2" and $MEDO11 == $admin){
bot("sendmessage",[
"chat_id"=>$MEDO13,
"text"=>'- ئاراستەکردنەکە بە سەرکەوتوویی ئەنجامدرا 🦕',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
for($i=0;$i<count($MEDO2); $i++){
bot('forwardMessage', [
'chat_id'=>$MEDO2[$i],
'from_chat_id'=>$MEDO11,
'message_id'=>$MEDO18->message_id
]);
unlink("MEDO.txt");
}
}
if($MEDO19 == "MEDO6"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>MEDO14,
'text'=>"~ پەیامەکەت بنێرە و دەنێردرێت بۆ [ 20MEDO3 ] بەشداربوو ، 🐠",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
file_put_contents("MEDO.txt","MEDO3");
}
if($MEDO17 and $MEDO == "MEDO3" and $MEDO11 == $admin){
bot("sendmessage",[
"chat_id"=>$MEDO13,
"text"=>'- بڵاوکردنەوە بە سەرکەوتوویی ئەنجامدرا 🐋',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
for($i=0;$i<count($MEDO2); $i++){
bot('sendMessage', [
'chat_id'=>$MEDO2[$i],
'text'=>$MEDO17
]);
unlink("MEDO.txt");
}
}
if($MEDO19 == "MEDO7"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>"- ژمارەی بەشداربووانی بۆت  [ $MEDO3 ] بەشداربووە ، 🦑",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
unlink("MEDO.txt");
}
if($MEDO19 == "MEDO9"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- هاتنەژوورەوەی بەشداربووان چالاککرا ، 🐎',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
file_put_contents("MEDO2.txt","MEDO");
}
if($MEDO17 == "/start" and $MEDO5 == "MEDO" and $MEDO11 != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"- ئەندامێکی نوێ هاتە ناو بۆتەوە ، 🛡
• ناوی ، $MEDO15 ، 🦕
• ناسنامە (یوزەر) ، @$MEDO16 ، 🐢
• ئایدی ، $MEDO11 ، 🐝
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  ژمارەی بەشداربووان ، { $MEDO3 } ، 🦑 ",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($MEDO19 == "MEDO10"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- هاتنەژوورەوەی بەشداربووان ناچالاککرا ، 🦍 ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
unlink("MEDO.txt");
unlink("MEDO2.txt");
}
if($MEDO19 == "MEDO11"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- ئاراستەکردنی پەیامەکان چالاککرا ، 🦇',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
file_put_contents("MEDO3.txt","MEDO");
}
if($MEDO18 and $MEDO6 == "MEDO" and $MEDO11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$MEDO11,
'message_id'=>$MEDO18->message_id
]);
}
if($MEDO18 and $MEDO6 == "MEDO" and $MEDO11 == $admin){
bot('sendMessage',[
'chat_id'=>$MEDO18->reply_to_message->forward_from->id,
'text'=>$MEDO17,
]);
}
if($MEDO19 == "MEDO12"){
bot('EditMessageText',[
'chat_id'=>$MEDO12,
'message_id'=>$MEDO14,
'text'=>'- ئاراستەکردنی پەیامەکان ناچالاککرا ، 🐌',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MEDO"]],
]])
]);
unlink("MEDO.txt");
unlink("MEDO3.txt");
}
if($text ==  '/start' and !in_array($from_id, $getid) and !strpos($ch1 , '"status":"left"' ) !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
••⊱ بەخێر بێیت عزیزم $name ⊰• 😻💞
•⊱ لە بۆتی پرسیارە بوێرەکاندا ⊰• 🙀💞
•⊱ لە بۆتەکەدا 𝟔 بەشی جیاواز هەیە ⊰• 😸💞
•⊱ پەنجە بنێ بە نیشاندانی بەشەکان و بەشی گونجاو هەڵبژێرە ⊰• 😾💞
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
D𝒐𝒏 𝒕 𝒓𝒐𝒓𝒈𝒆𝒕 𝒕𝒐 𝒓𝒐𝒍𝒍𝒐𝒘 𝒎𝒆 - @cC14Cc 💞
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱نیشاندانی بەشەکان😾💞⊰•", 'callback_data'=>'help']],
[['text'=>"•⊱بەشی لادانی تایبەت⊰•", 'callback_data'=>'XNXX9']],
[['text'=>"$tilitet",'switch_inline_query'=>"$from_id"]],
[['text'=>"•⊱ WE ⊰•",'url'=>'T.me/cC14Cc']],
[['text'=>"•⊱ M𝒚 𝒂𝒄𝒄𝒐𝒖𝒏𝒕𝒔 ⊰• ",'url'=>'T.me/GGGGW']],
]
])]);}

if($data=="home"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱ بەخێر بێیت عزیزم $name ⊰• 😻💞
•⊱ لە بۆتی پرسیارە بوێرەکاندا ⊰• 🙀💞
•⊱ لە بۆتەکەدا 6 بەشی جیاواز هەیە ⊰• 😸💞
•⊱ پەنجە بنێ بە نیشاندانی بەشەکان و بەشی گونجاو هەڵبژێرە ⊰• 😾💞
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
D𝒐𝒏 𝒕 𝒓𝒐𝒓𝒈𝒆𝒕 𝒕𝒐 𝒓𝒐𝒍𝒍𝒐𝒘 𝒎𝒆 - @cC14Cc 💞
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱نیشاندانی بەشەکان 😾💞⊰•", 'callback_data'=>'help']],
[['text'=>"•⊱بەشی لادانی تایبەت⊰•", 'callback_data'=>'XNXX9']],
[['text'=>"•⊱ WE ⊰• ",'url'=>'T.me/cC14Cc']],
[['text'=>"•⊱ M𝒚 𝒂𝒄𝒄𝒐𝒖𝒏𝒕𝒔 ⊰• ",'url'=>'T.me/GGGGW']],
]
])]);}
if($data=="help"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
•⊱ بەخێر بێیت $name ⊰• 😻💞
•⊱ دووبارە ئەمانەش بەشەکانن بۆت ⊰• 😸💞
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
D𝒐𝒏 𝒕 𝒓𝒐𝒓𝒈𝒆𝒕 𝒕𝒐 𝒓𝒐𝒍𝒍𝒐𝒘 𝒎𝒆 - @cC14Cc
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"𝟏 ⊱پرسیاری ئیماندارەکان ♡",'callback_data'=>'X5']],
[['text'=>"𝟐 ⊱بوێریت وێنە ♡",'callback_data'=>'X4']],
[['text'=>"𝟑 ⊱پرسیاری بوێرانەی ئاستی 𝟏 ♡",'callback_data'=>'X1']],
[['text'=>"𝟒 ⊱پرسیاری بوێرانەی ئاستی 𝟐  ♡",'callback_data'=>'X2']],
[['text'=>"𝟓 ⊱پرسیاری لادەرەکان ♡",'callback_data'=>'X3']],
[['text'=>"𝟔 ⊱ پرسیاری هاوسەران بۆ کچان ♡",'callback_data'=>'X7']],
[['text'=>"𝐃𝐄𝐕 𖤐",'callback_data'=>'X8']],
[['text'=>"•⊱بەشی لادانی تایبەت⊰•", 'callback_data'=>'XNXX9']],
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>"home"]],
[['text'=>"•⊱ WE ⊰•",'url'=>'T.me/GGGGW']],
[['text'=>"•⊱ M𝒚 𝒂𝒄𝒄𝒐𝒖𝒏𝒕𝒔 ⊰• ",'url'=>'T.me/cC14Cc']],
]
])
]);
}
if($data=="XNXX9"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
• بەخێر بێیت گیانەکەم بۆ بەشی لادانی تایبەت
• ئەوەی گونجاوە لە دوگمەکانی خوارەوە هەڵبژێرە
@GGGGW",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• لیستی فیلمەکان ",'callback_data'=>'SAD1'],['text'=>"• ️لیستی چیرۆکەکان ",'callback_data'=>'SAD2']],
[['text'=>"• لیستی جووڵاوەکان ",'callback_data'=>'SAD3']],
[['text'=>"• لیستی دەنگەکان ",'callback_data'=>'SAD4']],
[['text'=>"گەڕانەوە 🔙",'callback_data'=>"home"]],
]
])
]);
}
if($data=="SAD1"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
• بەخێر بێیتەوە $Name
• ئەوە لیستی فیلمەکانە ئەوەی دەتەوێت هەڵبژێرە بۆ جێبەجێکردنی ،
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
 • لێرە کلیک بکە و نوێیەکانمان دووبکەوە ، ؛",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• فیلمی یەکەم ",'callback_data'=>'AA1']],
[['text'=>"• فیلمی دووەم ",'callback_data'=>'AA2'],['text'=>"فیلمی سێیەم ",'callback_data'=>'AA3']],
[['text'=>"• فیلمی چوارەم ",'callback_data'=>'AA4']],
[['text'=>"• فیلمی پێنجەم ",'callback_data'=>'AA5'],['text'=>"• فیلمی شەشەم ",'callback_data'=>'AA6']],
[['text'=>"• فیلمی حەوتەم ",'callback_data'=>'AA7']],
[['text'=>"• فیلمی هەشتەم ",'callback_data'=>'AA8'],['text'=>"• فیلمی نۆیەم ",'callback_data'=>'AA9']],
[['text'=>" • فیلمی دەیەم ",'callback_data'=>'AA10']],
[['text'=>"گەڕانەوە 🔙",'callback_data'=>"XNXX9"]],
]
])
]);
}
if($data=="SAD2"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
• بەخێر بێیت ،  $Name
• لە لیستی چیرۆکەکاندا ئەوەی دەتەوێت هەڵبژێرە بۆ جێبەجێکردنی ، !
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
 • لێرە کلیک بکە و نوێیەکانمان دووبکەوە ،  ؛",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• چیرۆکی یەکەم ",'callback_data'=>'OO1'],['text'=>"• چیرۆکی دووەم ",'callback_data'=>'OO2']],
[['text'=>"• چیرۆکی سێیەم ",'callback_data'=>'OO3']],
[['text'=>"• چیرۆکی چوارەم ",'callback_data'=>'OO4'],['text'=>"• چیرۆکی پێنجەم ",'callback_data'=>'OO5']],
[['text'=>"گەڕانەوە 🔙",'callback_data'=>"XNXX9"]],
]
])
]);
}
if($data=="SAD3"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
• بەخێر بێیت ،  $Name
• لە لیستی جووڵاوەکاندا ئەوەی دەتەوێت هەڵبژێرە بۆ جێبەجێکردنی ، !
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
 • لێرە کلیک بکە و نوێیەکانمان دووبکەوە ،  ؛",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• جووڵاوی یەکەم ",'callback_data'=>'BB1'],['text'=>"• جووڵاوی دووەم ",'callback_data'=>'BB2']],
[['text'=>"• جووڵاوی سێیەم ",'callback_data'=>'BB3']],
[['text'=>"• جووڵاوی چوارەم ",'callback_data'=>'BB4'],['text'=>"• جووڵاوی پێنجەم ",'callback_data'=>'BB5']],
[['text'=>"• جووڵاوی شەشەم ",'callback_data'=>'BB6'],['text'=>"• جووڵاوی حەوتەم ",'callback_data'=>'BB7']],
[['text'=>"• جووڵاوی هەشتەم ",'callback_data'=>'BB8']],
[['text'=>"• جووڵاوی نۆیەم ",'callback_data'=>'BB9'],['text'=>"• جووڵاوی دەیەم ",'callback_data'=>'BB10']],
[['text'=>"گەڕانەوە 🔙",'callback_data'=>"XNXX9"]],
]
])
]);
}
if($data=="SAD4"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
• بەخێر بێیتەوە $Name
• ئەوە لیستی دەنگەکانە ئەوەی دەتەوێت هەڵبژێرە بۆ جێبەجێکردنی ،
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
 • لێرە کلیک بکە و نوێیەکانمان دووبکەوە ، 🚷 ؛",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• دەنگی یەکەم ",'callback_data'=>' DL1'],['text'=>"• دەنگی دووەم ",'callback_data'=>'DL2']],
[['text'=>"• دەنگی سێیەم ",'callback_data'=>'DL3']],
[['text'=>"• دەنگی چوارەم ",'callback_data'=>'DL4'],['text'=>"• دەنگی پێنجەم ",'callback_data'=>'DL5']],
[['text'=>"• دەنگی شەشەم ",'callback_data'=>'DL6'],['text'=>"• دەنگی حەوتەم ",'callback_data'=>'DL7']],
[['text'=>"• دەنگی هەشتەم ",'callback_data'=>'DL8']],
[['text'=>"• دەنگی نۆیەم ",'callback_data'=>'DL9'],['text'=>"• دەنگی دەیەم ",'callback_data'=>'DL10']],
[['text'=>"گەڕانەوە 🔙",'callback_data'=>'XNXX9']],
]
])
]);
}
if($data == "AA1"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/12",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی یەکەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "AA2"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/13",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی دووەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "AA3"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/14",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی سێیەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "AA4"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/15",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی چوارەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "AA5"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/16",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی پێنجەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "AA6"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/17",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی شەشەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "AA7"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/18",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی حەوتەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "AA8"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/19",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی هەشتەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "AA9"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/20",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی نۆیەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "AA10"){
bot('sendVideo',[
'chat_id'=>$chat_id2,
'video'=>"https://t.me/vvbvvm/21",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" فیلمی دەیەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "OO1"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
سڵاو
ناوکان خوازراون
من ناوم محەممەدە تەمەنم ٢٠ ساڵە، چیرۆکێکی ڕاستەقینەیە لەگەڵ کچە خاڵەکەم ناوی لۆلۆیە.. کچە خاڵەکەم زۆر سەرنجڕاکێشە و سیفەتەکانی فولن، پێستی قاوەیی و قنگێکی بەرز، مەمکی سپی وگۆشتن و کلکەی پەمەیی، ئۆفیێش نامەوێت پێتان بڵێم جەستەی بە توندی شێتکەرە
جا من زۆر خەیاڵم لەسەری بوو، ڕۆژێک لە کاتێکدا سەیرکردنی چیرۆکە سێکسییەکانم دەکرد لە تێلیگرام، گوتم با بۆی بنێرم بەڵکو بەزەیی پێمدا بێتەوە، بۆیە یەکێکم کۆپی کرد و بۆیم نارد.. جا دواى ٤ کاتژمێر وەڵامی دایەوە کە ئەمە چییە شەرم لەم قسەیە ناکەیت و قسەی خۆش😂 بۆیە ڕۆژان تێپەڕین و چەند ڕۆژێک تێپەڕی چووم بۆ لایان و لەوێ مامەوە نزیکەی مانگێکی تەواو، لە ڕۆژی ٤ەمدا دانیشتبووم لە ژوورەکەیدا واتە ماڵی خاڵم متمانەی تەواویان پێم هەبوو دەیانزانى من ئەم جۆرە شتانەم نییە😂 جا تەواو بووم دانیشتبووم لە ژوورەکەیدا مۆبایلەکەم دەگۆڕی، باسی هاوڕێیەکەی بۆ دەکردم وەک ئەوەی دەست بەسەر مۆبایلەکەیدا گرتووە و دۆزیویەتیەوە کە دەچێتە سەر ماڵپەڕە سێکسییەکان.. من پێم گوت بەڵێ هاوڕێکەت سەرتاپای قسەیە😂 ئەو خۆی وا نیشاندا کە نەزانێت سەرتاپا چییە.. پێم گوت بەڵێ و تۆش دەتەوێت سێکس ببینی؟ گوتی هەتە؟ پێم گوت وەرە، گوێپلاگەکەم خستە یەک گوێمەوە و ئەوی تری خستە گوێی ئەو و زیاتر لە ١٠ ڤیدیۆم بۆ نیشان دا ئەو کۆتایی پێ هات بە باشی، دەستی نا بە مەمکیەوە و پێی گوتم هەستە دەرگاکە داخە، دەیویست بیداتە من بەڵام کاتێک هاتم دەرگاکە داخەم خاڵنم هات، خۆم بەو شێوەیە نیشان دا کە لە ژوورەکە دەردەچم😂 جا درێژەی بابەتەکە بۆتان تەواو دەکەم لە کاتژمێر ٢ی شەوەوە هەمووانم خەواند و چوومە ژوورەکەی و بینیم بە ئاگایە.. گوتم ها چییە ئێستا؟ گوتی نەخێر ڕای خۆم گۆڕی 😢 من لە ناخەوە گوتم بۆری.. بۆیە کەمێک وەستام، لە کۆتاییەدا دەستم نا بە مەمکیەوە وگوشیم و قیژاندی و دەناڵاند من دەیگوشیم و ئەو دەگووت ئاخ ئاخ، مەمکیم دەرهێنا و بە توندی مژیم و شیرم پێدا، جا دەستی دەرهێنا لە خوارەوە و کۆنی گرتم و خلیسکاندی و لە هەمان کاتدا مەمکیم مژى و لە ناکاو دەستی گرتم و خستە خوارەوە بۆ کۆنی، من گەرم و تەڕم گرت، بۆیە دەستم کرد بە خلیسکاندنی و مژینی مەمکی، ئەو تەواو تێکوپێک شکابوو لە کۆتاییەدا لەباری دەکەم بەرموودە و پانتۆڵ و قاچەکانی کردەوە و دەستم کرد بە لەمژین و مژین و ئەو دەناڵاند و بە زۆر هەناسەی دەدا، من زمانی خۆم خستە ناو کونەکەی کۆنیەوە و لە ناکاو لەسەرم هاتە خوارەوە.. وە دواتر پێم گوت هەستە بمژە، ئەو خەریک بوو هێڵی بەربووی لە مژین، پێم گوت تەنها بیخەرە ناو دەمتەوە بە دڵت دەبێت، جا خستییە ناو دەمیەوە و شیرم پێدا، پێم گوت هەستە لەسەر سکت بخەوە، جا لەسەر سکی خەوت و منیش چوو دەرمانی زەیتی چێشتلێنانم هێنا😂 پەنجەکەم پڕ کرد و فڕێمە سەر قنگی، دەستم کرد بە داخستنی پەنجەیەک و دەرکردنی، گوتی ئازاری هەیە محەممەد، گوتم بەرگە بگرە کەمێک، پەنجەم خستە ناوەوە و ئەو ڕاچڵەکی و گوتی محەممەد ئەوانە دەردەچن ئازاری هەیە، گوتم ئەوەت چییە خەڵکە، کەمێک هەستی پێ ناکەیت.. لە کۆتاییەدا بینیم لەسەر دوو پەنجە ئارام بووەوە.. گوتم با کۆنم بخەمە ناوەوە.. کۆنم درێژ و پانیە بەڵام زۆر پانیە😂 جا هاتم سەری دانام و ئەو ڕاچڵەکی ئازاری هەیە و دەناڵاند، گوتم دەموچانت بخە ژێر سەرینەکەوە، جا خستمیانە ناو ناوەڕاستەوە و ئەو دەقیژاند ئازاری هەیە ئازاری هەیە، جا دەموچاوی کردە بەرامبەر سەرین و سەری گرت و پاڵی بە سەرینەوە نا بۆ ئەوەی نەیقیژێنێت، ڕاستەوخۆ هەموویم خستە ناوەوە و دەستم کرد بە لێدان و ئەو دەقیژاند لە ژێر سەرینەوە ئااخ ئازارت هەاىە ئازیزم ئازیزم واز لەمە بێنە، من بێدەنگ بووم بەڵام لێدانم دەدا 😅 ئەو دوای ٥ خولەک ئارام بووەوە و دەستی کرد بە هەستکردن بە ئازار، نامەوێت پێتان بڵێم لە هەردوو کۆتاییم کرد، بۆیە پێم گوتم محەممەد دیمەنێک دەوێت لە فیلمێکدا بینیومە دەمەوێت تاقیم بکەمەوە گوتم بەڵێ چییە، کۆنم دەرهێنا و مەمکی هێنا، مەمکی لەسەر کۆنم گرت و سەرکەوت و دابەزی.. من لە دڵی خۆمدا گوتم کۆنی ئەم شێوازە😂.. ئێمە هەموو ڕۆژێک سێکس دەکەین لەگەڵیدا و زۆر جووڵەمان تاقی کردەوە.. مانگێکی تەواو سێکس و مژین😂
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
[['text'=>" گەڕانەوە 🔙",'callback_data'=>'SAD2']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" چاودێری چیرۆکی یەکەم دەکات ،
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "OO2"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"چیرۆکی دایک فەهد
دایک فەهد تەمەنم ٣٧ ساڵە هاوسەرەکەم کۆچی دوایی کردووە، فەهدم هەیە و دوو کچ، فەهد لە بەشە ناوخۆییەکان دەخوێنێت زۆربەی رۆژان کوڕی مامم یاسر دێت بۆ لایمان تەمەنی ٢٥ ساڵە، هەمیشە دەنێرم بۆ لای ئەو دەچێت بۆ دوکان کارەکەم تەواو دەکات، کچەکانم سارە ٢١ و بێداء ١٧ خوێنکارن، یاسر قۆزە زۆربەی کاتەکان هات بۆ لامان و مایەوە لەگەڵ إسراء کاتێک دەچووینە دەرەوە چونکە دەمانترسا بە تەنیا بمێنێتەوە، ڕۆژێک چوومە دەرەوە کارێکم هەبوو گەڕامەوە کاغەزەکانم بیرچوو و بێداء لە دەوام بوو وە کۆپیم لە کلیلی خانوو هەبوو نەمدەویست دابنیشم إسراء دەرگاکەم کردەوە و چووژم ناوەوە و دەنگی شتێکی سەیرم بیست نزیک بوومەوە بۆ بیستنی دەنگەکە بە پەنجەرەکەدا سووڕامەوە یاسرەم بینی لە چێشتخانەکە وەستابوو بە بێ جلوبەرگ و کچەکەم إسراء بێ جلوبەرگ بوو و مەمکی دەمژی، تووشی شۆک بووم نەمدەزانی چی بڵێم مامەوە وە ئەوان مژین و مژینیان کرد گوتم ناچمە ژوورەوە نەمدەزانی چی بە کچەکەم یان یاسر بڵێم ترسام بابەتەکە دەربچێت دەبێت بابەتەکە بشارمەوە و من نیگەران بووم و سەیری کچەکەم دەکەم دەمژی و یاری بە کۆنی دەکرد دواتر سووڕایەوە و ئەو کۆنی دەرخستبوو دەستی نا بە کۆنییەوە و ئەو دەستی کرد بە داخستنە ناو کۆنییەوە و ئەو دەقیژاند ئاخی ئازارم دەدات تۆ کووشتمت بە نەرمی کاتێک تەواو بوو و سەیرم دەکردن لە پەنجەرەوە جلوبەرگیان لەبەرکردەوە گەڕامەوە دەرگا و چوومە ژوورەوە و وامکرد هەست بکەن من هاتووم بینی یاسر گوتی هەی مامە لە کوێ هاتم بۆ لای ئێوە بەڵام إسراء نووستووە هاتمە ژوورەوە بە نیگەرانی و کچەکەم گەڕایەوە بۆ خەوتن و من دەزانم کە ئاگادارە و ئەم بابەتە دووبارە دەبێتەوە و من دەزانم و هیچم پێ ناکرێت و جارێک پاشنیوەڕۆ چاودێریم کرد سەرکەوت بوون بۆ ژووری سەرەوە سەرکەوتم بۆ بینینی ئەوەی چیان هەبووە بینی یاسر نووستووە و إسراء هەڵدەستێت و دادەنیشێت بەردەوام بووم لە سەیرکردن و شتێکی ترم خەیاڵ کرد و دەنگی کچەکەم بیست قیژاندی ئاخی خستیە ناو کۆنییەوە و بحەسێنەوە، دەستم نا بە کۆنییەوە و دەستم کرد به یاری کردن و زۆر خەوبینیم بەرگە نەگرت دابەزیم بۆ حەمام و تەواو بووم و دەستیان کرد بە دووبارەکردنەوەی هەموو ڕۆژێک لە ژووری سەرەوە دەیکات کاتێک إسراء هەست دەکات من و خوشکەکەی خەوتووین پەیوەندی پێوە دەکات و دێت و دەستم کرد بە سەرکەوتن و سەیرکردن و چۆنیەتی سێکسکردن لەگەڵیدا بەردەوام بووم لە خۆشویستنی ئەوەی بێت و سێکسی لەگەڵ بکات پەیوەندیم پێوە کرد و پێم گوت پێویستم پێتبووە هات بۆ لام گوتم پێویستم پێتبت لەگەڵ مندا شتەکان داببەزێنە لە بنمیچەوە سەرکەوت و داوام لە إسراء کرد لە خوارەوە ڕێکی بخات و کار دەکەین من و ئەو و کەشوهەوای تاریک دەستی پێکرد مەمکم هێنا و چەقۆیم لە پێشیدا کاتێک گەیشت بە داخستنی لەگەڵیدا و گوتم مامه ناتبینم تاریکە دەستم کرد بە چەقۆ و کۆنی لەگەڵیدا داخرا ئەو هەستم بە کۆنی کرد هەڵسا دەستی نا بە کۆنییەوە و من بێدەنگ بووم بەرزی کردەوە جلوبەرگەکانم و من بێدەنگ بووم تاریک بوو کاتێک دەستی کرد بە یاری کردن بە کۆنی و پەنجەکەی خستە ناو کونەکە و من بێدەنگ بووم هەستم بە دابەزین کرد بۆ بۆنکردنی کۆنی و خەوم لێکەوت و من یاری بە مەمکم کرد هێنایەوە و خستییە ناوەوە و دەستی کرد به لێدان و هەردووکیان بێدەنگ بوون دەستم کرد بە قیژاندن ئاخی ئازارم دەدات هەستم دەکەم پارچەم دەکات کاتێک لە کۆنی داگرت و شتەکانی هەڵگرت و دابەزی و دابەزیم گەرماوم کرد و من هێشتا برسی بووم دەستم کرد بە یاری کردن لەگەڵ کۆن و مەمکم ماندوو بووم و زۆر خەوم لێکەوت بانگی إسراءم کرد وەرە پشتی بۆم بشۆرە و من بە بێ جلوبەرگ و جەستەم جوانە کۆنیم گەورەیە إسراء هات دەستی کرد بە شۆردن و هەستی کرد بە دەستی لەسەر پشتی مەمکم زۆر خەو لێکەوت گوتم با جلوبەرگت نەڕزێت داکەنە داکەندم مایەوە بە بەستیان و پانتۆڵ و ئەو لە پشتی من دەشۆر و سکم و من یادم دەکردەوە و خەواڵوو بووم دەستم نا بە سەر کۆنییەوە و دەستم کرد بە خلیسکاندن ئەم شتەی بینی بەڵام بێدەنگ بوو قسەم لەگەڵ کرد گوتم مەمکم باش بشۆر پێش ئەوەی مەمکی لێ بدەیت و دەستی کرد بە شۆردن دواتر پێم گوت مەمکم برسییەتی و ئەو پێكەنی گوتی دەچێتە سەر و ماچی کرد و گوتم دووبارە ماچی بکە و پێكەنین و خۆشەویستی دروست بوو کاتێک هێشتمە ماچی بکات و مایەوە بۆ ماچی و دەستی کرد بە مژینی مەمکم خەو لێکەوت کۆتایی پێ هات دەستم درێژ کرد بۆ مەمکی و دەستم کرد بە یاری کردن و ئەو یاری کرد خەو لێکەوت دەمم برد و دەستمان کرد بە مژین و یاری کردن بە کۆن و یاری بە کۆنی کردم داکەندم و چێژمان وەرگرت گوتی یاسر چێژی لەگەڵ من وەرگرت جارێک لە کۆنی خۆم گوتم با ئەمڕۆ بێت پەیوەندیم پێوە کرد و سەرکەوتن و سێکسیان کرد هاتمە ژوورەوە و چووم مەمکم مژی لەگەڵ کۆنی إسراء و ئەو ماندوو بوو جلوبەرگەکانم داکەند و دایخستە ناو کۆنییەوە و من دەقیژاندم و ئەو لێدانی دا دواتر لەسەر پشتی نووست و دانیشت لەسەری و کچەکەم یاری بە مەمکم کرد و تەواو بوو و دۆخەکە بەردەوام بوو و سێکس یان یاسر یان من یان کچەکەم و بۆوە ٤ مانگ سێکسی لەگەڵ ئێمە کرد من و إسراء و دەستخۆشی لە یاسر
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
[['text'=>" گەڕانەوە 🔙",'callback_data'=>'SAD2']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" چاودێری چیرۆکی دووەم دەکات ،
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "OO3"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ئەمڕۆ چیرۆکم لەگەڵ خۆشەویستی ژیانم و خوشکەکەیەتی
بە ڕاستی ناوەکان خەیاڵین من عەلی تەمەنم ٢٢ ساڵە باڵابەرز و ماسولکەدارم و خۆشەویستەکەم لەیلا تەمەنی ٢٠ ساڵە کورتە باڵا و سپیە😍 پێش ساڵێک ناسیم قسەمان دەکرد لە سەرەتادا قسەی ئاسایی دواتر پێم گوت برسییمە ئەویش شەرمی کرد و تەلەفۆنەکەی داخست دواتر دوای سەعاتێک تەلەفۆنم بۆ کرد گوتم بۆچی تەلەفۆنت داخست قورستر قسەی دەکرد دواتر ڕازی بوو و سێکسمان کرد بە کامێرا بۆ ماوەی مانگێک لەسەر ئەم بارودۆخە بووین دواتر پێم گوت دەمەوێتت ببینم گوتی تەنها ئەگەر خێزانەکەم چوونکە دێنە بەغدا و من دەمێنمەوە لەگەڵ خوشکە گەورەکەم دەتوانیت بێیت گوتم و خوشکەکەت گوتی خەمت نەبێت نایهێڵم گومانت هەبێت کاتێک خەوتووە دەتخەمە ژوورەوە باشە چووڕامە ناوەوە خوشکەکەی خەوتبوو چووینە ژوورەوە ئۆفی خودا دروستی نەکردووە دەمم گرت بۆ چارەکە سەعاتێک دواتر جلەکەم ڕاکێشا دڕا و سەیاتە پەمەییەکەی دەرکەوت و شەرتەکەم ڕاکێشا پانتۆڵی بنکەی خەتەنەی مۆر دانیشتم مەمکم مژی و دابەزیم بۆ سەرکی گەیشتمە کۆنی جلەکەم خستە دەممەوە و دەستم کرد بە فووکردنە ناو کۆنی ئەو تەنها ئەوەی دەکرد ئا ئا ئا ئا دەناڵاند باشە زمانم دانەو و تونی لەگەڵ زمانمدا درزی خستە ناو کافرەوە دواتر دەستم کرد بە مژین و لە دەممدا هێنامە دەرەوە دواتر پێم گوت نۆبەی تۆیە کۆنم گرت کچە گیانە دوو سەرەی دەرکرد بەڵام تەنها دۆندرمە و سەری خستە ناو دەمیەوە و تف کردە سەر مەمکم و خلیسکاند دواتر پێم گوت دابەبەش گوتی ئازاری هەیە گوتم فازلینم بۆ دەهێنیت و لەگەڵتدا نەرم دەبم گوتی باشە فازلینم هێنا و چەوریم کرد و کۆنی ئەو و کۆنی خۆم و من برای تۆم بیرم چوو خوشکەکەم لە ماڵەوەیە کردم و دابەزیمە سەر هەمووی و هەموویم خستە ناوەوە تەنانەت هێلکەکانیش و ئەو لە هەموو دەنگێکدا کافر بوو و قیژاندی و هیچ هەستی پێ نەکرد ئەگەر دەرگاکە نەکرایەوە و خوشکەکەی بە ڕاکردن نەیەت خوشکەکەمم خستە دەمەوە و قەمسەڵەکەم دڕا و دەستم کرد بە مژینی تا خەو لێکەوت دەرگاکەم داخست و ئەو و خوشکەکەم گرت و دوو سەرەم لە کۆنیدا لێدا و خۆشەویستەکەم لە کۆنیەوە سەرەتای لێدا دواتر گەرماومان کرد و دوو سەرە لە خوارەوە لێدام و چاوەڕێم بکەن لە چیرۆکی دووەمدا دوای هەفتەیەک سێکسیان لەگەڵ دەکەم ئەوان و کچە مامیان💜
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
[['text'=>" گەڕانەوە 🔙",'callback_data'=>'SAD2']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" چاودێری چیرۆکی سێیەم دەکات ،
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "OO4"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"سڵاو خۆشەویستان چیرۆکەکەم ڕاستەقینەیە 😇 ئەمڕۆ چیرۆکەکەمان باس دەکەم من و کچێک بە ناوی زەینَب خوێندکارە گرنگە ناوم حەمودییە تەمەنم ١٩ ساڵە لە عیمارەوە و زەینەب تەمەنی ١٨ ساڵە لە عیمارەشەوە هاوسەرگیری نەکردووە خاوەنی قنگێکە کە لە زەوییدا دەتەقێت سپییە گۆشتنە دەگەڕێتەوە دواوە و مەمکێکی هەڵئاوساو لەمەش بە توندی و باڵا بەرز مەمک بە خودا دەمرن و دوو غەممازی هەیە و سپییەکی بەفرینە واتە جەستەی زۆر باشە چونکە ئەو لەگەڵ دایکی لە صالۆن کار دەکات گرنگە جارێک هاتە ماڵمان بۆ ئەوەی جلوبەرگ لە دایکم ببڕێت بینیم زۆر برسییە بێگومان من و ئەو لە نێوانماندا سووکایەتی و شۆخ و شەنگ و پێكەنین هەیە گرنگە لەو ڕۆژەدا خێزانەکەم دەیانویست بچن بۆ باخچە و من لەو کاتەدا حەزم نەبوو وە زەینەبیش برسی بوو و لە لای منە گرنگە خێزانەکەم چووبوون بۆ باخچە و من و ئەو لە ماڵەوە ماینەوە جا پێم گوتت حەز دەکەیت دەرچەم بۆ ئەوەی لە ماڵەوە ئاسوودە بم گوتی نەخێر حەمودی بمێنەوە مەڕۆ پێویستم پێتبووە لە لای من من پێم گوت باشە و لە خەیاڵمدا نەبوو شتێک لەو ڕۆژەدا ڕووبدات بەڵام من برسی بووم و وەک حۆرییەک لە بەهەشت بوو گرنگە ئەو دەچێت بۆ گەرماو و من نەدەزانیم لەوێیە و لەو کاتەیدا کە ئەو دەچوو بۆ گەرماو من خۆم ئامادە دەکردم بڕۆم بۆ حەمام بۆ ئەوەی گەرماو بکەم بەڵام نەمدەزانی ئەو لە خوارەوە لە حەمامەکەیە چونکە ماڵەکەی ئێمە تەنها یەک حەمامی هەیە گرنگە من لە پانتۆڵدا بووم و چووم بۆ حەمام و ئەو لەبیریکردبوو دەرگاکە داخات... بۆیە چوومە ژوور حەمام بینیم ڕووتە و خۆی خلیسکێنەری کۆنی خۆی دەکرد من سەرسام بووم پێی و جیهانم لەبیرچوو ئەو هەستی بە من کرد سووڕایەوە خۆی داپۆشی دەستی کرد بە قورسکردن لەسەر من و دەستی کرد بە جنێودان بە من بەڵام بە شۆخ و شەنگ من داوای لێبووردن لێم کرد و دەرچووم بەڵام بەروبوومەکە لە مێشکمدا مایەوە و کاتی خلیسکاندن لەسەر کۆنی گرنگە خێزانەکەم گەڕانەوە شەوەکە و هەموان لە ژوورەکەیاندا خەوتن کاتژمێر ١ بوو من ڕامهێنراوە هەموو ڕۆژێک یەک سەر لە دوا ١ لێبدەم بۆ ئەوەی بخەوم گرنگە من سەیرکردنی فیلمی سێکسی دەکەم و کۆنم دەبەم و کۆنم دەبەمە سەر کۆنی دەستی کرد بە پەلاماردانی من لە ناکاو من گرنگیم پێ نەدا بەردەوام بووم لە لێدان و ئەو سەیری دەکرد پێی گوترا راستییەکانت بێزارکەرن و پێکەنی هات و نزیک بووەوە لە من گوتی حەمودی دەتەوێت بحەسێیتەوە گوتم خۆزگە گوتی کەواتە من تۆ دەحەسێنمەوە بەڵام بە مەرجێک منیشت بحەسێیتەوە پێم گوت فەرموو مەمک مەبەستە گرنگە گرتنی لە ملی مایەوە نزیکەی ڕووبەعە سەعاتێک لەگەڵیدا حەز دەکەم پاشان دابەزیمە سەر ملی دەستم کرد بە مژین تا خەو لێکەوت پانتۆڵەکەم لێکردەوە و بینیم مەمکەکەی ئۆفی بۆ مەکە و خێزانەکەی کە دروستی کردووە دەستم کرد بە مژینی توند هێنامە دەرەوە مەمکی مژیم و تێر کرد بە ئاوی دەمم و پانتۆڵەکەم داکەند و پانتۆڵی خەتەنەی سوورم داکەند و بينيم قنگ و کۆنی لە شێوەی ڕەنگێکی پەمەیی و لەو هەڵئاوساوە خڕڕڕە بۆ دینەکەی دەمرێت بۆ سێکس تا بەیانی و جەستەی هیچ موویەکی تێدا نەبوو گرنگە بەردەوام بووم لە مژین بۆ نیو سەعات سەرەتای یەکەمم فڕێدا حەسایەوە گوتی ئێستا نۆبەی منە و دەستی کرد بە گرتنی کۆنم و دەستی کرد بە مژین مژین و مژینی لەگەڵ هێلکەکاندا کچی خاوەن کۆنەکان چەند کچیم بینیوە ئەزموونیان هەیە لە مژیندا بەڵام وەک ئەزموونی ئەو نەمدیوە گرنگە بەردەوام بوو لە مژین تا سەرەتای یەکەمم فڕێدایە ناو دەمیەوە و پاشان خستمیە دۆخی سەگ 🐕 دواى تەنها کاتێک دەستم کرد بە خستنە ناو سەریەوە دەستی کرد بە قیژاندن ئاهااااااا و من کۆنم بەست دەستم کرد بە لێدان بەسەرەوە زیاتر لە نیو سەعات پاشان خەوخستن لەسەر پشت و دانیشت لەسەر کۆنم و دەستی کرد بە بازدان و ئاڵوگۆڕکردن لەگەڵیدا خۆشەویستم. و خلیسکاندنی مەمکی گەیشتمە سەرتی سەرەم گوتم لە کوێ فڕێ دەدەم گوتی فڕێ بدە ناو دەممەوە هەموو سەرەتای دووەمم فڕێدایە ناو دەمیەوە و پاشان کەمێک حەسایەوە هات و دەستی کرد بە یاری کردن بە کۆنم و مژینی ئەو وایکرد کۆنم هەڵبستێت لەسەر پیای گوتی ئێستا لە کۆنییەوە دەمەوێت گوتم هەڵمدەگری گوتی تاقیم دەکەینەوە هیچ نەبوو گوتم باشە فازلينم هێნა و دامنا لەسەر (کۆنی کۆنی ئەو) و دامنا لەسەر کۆن و لەسەر سکی خەواندم خستمە ناو سەریەوە دەستی کرد بە قیژاندنێکی گەورە گوتم لێم گەڕێ دەستم کرد بە داخستن کەم کەم و دەستی کرد بە قیژاندن ئاخ ئاخ ئاخ حەمودی ئازاری هەیە دەریپەڕێنە خۆشەویستم بەرگە ناگری پێستم دڕا گوتم خۆشەویستەکەم ئێستا کەمێک ڕادێیت لەگەڵیدا گرنگە بەردەوام بووم لە لێدان بە نەرمی کەم کەم و پاشان زیادیم کرد و دەستم کرد بە کارکردن بە خێرایی و ئەو ئاخ ئاخ ئاخ ئاخ فیدای کۆنت ئا سووکەکانیم حەسێنەوە حەسێنەوە سێکس بکە لەگەڵمدا سێکس بکە بە خودا لەسەر ئەم دۆخە بەردەوام بووم بۆ سەعاتێک سێکس دەکەم لەگەڵیدا و پاشان فڕێم دایە ناو کۆنییەوە سەرەتی سێیەم و چووینە ناوەوە گەرماوم کرد سەرم بڕی و سەرەتی چوارەمم پێدا 😍😍
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
[['text'=>" گەڕانەوە 🔙",'callback_data'=>'SAD2']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" چاودێری چیرۆکی چوارەم دەکات ،
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "OO5"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"سڵاو من تەبارەک لە بەغدا تەمەنم ٢٢ ساڵە خۆشەویستیم هەیە کەسێک بە ناوی عەلاوە.. جا جارێک زۆر بێزاربووم پێم گوت عەلاو با دەرچەین پێی گوت باشە بەیانی دەرچووین و زۆر گەرم بوو پێی گوت با بڕۆین بۆ ماڵمان چونکە خێزانەکەم چووبوونە دەرەوە پێم گوت باشە و من خۆشم دەوێت متمانەم پێیەتی پەیوەندی ٤ ساڵ.. چووینە ماڵەکەیان و خستییە ژوورەکەیەوە و ڕاستەوخۆ دەستی کرد بە ماچکردن و باوەشپێداکردنم لە ملیەوە بۆنی کردم چونکە خاڵی لاوازی من ملی منە.. جلوبەرگی داکەندم و لەسەر جێگاکەی خەواندم و لە مەمکیم مژی و دابەزی بۆ مژینی کۆنم و من زۆر تێکوپێک شکابووم.. جلوبەرگیم داکەند و ماچم کرد و گەستمی و پشتی قورسکردم.. و دابەزیم بۆ سەر کۆنی مژین و یاری کردن بە هێلکەکانی و فڕێمە ناو دەممەوە و ئەو زۆر تێکوپێک شکابوو.. و من لەو جۆرەکانم کە زۆر سێکسیم و حەزم بە توندوتیژییە دەزانێت لە قژم گرت و کۆنی هەمووی خستە ناو قوڕگممەوە گەیشتە قوڕگیشم.. و لێیدام و زللەی توندی لێدام.. و چەماوەیەوە و لەسەر کۆنیم لێیدا و من دەقیژاندم ئاخ بەسە عەلاو و کاتێک پێی دەڵێم بەسە سزادەم لێم دەدات بە پشتێن لەسەر کۆنیم.. و تف لە کونەکەی کۆنیم کرد و کۆنی خستە ناوەوە تەنها سەری مایەوە دەقیژاندم دەریپەڕێنە ئااخ.. دەریپەڕێنە و لە قژم گرت ڕایكێشامە ناو ژوورەوە.. و لێیدام بە پشتێن لەسەر کۆنیم دە لێدان.. و من زۆر ئازارمم چەشت بەڵام چێژبەخش بوو چونکە حەزم بە توندوتیژییە.. و پاشان کۆنی خستە ناو دەممەوە و لە کۆنیمەوە دەستی کرد بە خلیسکاندن.. قاچی بەرزکردەوە کەمێک لە کۆنی خستە ناوەوە قیژاندم ئااخ و لێیدام بە توندی و لە قژم گرت بۆ ئەوەی بێدەنگ بم.. و بە توندی خستیە ناوەوە هەمووی و من قیژاندم قیژاندنێکی زۆر بەهێز دەستم کرد بە گریمان لە ئازارەکە و پێی گوت.. ششش ئەمڕۆ کۆنەت دەڕڕێنم و بەردەوام بوو لە سێکسکردن لەگەڵمدا دەنیشت و دەردەچوو بە توندی.. و فڕێیدایە ناو کۆنیمەوە و پێکهاتەکە زۆر گەرم بوو و کۆنی لە کۆنیمدا مایەوە و ئەو ماچی کردم.. و کۆنی نووست و من زۆر برسی بووم دەستم کرد بە یاری کردن بە کۆنی بەرزیم کردەوە و مژیم و ئەو سەری هەڵدا فول پێی گوت سزا دەدەم پێم گوت بەڵێ سزا بدە و سێکس بکە لەگەڵمدا پێی گوت بەرگە دەگری پێم گوت بەڵێ بەرگە دەگری.. و بە گورتی لە قاچ و دەستم بەست بۆ ئەوەی جووڵە نەکەم و گورتی لە ملی خست و بە توندی بەستیەوە بووم وەک سەگ لە ژێر دەستیدا و دەمی بە لەزگە داخست.. و خولانەوەیم دەکرد لە ژوورەکەدا لەو گورتییەی لە ملیەوە بوو و مۆمێکی بۆ هێنام و کەوتە سەر جەستەم مردیم لە گەرمییەکەی.. و خەواندمی لەسەر پشت و قاچی بەرزکردەوە.. و لە کۆنیم دەدا بە سۆندە مردیم لە ئازارەکە بەڵام زۆر خۆش بوو.. و لێیدا لە جەستەم بە سۆندە و ڕایكێشام لە قژم.. و پاشان خەواندمی لەسەر سکم.. و سۆندەکەی کردە دوو قات زۆر ڕەق بوو خستیە ناو کۆنیمەوە و لێیدا بە پشتێن لەسەر کۆنیم و من دەگریام لە ئازارەکە پێی گوت بەزەییم پێتا نایەت تێر کوشتم و سۆندەکە لە کۆنیمدا سەعاتێکی تەواو دەیخستە ناوەوە و دەردەچوو لێیدا بووم بە شین لە لێدان.. و سۆندەکەی لە کۆنی دەرکرد و ڕاستەوخۆ.. کۆنی خستە ناو کۆنیمەوە و من زۆر ئازارم چەشت و نیو سەعات بەردەوام بوو لە سێکسکردن لەگەڵمدا لە کۆنییەوە و فڕێیدایە ناو کۆنیمەوە و حەسایەوە.. واتە سەعات و نیوێک کونەکەی کۆنی بەتاڵ نەبوو.. پاشان لەزگەکەی لە دەمم دەکردەوە پێی گوت تێر بوویت پێم گوت بەڵێ.. گرنگە گورتییەکەی کردەوە چونکە بەستیبووی و گەرماومان کرد بەیەکەوە و لە حەمامیشدا هێشتمە سەرەتایەکی تر تەواو بکات.. و ڕۆژێکی زۆر خۆش بوو هیوایە لە کچان و کوڕان دەسدرێژی تاقی بکەنەوە چونکە هەستێکی وەصفناکرێت
@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
[['text'=>" گەڕانەوە 🔙",'callback_data'=>'SAD2']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" چاودێری چیرۆکی پێنجەم دەکات ،
name : $Name ، 🐋
id : $useree ، 🐊   ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB1"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/2",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی یەکەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB2"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/3",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی دووەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB3"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/4",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی سێیەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB4"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/6",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی چوارەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB5"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/7",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی پێنجەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB6"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/8",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی شەشەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB7"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/9",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی حەوتەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB8"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/10",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی هەشتەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB9"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/11",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی نۆیەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "BB10"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/6",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" جووڵاوی دەیەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL1"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/32",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی یەکەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL2"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/31",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی دووەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL3"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/30",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی سێیەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL4"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/29",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی چوارەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL5"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/28",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی پێنجەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL6"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/27",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی شەشەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL7"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/26",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی حەوتەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL8"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/25",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی هەشتەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL9"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/24",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی نۆیەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data == "DL10"){
bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>"https://t.me/vvbvvm/23",
'caption'=>"@Cc14Cc - @GGGGW 💞",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- We √ ",'url'=>'t.me/GGGGW']],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admins,
'message_id'=>$message_id,
'text'=>" دەنگی دەیەمی داگرت ، !
name : $Name ، 🐋
id : $useree ، 🐊 ",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
]);
}
if($data=="X7"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱قنگی مێردەکەت درێژە یان ناوکە شۆخە 😹💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱درێژە⊰•",'callback_data'=>'MJ']],
[['text'=>"•⊱ناوکە شۆخە ⊰•",'callback_data'=>'MG']],
]
])
]);
}
if($data=="MJ"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱دیارە کۆنتت شکاندووە 😹💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'KL']],
]
])
]);
}
if($data=="MG"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱بەزەییم پێتا دێت بێبەش کراوە 😹💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'KL']],
]
])
]);
}
if($data=="KL"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱مێردەکەت بۆت دەلێسێتەوە 😹💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱نەخێر⊰•",'callback_data'=>'HY']],
[['text'=>"•⊱بێگومان⊰•",'callback_data'=>'HU']],]])]);}
if($data=="HY"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
•⊱کەواتە وەرە لای من 😻😹⊰•
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'IO']],]])]);}
if($data=="KL"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱مێردەکەت بۆت دەلێسێتەوە 😹💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱نەخێر⊰•",'callback_data'=>'HY']],
[['text'=>"•⊱بێگومان⊰•",'callback_data'=>'HU']],]])]);}
if($data=="HY"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
•⊱کەواتە وەرە لای من 😻😹⊰•
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'IO']],]])]);}
if($data=="HU"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
•⊱کەمەرشکێنە پیسەکە 😹😹⊰•
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'IO']],]])]);}
if($data=="IO"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱مێردەکەت لە دواوە لێت دەدات😾⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱بەڵێ ئاساییە⊰•",'callback_data'=>'OP']],
[['text'=>"•⊱ڕازی نابم⊰•",'callback_data'=>'PO']],]])]);}
if($data=="OP"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
•⊱ئاخ دواوە بە توندی بە توندی😹💞⊰•
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'SD']],]])]);}
if($data=="PO"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
•⊱کۆنت بۆچی بێبەش دەکەیت 😹⊰•
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'SD']],]])]);}
if($data=="SD"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
•⊱شەوی زاوایەتی چۆنە 😸💓⊰•
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱سەرنجڕاکێشە⊰•",'callback_data'=>'DF']],
[['text'=>"•⊱ناخۆشە⊰•",'callback_data'=>'FD']],]])]);}
if($data=="DF"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
•⊱ئەها زانیاری نوێ 😹😹⊰•
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'TR']],]])]);}
if($data=="FD"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
ا•⊱هاا کەواتە کۆنتت نەگرتووە 🌝😹⊰•
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'TR']],]])]);}
if($data=="TR"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
•⊱لەگەڵ مێردەکەت لە شەودا دەکەیت یان لە ڕۆژدا 🙁😹⊰•
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱شەو⊰•",'callback_data'=>'RT']],
[['text'=>'•⊱لە ڕۆژدا⊰•','callback_data'=>'TY']],
[['text'=>"•⊱هەموو کاتێک⊰•",'callback_data'=>'YU']],]])]);}
if($data=="RT"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱خۆشترین شت 😻💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'NM']],]])]);}
if($data=="TY"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱شەو خۆشترە بەڵام گرنگ ئارامییە 😹💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'NM']],]])]);}
if($data=="YU"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱ئەوە چییە تەنانەت تامیشی نییە 😹💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'NM']],]])]);}
if($data=="NM"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱چەند سەر ئەنجام دەدەن لە هەر سێکسێکدا 😻😹⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱پێنج و بەرەو سەرەوە⊰•",'callback_data'=>'LOL']],
[['text'=>"•⊱پێنج و خوارەوە⊰•",'callback_data'=>'OLO']],]])]);}
if($data=="LOL"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱کۆنم ماندوو نابێت بە مێردەکەت😹⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'JJH']],]])]);}
if($data=="OLO"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱بەڵێ سوپاس بۆ خوا 😹😹⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'AS']],]])]);}
if($data=="AS"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱خیانەتت لە مێردەکەت کردووە 😸😹⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱بەڵێ⊰•",'callback_data'=>'BNM']],
[['text'=>"•⊱نەخێر⊰•",'callback_data'=>'NBM']],
[['text'=>"•⊱جارێک بوو پەشیمان بوومەوە⊰•",'callback_data'=>'NMB']],]])]);}
if($data=="BNM"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"وەرە با دووبارە خیانەت بکەین 😻😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'HHI']],]])]);}
if($data=="MNB"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱دیارە ناپاکەکە کەمتری نەکردووە بۆت 😹💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'HHI']],]])]);}
if($data=="NBM"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱اف اف سەیری پەشیمانی بکە بڕۆ کچە بێ ڕەوشت 🌝😹⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'HHI']],]])]);}
if($data=="HHI"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱مێردەکەت دەتشارێتەوە یان ماندووە ☹️😹⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱اف دەشارێتەوە⊰•",'callback_data'=>'CV']],
[['text'=>"•⊱نەخێر ماندووە⊰•",'callback_data'=>'VC']],]])]);}
if($data=="CV"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱ئۆه چ شتێک لە دواوە شکاندوویەتی لە پێشەوە 😹💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'VB']],]])]);}
if($data=="VC"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"•⊱وەرە با بحەسێنمەوە گیانەکەم 😻💞⊰•",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱گەڕانەوە⊰•",'callback_data'=>'home']],]])]);}
if($data=="X1"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"گەڕەکت هەڵبژێرە لە پێشمدا خلیسکێنە یان لە لای دایکت 😞😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"لای من 😹😻",'callback_data'=>'Z1']],
[['text'=>"لای دایکت😟",'callback_data'=>'Z2']],
]
])
]);
}
if($data=="Z1"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"بە خودا ئەگەر لای من بێیت پیرۆزت بێت لەسەرت ڕاستە🤤
#بەردەوامبە😞😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S1']],
]
])
]);
}
if($data=="Z2"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"وەی شتی خۆش نییە لەو نەسڕەی کە دێت بۆت لە دایکتەوە پیرۆز بێت😹😹😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S1']],
]
])
]);
}
if($data=="S1"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"گەڕەکت هەڵبژێرە لە نێوان پانتۆڵی خەتەنە یان ئاسایی 😉😹👙",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"خەتەنە😹😻👄",'callback_data'=>'F1']],
[['text'=>"ئاسایی😌",'callback_data'=>'F2']],]])]);}
if($data=="F1"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
ئاخ کچە خەتەنە دواوە و وەڵڵا بۆ مژین و گەرمی 🤤😹💋
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S2']],]])]);}
if($data=="F2"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
کوڕە کچی ئاسایی بزانە کۆن بووە. 🙁💛 ۦٰ #هەستی پانتۆڵی باوکم دەبێت 😹😹😹😹
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S2']],]])]);}
if($data=="S2"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"گەڕەکت هەڵبژێرە لە نێوان خلیسکاندن و ئاخ ئاخ 😉😹
یان لە نێوان هاوسەرگیری و #ئارامی 😞😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"خلیسکاندن🙊",'callback_data'=>'F3']],
[['text'=>"هاوسەرگیری💋",'callback_data'=>'F4']],]])]);}
if($data=="F3"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
حەزت لە خلیسکاندنە کچی کۆن کە وا خۆت نیشان دەدەیت نەتەوێت هاوسەرگیری بکەیت 😞😹😹
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S3']],]])]);}
if($data=="F4"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
ئاخ کچی هاوسەرگیری بە سروشتی حەزی لێیە 😹😹
#بەردەوامبە 😹🚶‍♂
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S3']],]])]);}
if($data=="S3"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
چەند جار ڕشتوویەتی یان فڕێیدایە ناو پانتۆڵەکەتەوە🤤👙
دوو جار 😉 » زیاتر🙊
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"دوو جار🙊",'callback_data'=>'F5']],
[['text'=>"زیاتر لە دوو جار🙊😻",'callback_data'=>'F6']],]])]);}
if($data=="F5"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
ئەمە کچی دوو جارە ڕێکەوت بوو و تەواو بوو 😞😹😹😹
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S3']],]])]);}
if($data=="F6"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
ئاخ دیارە پڕبووە پڕ وەرە با هاوسەرگیری بکەین 💕😹
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S4']],]])]);}
if($data=="S4"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
دوا جار پەنجەت خستە ناو کۆنتەوە ☹️😹
",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"دەترسێم😮",'callback_data'=>'F7']],
[['text'=>'لە مێژە','callback_data'=>'F8']],
[['text'=>"زۆر تێپەڕ نەکردووە🙊😻",'callback_data'=>'F9']],]])]);}
if($data=="F7"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ئاخ وەرە با بۆتەکە پەنجەکەی بخاتە ناوەوە و پشکنین بکات 😞😹💕",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S5']],]])]);}
if($data=="F8"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"پیرۆز بێت لە گورگ و هەستت چۆن بوو؟  💔😹🖕",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S5']],]])]);}
if($data=="F9"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ئاخ وەرە با بۆتەکە پەنجەکەی بخاتە ناوەوە و پشکنین بکات 😞😹💕",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S5']],]])]);}
if($data=="S5"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"تۆ چۆن حەزت لە کۆنە یان خەیارە 😉👙😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"خەیار😻🙊",'callback_data'=>'F23']],
[['text'=>"کۆن",'callback_data'=>'F24']],]])]);}
if($data=="F23"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ئاخ فیدای ئەوەی کە سروشتی حەز لێیە وەرە بمژە
#بەردەوامبە 🤤😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S6']],]])]);}
if($data=="F24"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"کچی خەیار دیارە تاقیت کردووەتەوە 😹😹
#بەردەوامبە",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S6']],]])]);}
if($data=="S6"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"زیاتر لەگەڵ کێ سێکس دەکەیت، ماڵپەڕ یان خۆشەویستەکەت😞😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"😢ماڵپەڕەکان",'callback_data'=>'F26']],
[['text'=>"😋خۆشەویستەکەم",'callback_data'=>'F27']],
[['text'=>"هیچ کەسێک 😌",'callback_data'=>'F28']],]])]);}
if($data=="F26"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"خزمەتگوزاری سێکسم بۆ بکە بە خێرایی • وەرە ،🙌🏼Ֆ سێکس لەگەڵت دەکەم بە بێ بەرامبەر پەیامێک بنێرە بڵێ سێکس لەگەڵم بکە 💕",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S7']],]])]);}
if($data=="F27"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ئاخ خۆشە بە سەرتەوە دیارە تێرت دەکات 😞😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S7']],]])]);}
if($data=="F28"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"بۆچی گیانەکەم 😾😹✨ حەزت لە سێکس نییە",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S8']],]])]);}
if($data=="S8"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"رەنگی مەمکت چۆنە و قەبارەی سەیانت چەندە 😉😻
پەمەیی 35✨🤤
قاوەیی 35 😻💋",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"پەمەیی 35✨🤤",'callback_data'=>'F30']],
[['text'=>"قاوەیی 35💋",'callback_data'=>'F31']],]])]);}
if($data=="F31"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ئاخ ئەەی قاوەیی وەرە فیدای ئەو مەمکە بێ بۆت
بۆ مژین و کوشتن • سڵاو ،💋 💕🤤",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S9']],]])]);}
if($data=="F30"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ئۆفی هەم مەمکی پەمەیی و هەم دواوە
پیرۆز بێت لە خۆشەویستەکەت من لە شوێنی ئەو دەمکوشت لە سێکسکردنداگەڵتدا 🤭😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S9']],]])]);}
if($data=="S9"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"گەڕەکت هەڵبژێرە لە سێکسدا دۆخی 69🤤
یان دۆخی 56😻",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"دۆخی 69🙊",'callback_data'=>'F32']],
[['text'=>"دۆخی 56😻",'callback_data'=>'F33']],
[['text'=>"هیچ کامێک",'callback_data'=>'F34']],]])]);}
if($data=="F32"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ئاخخ دیارە فێری مژین بووی وەرە
ئەمەش فڕێبدە و سێکسی لەگەڵ من بکە ☹️😹",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S10']],]])]);}
if($data=="F33"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"چەند کۆنە ئاڵوگۆڕ بکە بە دۆخی پشیلە و تەواو 😑😹وەرزشی لەگەڵ بکە 69",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S10']],]])]);}
if($data=="F34"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"کەواتە چ دۆخێک بە دلتە؟  $SSK",
'disable_web_page_preview'=> true ,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S11']],]])]);}


If($data=="F61"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| لە هەموو شەقامەکەدا خەڵک دەتبینێت و ئازار دەچێژیت بەڵام تەنها لای من پارێزراویت  $SSK 😉",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S12']],]])]);}


if($data=="S11"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| ئامادەییت هەیە مەساج بکەیت لە بەردەم باوکتدا یان بێم بۆت بکەم بە تەنیا",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"مەساجم بۆ بکە",'callback_data'=>'F63']],
[['text'=>"لە بەردەم باوکمدا",'callback_data'=>'F64']],]])]);}

if($data=="F63"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| بەیانی و شەو مەساجت بۆ دەکەم و هیچ پشوویەک نییە $SSK 😉",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S12']],]])]);}

if($data=="F64"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| تەنانەت قۆندرە لە باوکت دەخۆیت 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S12']],]])]);}

if($data=="S12"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| یاری بە سنگت دەکەیت لە بەردەم باوکتدا یان من یاری پێ بکەم",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"تۆ یاری بە سنگم بکە",'callback_data'=>'F65']],
[['text'=>"لە بەردەم باوکمدا",'callback_data'=>'F66']],]])]);}

if($data=="F65"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| یاری پێ دەکەم و دەیمژم 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری داهاتوو ⊰•",'callback_data'=>'S13']],]])]);}


If($data=="F66"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| هەتا دەخۆیت زللە و قۆندرە لە باوکتا دەخۆیت 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S13']],]])]);}

if($data=="S13"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| پەنجەت دەنێیتە دواوە یان کەسێک مەمکت دەمژێت",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"لە مەمکما",'callback_data'=>'F67']],
[['text'=>"لە دواوەم",'callback_data'=>'F68']],]])]);}

if($data=="F67"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| ئۆف خۆ لای تۆ باقم تەنها نەمژم دەیئەم 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S14']],]])]);}

if($data=="F68"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| خوای گەورە یارمەتی بكات ئەگەر پەنجەت درێژ بێت 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S14']],]])]);}


if($data=="S14"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| ئەگەر سەرپشکت بکەن لە نێوان خواردنی باچە و مژینی لێوەکانت 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"مژینی لێوەکانم",'callback_data'=>'F70']],
[['text'=>"خواردنی باچە",'callback_data'=>'F71']],]])]);}
if($data=="F70"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| لێوەکانت دەخۆم و زمانت دەمژم وەف",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S15']],]])]);}

if($data=="F71"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| خۆ ئەگەر لەگەڵ مندا ماچت نەکردبایە باشتر نەبوو 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S15']],]])]);}

if($data=="S15"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| ئەگەر سەرپشکت بکەن لە نێوان خەوتن لە ژوورێکدا کە پڕە لە مشک یان ئەوەی دەستم بخەمە ناو ستیانەکەتەوە😹😔",

'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بخەوم",'callback_data'=>'F72']],
[['text'=>"دەست بخەە ناوەوە",'callback_data'=>'F73']],]])]);}

if($data=="F72"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| خۆ ئەگەر دەستم نەخستایە ناوەوە باشتر نەبوو بۆت 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰• ",'callback_data'=>'home']],]])]);}

if($data=="F73"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| ئۆف دەست دەخەمە ناوەوە و سەرمش",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}

if($data=="X3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"💗 بەخێر بێیت گیانەکەم بۆ بەشی پرسیارە گەرمەکان، ڕەگەزەکەت هەڵبژێرە و یاری دەپێکرە و چێژ وەرگرە 👅🔞✨",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"کچ👩",'callback_data'=>'A1']],
[['text'=>"کوڕ👨",'callback_data'=>'A2']],
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}

if($data=="A1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"پانتۆڵەکەت چ ڕەنگێکە 👙🙈 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"پەمەیی🙊😻",'callback_data'=>'B1']],
[['text'=>"ڕەش👍💟",'callback_data'=>'B2']],]])]);}

if($data=="B1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وۆف ئەوەی پەمەیی دەکوژێت 😞😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S16']],]])]);}

if($data=="B2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"خۆزگە بەوەی کە هەتە 😉",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S16']],]])]);}

if($data=="S16"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"قوڕنت چەند گەورەیە",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"گەورە",'callback_data'=>'B3']],
[['text'=>"بچووک",'callback_data'=>'B4']],
[['text'=>"ناوەند",'callback_data'=>'B5']],]])]);}

if($data=="B3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"نۆشی گیانی ئەوەی دەتگرێت 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S17']],]])]);}

if($data=="B4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وۆف ئاچ برای لێستن ɵ̷̥̥᷄ˬɵ̷̥̥᷅",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S17']],]])]);}

if($data=="B5"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ئۆیلی بۆ مژینی مەمکت 💞😻😹",

'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S17']],]])]);}

if($data=="S17"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هیچ کەس لە خزمەکانت لەتت کردووە 🥺🤓 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بەڵێ🙊",'callback_data'=>'B6']],
[['text'=>"نەخێر💔",'callback_data'=>' B7']],]])]);}


if($data=="B6"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هەزار خۆشایی♥️🙈 ڕۆحەکەم",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S18']],]])]);}
if($data=="B7"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"بیچاره بێبەشکراوە😹😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S18']],]])]);}

if($data=="S18"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"گووی گەورە یان بچووک 😾🔥؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"گەورە💙",'callback_data'=>'B8']],
[['text'=>"بچووک",'callback_data'=>'B9']],]])]);}

if($data=="B8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هی نێچ و لێدان 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S19']],]])]);}

if($data=="B9"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هی نێچ و لێدان 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S19']],]])]);}

if($data=="S19"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"کە ئارەزووت دەبێت مەمکت دەشێلی یان قوزت 🤤 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"قوزم😻😌",'callback_data'=>'B10']],
[['text'=>"مەمکەم🙈",'callback_data'=>'B11']],]])]);}

if($data=="B10"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ئۆیلی دەبێت نێچ بێت 🔥🤤 $SSK",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S20']],]])]);}

if($data=="B11"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ئاچ ئێستا مەمکت چەند گەورە بووە لە مەشین ɵ̷̥̥᷄ˬɵ̷̥̥᷅",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S20']],]])]);}



if($data=="S20"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"چی زیاتر لە جەستەتدا دەتوێنێتەوە 🤤😉؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ملم💙",'callback_data'=>'B12']],
[['text'=>"مەمکەم😉🙊",'callback_data'=>'B13']],]])]);}

if($data=="B12"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەکرێت بمژرێت خۆشەویستم؟ 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S21']],]])]);}
if($data=="B13"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەکرێت بمژرێت خۆشەویستم؟ 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ پرسیاری دواتر ⊰•",'callback_data'=>'S21']],]])]);}

if($data=="S21"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"چەند جار لە پێشەوە دەپەڕێنرێیت 🤔😹 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"هیچ جارێک 😻",'callback_data'=>'B14']],
[['text'=>"زۆر😌",'callback_data'=>'B15']],]])]);}

if($data=="B14"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"تەمەنت خەسارە😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}

if($data=="B15"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هاها ئەوەی فراوان 🙂😹😹😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}


if($data=="A2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ئەگەر سەرپشک کرایت لە نێوان لەتکردنی کچێکی تەمەن ١١ ساڵ 😑😹
یان پیرەژنێکی تەمەن ٦٠ ساڵ 😞💕😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"کچێک😹",'callback_data'=>'B16']],
[['text'=>"پیرەژن",'callback_data'=>'B17']],]])]);}

if($data=="B16"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"لە لە لە کۆتایی تەمەندا پیرەژنێک دەپەڕێنیت 😹😹
`خوا` یارمەتیت بدات ڕۆڵە 😹🚶‍♂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}

if($data=="X4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"•⊱ _بەخێر بێیت عزیزم بۆ بەشی دەبێت وێنە_ ⊰•
•⊱ _یەکێک لە هەڵبژاردەکانی خوارەوە هەڵبژێرە_ ⊰•",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱جوانەمێر⊰•",'callback_data'=>'XQ']],
[['text'=>"•⊱جوانەمیلە⊰•",'callback_data'=>'QX']],
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}

if($data=="XQ"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"•⊱ وێنەیەکی قۆڕنت بنێرە بۆم 🙁😹💞 ⊰•
@MeDo4",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}

if($data=="QX"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>" هەر وێنەیەک بۆ بۆت بنێرە و ئەو بڕیار دەدات",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}

$k5 = array(
"نییە",
"دەبێت",
"ئەمە چییە",
"پیس",
"واتە نیوە بە نیوە",
"کارێکی پیسە",
"وڕ",
"دەبێت زۆر بەهێزە هەمووی 🙁😹💞",
);
$k51 = array_rand($k5, 1);








  If($text != "/start" and $chat_id != $admin ){
      bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"پێداچوونەوە دەکرێت . . . ",
  ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"$k5[$k51]" ,
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- گەڕانەوە", 'callback_data'=>'help']],
]
])]);
unlink("zkref/$useree/zeakef.txt");
unlink("medo941/$useree/inasgram.txt");
}

if($data=="X5"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"♥️⁞ بەخێر بێیت گیانەکەم بۆ بەشی ( دەبێت ئاسایی ) ڕەگەزەکەت هەڵبژێرە و دەست بە یاری بکە و چێژ وەرگرە 💘✨.",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"کچ 🙊",'callback_data'=>'H1']],
[['text'=>"کوڕ😹",'callback_data'=>'H2']],
[['text'=>"گەڕانەوە",'callback_data'=>'home']],]])]);}

if($data=="H2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"تۆ پیاویت نەک یاری بۆ ئەمە
https://www.fuq.com",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}

if($data=="H1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ئەی ڕووتەڵە😹/دەبێت 🌚💃
【قژت بە نەوت بشۆیت🙊🙀/مێشولەیەک بە دەستت بگریت😹】",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"مێشولەیەک بگریت",'callback_data'=>'H3']],
[['text'=>"قژت بشۆیت",'callback_data'=>'H4']],]])]);}

if($data=="H3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەی گیانەکەم💃💃

لەگەڵ مندا گۆرانی بڵێ🔇🔇
ئەی مێشولە و قالۆنە😹💃💃 ها ها ئەی مێشولە و قالۆنە😹💃💃",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S23']],]])]);}

if($data=="H4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ئاحم🌚😹

ئەمە کێیە مێشولە دەگرێت🌚😹
دڵنیایت 🌚😹 ئەمە ڕووخسارتە 😹💃",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S23']],]])]);}

if($data=="S23"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ئەی دوای ڕۆحی بۆت و گەشەپێدەرەکە😹
دەبێت 🙀

【بە بێ مکیاژ دەربکەویت و هەموو عێراق بژمێریت😹/

بڕۆ بۆ لای دایکت و پێی بڵێ من بە دزی هاوسەرگیریم کردووە🙊😹】",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بێ مکیاژ",'callback_data'=>'R1']],
[['text'=>"بڕۆم بۆ لای دایکم",'callback_data'=>'R2']],]])]);}

if($data=="R1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"سوێند بە خودا درۆزنە😹
بە ڕاستی درۆزنە?? سوێند بە حسین درۆزنە😹
ئەو پیسە 😹 شێواوە😴😹
ڕوخسارت وەکو گەشەپێدەری بۆتەکەیە سەیرە😏😹
و بە بێ مکیاژ دەردەکەویت😹💃💃
وزەی گەنجان بۆ هاوسەرگیری دەبڕیت😹💃💃🌚",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S24']],]])]);}

if($data=="R2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەستی خۆش بێت🌚💪

و بەهێز بمێنەوە خۆشەویستم😼
و لە یەکەم زللەوە مەگری😹😹😹😹
💃💃💃💃💃💃",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S24']],]])]);}

if($data=="S24"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەبێت 🌚😹

【بە بێ ستیان دەربکەویت👙/🌚😹/لێو بە ميدۆ بدەیت 🌚😹】",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بە بێ ستیان دەربکەوم",'callback_data'=>'R3']],
[['text'=>"لێو بە ميدۆ بدەم",'callback_data'=>'R4']],]])]);}

if($data=="R3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وۆف🙊😹

و وەرە لای گەشەپێدەر ميدۆ😹💃
دەیەوێت قسەت لەگەڵ بکات🌚😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}


if($data=="R4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"درۆزنەااااااااااااااااااااد🌚😹

دەگەی بە لای من و پانتۆڵەکەت لەبەر دەکەیت 🙁😹💞",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}


if($data=="X8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"شەوی گواستنەوە چۆنە خۆشەویستەکەم 😉😹 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ناوازەیە😻",'callback_data'=>'Q1']],
[['text'=>"ماندوبوون😻",'callback_data'=>'Q2']],]])]);}

If($data=="Q1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هاها گیانەکەم دەبێت باش حەواندووتەوە یان تۆ ڕاهاتووی 😹🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S30']],]])]);}


if($data=="Q2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەی ڕۆحەکەم گەورە دەبیت و لەبیرت دەچێتەوە 😌😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S30']],]])]);}

if($data=="S30"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"چەند جار ڕووتان کردەوە تۆ و مێردەکەت لە شەوی گواستنەوەدا 😻🙊😹 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"زیاتر لە ٥😻",'callback_data'=>'Q3']],
[['text'=>"کەمتر لە ٥😟",'callback_data'=>'Q4']],]])]);}


if($data=="Q3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەزانم قوزە یان تەکسییە چت هەیە 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S31']],]])]);}

if($data=="Q4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەستی خۆش بێت گیانەکەم باش دەکەیت نەوەک تۆ تەکسییە 🤤💔😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S31']],]])]);}

if($data=="S31"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"مێردەکەت مەمکت خۆش دەوێت 😾❤️ ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بەڵێ💓",'callback_data'=>'Q5']],
[['text'=>"نەخێر😧",'callback_data'=>'Q6']],]])]);}

if($data=="Q5"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەبێت تێێر بووبێت لەسەری هەموو ڕۆژێک دەیدەیتێ 💘😹😹✨",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S32']],]])]);}


if($data=="Q6"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"دەبێت تێێر بووبێت لەسەری هەموو ڕۆژێک دەیدەیتێ 💘😹😹✨",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S32']],]])]);}

if($data=="S32"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"مێردەکەت لە دواوە لەتی کردووی یان نا 🤦‍♂😹 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"نەخێر🙊😻",'callback_data'=>'Q7']],
[['text'=>"بەڵێ👀❤",'callback_data'=>'Q8']],]])]);}

if($data=="Q7"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"تاقی بکەرەوە گیانەکەم تاقی بکەرەوە خۆشە 😹😔😻",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S33']],]])]);}

if($data=="Q8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"چەندە نێچت خۆش دەوێت کەواتە مردووم 🔥🤤😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S33']],]])]);}

if($data=="S33"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"مێردەکەت دەتشارێتەوە یان ناتوانێت 🖤😪 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بەڵێ هەمووی🙊😻",'callback_data'=>'Q9']],
[['text'=>"نەخێر😤😥",'callback_data'=>'Q10']],]])]);}

if($data=="Q9"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"نۆشی گیانتان بێت گیانەکەم 🖤🤓",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S34']],]])]);}



if($data=="Q10"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وەرە لای من دەتشارمەوە خۆشەویستم 🖤😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ئاستی داهاتوو💗",'callback_data'=>'S34']],]])]);}


if($data=="S34"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"خیانەتت لە مێردەکەت کردووە لەگەڵ کەسێکی تردا یان نا 😹😳 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بەڵێ😹😹",'callback_data'=>'Q11']],
[['text'=>"نەخێر🙋🙌",'callback_data'=>' Q12']],]])]);}

if($data=="Q11"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"بیچاره دەبێت نەزانێت و نەتشارێتەوە 😹😒🤦‍♂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}


if($data=="Q12"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"بێگومان لە قوزتەوە چونکە بووە بە هەنگوین 😻😹😾",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}


if($data=="X8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"IM 𓆩 #عێراق 🇮🇶 𓆪  
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
  ➤  @GGGGW ➤ @cC14Cc",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"•⊱ گەڕانەوە ⊰•",'callback_data'=>'home']],]])]);}
if($data == "BAE"){
    bot('deleteMessage',[
    'chat_id'=>$chat_id2,    'message_id'=>$dev_i,
    ]);
    bot('sendVoice',[
'chat_id'=>$chat_id2,
        'voice'=>"https://t.me/cc15cc/20",
        'caption'=>'WE:- 😹💞 :- @GGGGW',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'','callback_data'=>'home']],
] ])]);}
