<?php
$api_url = 'http://127.0.0.1/tpbbackend/api/dataBC23.php';
$content = file_get_contents($api_url);
$data = json_decode($content, true);

var_dump($data);
exit;

$response = $data['status'];
echo $response;
echo "<br>";

foreach ($data['result'] as $row) {
    echo $row['id'];
    echo "<br>";
}