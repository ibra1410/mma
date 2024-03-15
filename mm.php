<?php 
/*غير الحقوق واثبت انك فاشل
اذا تريد تنقل اذكر اسمي او اسم قناتي */

/*====================
CH : @AX_GB
DEV : @O_1_W
Translator : @AX_GB
/*====================*/
ob_start();
$token = "7024124710:AAGH-2dv6u1iQ07GIfkvgVdygW2tusBvAuM";//توكنك
define("API_KEY",$token);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
     $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$from_id = $message->from->id;
$from_id = $message->from->id;
$data = $update->callback_query->data;
$name = $message->from->first_name;
$from_id2 = $update->callback_query->message->from->id;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$username = $update->message->from->username;
$sttings = json_decode(file_get_contents("mrax.json"),1);
$Df = "6946908675";//ايديك
if(!$sttings['sudo']){
$iidsod = $Df;
}elseif($sttings['sudo']){
$iidsod = $sttings['sudo'];
}
$admin = $iidsod;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 =  $update->callback_query->message->message_id;
$name = $message->from->first_name;
$username = $message->from->username;
$from_id = $message->from->id;
$mrax2 = explode("\n",file_get_contents("MRAX.txt"));
$SAll = count($mrax2)-1;
if ($message && !in_array($from_id, $mrax2)) {
file_put_contents("MRAX.txt", $from_id."\n",FILE_APPEND);
}
$ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$sttings['ch1']."&user_id=".$from_id);
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$sttings['ch2']."&user_id=".$from_id);
if($message && (strpos($ch1,'"status":"left"') or strpos($ch1,'"Bad Request: USER_ID_INVALID"') or strpos($ch1,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>'$em :عذراً عزيزي 
✔:يجب عليك الاشتراك في قناة المطور أولا
✔:اشترك ثم ارسل /start 
 — — — — — — — — —
'.$sttings['ch1'].'
 — — — — — — — — —
'.$sttings['ch2'],
]);return false;
}
$ch11 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$sttings['ch11']."&user_id=".$from_id);
$ch22 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$sttings['ch22']."&user_id=".$from_id);
if($update){
if($message && (strpos($ch11,'"status":"left"') or strpos($ch11,'"Bad Request: USER_ID_INVALID"') or strpos($ch11,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
$get = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=".$sttings['ch11']));
$link = $get->result;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$em :عذراً عزيزي 
✔:يجب عليك الاشتراك في قناة المطور أولا
✔:اشترك ثم ارسل /start 
 — — — — — — — — —
".$link."
 — — — — — — — — —",
'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضغط هنا",'url'=>"$link"]],
]])
]);return false;}}
if($update){
if($message && (strpos($ch22,'"status":"left"') or strpos($ch22,'"Bad Request: USER_ID_INVALID"') or strpos($ch22,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
$get = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=".$sttings['ch22']));
$link = $get->result;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$em :عذراً عزيزي 
✔:يجب عليك الاشتراك في قناة المطور أولا
✔:اشترك ثم ارسل /start 
 — — — — — — — — —
".$link ."
 — — — — — — — — —",
'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضغط هنا",'url'=>"$link"]],
]])
]);return false;}}
$em = $sttings['emoji'];
$start = $sttings['start'];
if($text == "/start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"🎚:اهلا بك عزيزي .
📮:في لوحه الاوامر ألخاصه بالمطور الاساسي 
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"$em :الاشتراك الاجباري",'callback_data'=>"All Ch"]],
[['text'=>"$em :الاذاعه" ,'callback_data'=>"Sender"],['text'=>"$em :المشتركين {".$SAll."}",'callback_data'=>"mem"]],
[['text'=>"$em :تفعيل التنبيه" ,'callback_data'=>"ch1"],['text'=>"$em :تعطيل التنبيه" ,'callback_data'=>"ch2"]],
[['text'=>"$em :النسخه الاحتياطيه" ,'callback_data'=>"file"]],
[['text'=>"$em :تفعيل التوجيه" ,'callback_data'=>"ON"],['text'=>"$em :تعطيل التوجيه" ,'callback_data'=>"Of"]],
[['text'=>"$em :نقل ملكيه" ,'callback_data'=>"AddAdmin"]],
[['text'=>"$em :تغيير الازرار " ,'callback_data'=>"emoji"],['text'=>"$em :تغيير ال /start " ,'callback_data'=>"star"]],
]])
]);
}
if($data == "mrax" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
"text"=>"🎚:اهلا بك عزيزي .
📮:في لوحه الاوامر ألخاصه بالمطور الاساسي .",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"$em :الاشتراك الاجباري" ,'callback_data'=>"All Ch"]],
[['text'=>"$em :الاذاعه" ,'callback_data'=>"Sender"],['text'=>"$em :المشتركين {".$SAll."}",'callback_data'=>"mem"]],
[['text'=>"$em :تفعيل التنبيه" ,'callback_data'=>"ch1"],['text'=>"$em :تعطيل التنبيه" ,'callback_data'=>"ch2"]],
[['text'=>"$em :النسخه الاحتياطيه" ,'callback_data'=>"file"]],
[['text'=>"$em :تفعيل التوجيه" ,'callback_data'=>"ON"],['text'=>"$em :تعطيل التوجيه" ,'callback_data'=>"Of"]],
[['text'=>"$em :نقل ملكيه" ,'callback_data'=>"AddAdmin"]],
[['text'=>"$em :تغيير الازرار " ,'callback_data'=>"emoji"],['text'=>"$em :تغيير ال /start " ,'callback_data'=>"star"]],
]])
]);
}
if($data == "star"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'ارسل الستارت الجديده ',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['data'] = "start";
file_put_contents("mrax.json",json_encode($sttings));
}
if($text && $sttings['data'] == "start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>" $em :تم تعيين الستارت ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['start'] = "$text";
$sttings['data'] = "hhhhhdd";
file_put_contents("mrax.json",json_encode($sttings));
}
if($data == "emoji"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'حسنا ارسل الايموجي او الرمز الذي سيتم عرضه في كل الازرار🧶',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['data'] = "emojis";
file_put_contents("mrax.json",json_encode($sttings));
}
if($text && $sttings['data'] == "emojis" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>" $em :تم اضافه الزر  [$text] ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['emoji'] = "$text";
$sttings['data'] = "hhhhhdd";
file_put_contents("mrax.json",json_encode($sttings));
}
if($data == "file" and $chat_id2 == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حسنا اختر من الاسفل$em ",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اضغط لسحب نسخه من ملف التخزين $em ' ,'callback_data'=>"sendfile"]],
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
}
if($data == "sendfile" and $chat_id2 == $admin){
bot('senddocument',[
'chat_id'=>$chat_id2,
'document'=>new CURLFile("MRAX.txt"),
"caption"=>"- 👥 $SAll
/start $em ",
]);
unset($sttings['data']);
file_put_contents("mrax.json",json_encode($sttings));
}
if($data == "AddAdmin" and $chat_id2 == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em ارسل الان ايدي المطور الجديد",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['data'] = "Addadmin";
file_put_contents("mrax.json",json_encode($sttings));
}
if($text and $sttings['data'] == "Addadmin" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"✔تم رفع الادمن وتم التنزيل",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
bot("sendmessage",[
"chat_id"=>$text,
"text"=>"✔تم رفعك ادمن بالبوت",
]);
$sttings['sudo'] = "$text";
unset($sttings['data']);
file_put_contents("mrax.json",json_encode($sttings));
}
if($data == "Sender"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'🗣:اهلا بك في قسم الاذاعه',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اذاعه توجيه' ,'callback_data'=>"SendQ1"],['text'=>'اذاعه رساله' ,'callback_data'=>"SendQ2"]],
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
}
if($data == "All Ch"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :اهلا بك في قسم الاشتراك الاجباري ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اضف  عامہ 1️⃣ $em " ,'callback_data'=>"AddCh1"],['text'=>"حذف  عامہ 1️⃣ $em ",'callback_data'=>"DelCh1"]],
[['text'=>"اضف  عامہ 2️⃣ $em " ,'callback_data'=>"AddCh2"],['text'=>"حذف  عامہ 2️⃣ $em " ,'callback_data'=>"DelCh2"]],
[['text'=>"عرض عامہ" ,'callback_data'=>"ALLCH"]],
[['text'=>"عامہ $em 🔝" ,'callback_data'=>"⛔⛔"]],
[['text'=>"اضف  خاصہ 1️⃣ $em " ,'callback_data'=>"AddCh11"],['text'=>"حذف  خاصہ 1️⃣ $em " ,'callback_data'=>"DelCh11"]],
[['text'=>"اضف  خاصہ 2️⃣ $em ",'callback_data'=>"AddCh22"],['text'=>"حذف  خاصہ 2️⃣ $em " ,'callback_data'=>"DelCh22"]],
[['text'=>"عرض خاصہ" ,'callback_data'=>"ALLCH1"]],
[['text'=>"خاصہ $em 🔝" ,'callback_data'=>"⛔⛔"]],
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
}
if($data == "AddCh11"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ارسل ايدي قناتك الخاصه $em :",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['data'] = "okch131";
file_put_contents("mrax.json",json_encode($sttings));
}
if($text && $sttings['data'] == "okch131" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$em :تم اضافه القناة [$text]
$em :قم برفع البوت في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['ch11'] = "$text";
$sttings['data'] = "sd";
file_put_contents("mrax.json",json_encode($sttings));
}
if($data == "DelCh11"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :هل أنت متأكد من أنك تريد حذف القناة ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'لا', 'callback_data'=>'mrax'],['text'=>'نعم','callback_data'=>'OKDelCh11']],
]])
]);
}
if($data == "OKDelCh11"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :تم حذف القناة الاولى من الإشتراك الإجباري",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
unset($sttings['ch11']);
file_put_contents("mrax.json",json_encode($sttings));
}
if($data == "AddCh22"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ارسل ايدي قناتك الخاصه $em ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['data'] = "okch229";
file_put_contents("mrax.json",json_encode($sttings));
}
if($text and $sttings['data'] == "okch229" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$em :تم اضافه القناة [$text]
$em :قم برفع  البوت في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['ch22'] = "$text";
$sttings['data'] = "stop0909";
file_put_contents("mrax.json",json_encode($sttings));
}
if($data == "DelCh22"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :هل أنت متأكد من أنك تريد حذف القناة ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'تأكيد', 'callback_data'=>'mrax'],['text'=>'الغاء','callback_data'=>'OKDelCh22']],
]])
]);
}
if($data == "OKDelCh22"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :تم حذف القناة الاولى من الإشتراك الإجباري",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
unset($sttings['ch22']);
file_put_contents("mrax.json",json_encode($sttings));
}
if($data == "ALLCH1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :هذه قائمة القنوات الأشتراك الاجباري 
$em :القناة الاولى ".$sttings['ch11']."
$em :القناة الثانية  ".$sttings['ch22'],
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
}
if($data == "AddCh1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'✔:الآن قم بارسال معرف قناتك مع @',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['data'] = "okch121";
file_put_contents("mrax.json",json_encode($sttings));
}
if($text and $sttings['data'] == "okch121" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$em :تم اضافه القناة [$text]
$em :قم برفع البوت ادمن في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['ch1'] = "$text";
$sttings['data'] = "stopnnn";
file_put_contents("mrax.json",json_encode($sttings));
}
if($data == "DelCh1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :هل أنت متأكد من أنك تريد حذف القناة ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'لا', 'callback_data'=>'mrax'],['text'=>'نعم','callback_data'=>'OKDelCh1']],
]])
]);
}
if($data == "OKDelCh1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :تم حذف القناة الاولى من الإشتراك الإجباري",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
unset($sttings['ch1']);
file_put_contents("mrax.json",json_encode($sttings));
}
if($data == "AddCh2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :الآن قم بارسال معرف قناتك مع @",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['data'] = "okch244";
file_put_contents("mrax.json",json_encode($sttings));
}
if($text and $sttings['data'] == "okch244" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$em :تم اضافه القناة [$text]
$em :قم برفع البوت ادمن في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['ch2'] = "$text";
$sttings['data'] = "stop77";
file_put_contents("mrax.json",json_encode($sttings));
}
if($data == "DelCh2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :هل أنت متأكد من أنك تريد حذف القناة ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'تأكيد', 'callback_data'=>'mrax'],['text'=>'الغاء','callback_data'=>'OKDelCh2']],
]])
]);
}
if($data == "OKDelCh2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :تم حذف القناة الاولى من الإشتراك الإجباري",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
unset($sttings['ch2']);
file_put_contents("mrax.json",json_encode($sttings));
}
if($data == "ALLCH"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :هذه قائمة القنوات الأشتراك الاجباري 
$em :القناة الاولى ".$sttings['ch1']."
$em :القناة الثانية  ".$sttings['ch2'],
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
}
if($data == "SendQ1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :ارسل رسالتك وسيتم توجيهها لـ [ $SAll ] ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['data'] = "okoo";
file_put_contents("mrax.json",json_encode($sttings));
}
if($message and $sttings['data'] == "okoo" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$em :تم توجيه الرساله",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
for($i=0;$i<count($mrax2); $i++){
bot('forwardMessage', [
'chat_id'=>$mrax2[$i],
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
$sttings['data'] = "stop";
file_put_contents("mrax.json",json_encode($sttings));
}
}
if($data == "SendQ2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :ارسل رسالتك وسيتم توجيهها لـ [ $SAll ] ",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['data'] = "oksend";
file_put_contents("mrax.json",json_encode($sttings));
}
if($text and $sttings['data'] == "oksend" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$em :تم توجيه الرساله",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
for($i=0;$i<count($mrax2); $i++){
bot('sendMessage', [
'chat_id'=>$mrax2[$i],
'text'=>$text
]);
$sttings['data'] = "notsend";
file_put_contents("mrax.json",json_encode($sttings));
}
}
if($data == "mem"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :عدد مشتركين البوت  [ $SAll ]",
 'reply_markup'=>json_encode([ 
 'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
}
if($data == "ch1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :تم تفعيل الاشعارات",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['come'] = "welcome";
file_put_contents("mrax.json",json_encode($sttings));
}
if($text == "/start" and $sttings['come'] == "welcome" and $from_id != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"
$em :عضو جديد قام بالدخول الى البوت 
$em :الاسم : [$name](tg://user?id=$from_id) 
$em :المعرف : [@$username](tg://user?id=$from_id)  
$em :الايدي:  [$from_id](tg://user?id=$from_id)  
$em :عدد المشتركين : { $SAll }  ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($data == "ch2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :تم تعطيل الاشعارات ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['come'] = "nowelcome";
file_put_contents("mrax.json",json_encode($sttings));
}
if($data == "ON"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :تم تفعيل التوجيه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['message'] = "textwelcome";
file_put_contents("mrax.json",json_encode($sttings));
}
if($message and $sttings['message'] == "textwelcome" and $from_id != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
}
if($message and $sttings['message'] == "mrax" and $from_id == $admin){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,
]);
}
if($data == "Of"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :تم تعطيل التوجيه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"mrax"]],
]])
]);
$sttings['message'] = "nowellcome";
file_put_contents("mrax.json",json_encode($sttings));
}
$name = $message->from->first_name;
$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$txt = $message->caption;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$new = $message->new_chat_members;
$message_id = $message->message_id;
$type = $message->chat->type;
$name = $message->from->first_name;
if(isset($update->callback_query)){

$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$name = $up->from->first_name;
$message_id = $up->message->message_id;
$data = $up->data;
}
$admin = 5414131492;//ايدي
$Smsmi=json_decode(file_get_contents("MRX/Smsmi.json"),1);
if($text == "/start") {
	if($chat_id == $admin){
		bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"   
━━━━━━━━━━━━━━━━━━━━━━━
               『❤️‍🩹 ريهٱن ❤️‍🩹』            
━━━━━━━━━━━━━━━━━━━━━━━
#اكس شنو عمل فيك رمضان خبرني يلا 🥺😅
━━━━━━━━━━━━━━━━━━━━━━━
", 
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'parse_mode'=>"markdown",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[ 
[['text'=>"الرد علي الرساله : ". $Smsmi["rdd"]. "",'callback_data'=>"smsm|rdd"]], 
[['text'=>"السمسمي : ". $Smsmi["SmSm"]. "",'callback_data'=>"smsm|SmSm"]], 
    ] 
   ])
  ]);
		
	} 
	}  
	

