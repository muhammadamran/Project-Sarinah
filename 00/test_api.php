<?php
// API
function get_content($URL)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $URL);
    curl_setopt($ch, CURLOPT_PORT, $_SERVER['SERVER_PORT']);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

var_dump($_SERVER['SERVER_PORT']);
exit;

// $content = get_content('http://117.54.102.106/tpbbackend/api/dataBC27.php');
$content = get_content('http://api2.itinventory-sarinah.com:8091/tpbbackend/api/dataBC27.php');
$data = json_decode($content, true);

var_dump($data);
exit;