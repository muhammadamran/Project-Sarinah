<?php
// API
function get_content($URL)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $URL);
    curl_setopt($ch, CURLOPT_PORT, 8091);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
// API - 
$content = get_content('http://182.23.104.212/tpbbackend/api/dataBC23.php');
$data = json_decode($content, true);

var_dump($$data['status']);
exit;