<?php
$var1 = $_GET['id'];//get url data
?>
<?php
$url = "https://inventory.roblox.com/v1/users/$var1/items/Bundle/192";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers = array(
   "Accept: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$resp = curl_exec($curl);
curl_close($curl);
$word = "Korblox";
$mystring = $resp;
if(strpos($mystring, $word) !== false){
    echo "True";
} else{
    echo "False";//Check if korblox account is in return JSON text
}
?>