$ex=explode("|", $data) ;
if($ex[0] == "smsm") {
		if($Smsmi["".$ex[1].""] == "✅") { 
                    $Smsmi["".$ex[1].""]= "❌";
file_put_contents("MRX/Smsmi.json",json_encode($Smsmi,32|128|265));
			} else {
					$Smsmi["".$ex[1].""]= "✅";
file_put_contents("MRX/Smsmi.json",json_encode($Smsmi,32|128|265));
				} 
	bot('editMessageReplyMarkup',[
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'inline_message_id' => $inline_message_id,
		'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الرد علي الرساله : ". $Smsmi["rdd"]. "",'callback_data'=>"smsm|rdd"]], 
[['text'=>"السمسمي : ". $Smsmi["SmSm"]. "",'callback_data'=>"smsm|SmSm"]], 

]])
	]);
}



if($text == "/start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• مرحبا بك ($name) 
━━━━━━━━━━━━━━━━━━━━━━━
              『❤️‍🩹 ريهٱن ❤️‍🩹』
━━━━━━━━━━━━━━━━━━━━━━━
#عزيز انا بوت سمسمي 🎭
#تم برمجتي بواسطة مستر اكس 💝
#يمكنك التحدث معي خاص او أضفني لمجموعتك لكي اتفاعل مع اعضائك ❤️‍🔥
",
"parse_mode"=>"Markdown",
"reply_to_message_id"=>$message->message_id,
]); return false ;
}

