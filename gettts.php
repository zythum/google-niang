<?
//get_file_contents("http://translate.google.com/translate_tts?ie=UTF-8&tl=zh-CN&q".$_GET['q']);
header("Content-Type:audio/mpeg");
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, 'http://translate.google.com/translate_tts?ie=UTF-8&tl=zh-CN&q='.$_GET['q']); 
curl_setopt($curl, CURLOPT_HEADER,0);
curl_exec($curl); 
curl_close($curl); 
?>