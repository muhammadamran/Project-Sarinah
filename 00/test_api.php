<?php
$api_url = 'http://117.54.102.106/tpbbackend/api/dataBC23.php';
$content = file_get_contents($api_url);
$data = json_decode($content, true);

$response = $data['status'];
echo $response;
echo "<br>";

foreach ($data['result'] as $row) {
    echo $row['id'];
    echo "<br>";
}