if ($text == "منو برمجك") {
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "مستر اكس",
        'reply_to_message_id' => $message_id
    ]);
}
if ($text == "منو مستر اكس") {
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "عيوني اكس ❤️‍🩹 اللهم اني صائمة 😅",
        'reply_to_message_id' => $message_id
    ]);
}
if ($text == "اكس") {
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "شبيكم كل شوي اكس صيبوه بحالو يااااه😅",
        'reply_to_message_id' => $message_id
    ]);
}
if ($text == "مستر اكس") {
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "حبيبي هذا 😅❤️‍🩹",
        'reply_to_message_id' => $message_id
    ]);
}
if ($text == "مستر") {
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "مابين اليوم يمكن عنده شغل 🥺",
        'reply_to_message_id' => $message_id
    ]);
}

 $goge = str_replace("انطق ","",$text);
 if($text == "انطق $goge"){
bot('sendaudio',[
'chat_id' => $chat_id,
'audio' => "https://texttospeech.apinepdev.workers.dev/?lang=hi&text=$goge",
 'caption'=>"⌯تم نطق كلمة $goge⌯",
'reply_to_message_id' =>$message->message_id,
]);}

$update = json_decode(file_get_contents('php://input'));
    $message = $update->message;
    $chat_id = $update->message->chat->id; 
    $text = $message->text;
