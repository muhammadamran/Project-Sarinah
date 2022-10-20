<?php
$url = "http://api2.itinventory-sarinah.com:8091/";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_TIMEOUT, 400);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, True);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
$report = curl_getinfo($ch);
print_r($report);
$result = curl_exec($ch);
curl_close($ch);
echo $result;