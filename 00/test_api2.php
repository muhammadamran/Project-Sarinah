<?php
$url = "http://api2.itinventory-sarinah.com:8091/tpbbackend/api/dataBC27.php";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_TIMEOUT, 400);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, True);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
$result = curl_exec($ch);
curl_close($ch);
echo $result;

$content = get_content($url);
$data = json_decode($content, true);

var_dump($data);
exit;