$message_id = $update->message->message_id; 
$ALI = ["🖤","🌚","🌸","🫶","⚡","😉","🩷","🥹","😻","👍","😂","🌛","😜","🤎","🩶","💙","💗","🫂",
"💕", "❤", "🔥", "🥰", "👏", "😁", "😢", "🎉", "🤩", "🙏", "👌",
"🕊", "😍", "❤‍🔥", "🤣", "🌷", "💔", "🍓", "🍾",
"😊", "😍", "🥳", "😎", "🌈", "🌞", "🌟", "🎊", "🎈", "💖", "♥","🍂","🩵","💚"];
$T = $ALI[array_rand($ALI)];
bot('setmessagereaction',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'reaction'=>json_encode(array([
'type'=> "emoji",
"emoji"=>$T]))
]);
$mrax = file_get_contents("Https://viscovbt.alwaysdata.net/smsmiii/Api.php?a=".$text);
if($text){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$mrax",
]);
}

$ca = array("نيك امك هي لي بدك ياها 😡","يا وجه الكلب ياوجه الخصوة بعد مستر اكس احسنلك 🐶","ياكلب يبن امو نيك اللي ولدتك 😡","بدك ياني انطيك حظر ياقرد 😡","قرد زبالة نيك والديك","انقلع يازبالة","الله ينعلك يبن الشرموطة");
$car = array_rand($ca, 1);
$carlos = (strstr($text,"ريهانا اشتميه") == true);
if($carlos){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$ca[$car]",
'reply_to_message_id'=>$message_id,
]);
}
