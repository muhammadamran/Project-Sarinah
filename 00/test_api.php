<?php
// API
function get_content($URL)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $URL);
    // curl_setopt($ch, CURLOPT_PORT, 8091);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

$content = get_content('http://117.54.102.106/tpbbackend/api/dataBC27.php');
$data = json_decode($content, true);

var_dump($data);
exit;