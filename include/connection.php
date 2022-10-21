<?php
// Server Prod
$dbhost = 'localhost';
$dbusername = 'inxmiles_tpb';
$dbpassword = 'Flatrone2241TPB';
$dbname = 'inxmiles_tpb';
$dbcon = new mysqli($dbhost, $dbusername, $dbpassword, $dbname) or die(mysqli_connect_errno());

// QUERY SETTING API
$dataAPI = $dbcon->query("SELECT * FROM api ORDER BY id ASC LIMIT 1");
$resultAPI = mysqli_fetch_array($dataAPI);
// QUERY SETTING APPLICATION
$dataHeadSettting = $dbcon->query("SELECT * FROM tbl_setting");
$resultHeadSetting = mysqli_fetch_array($dataHeadSettting);
// QUERY SETTING REAL TIME
$dataSetRealTime = $dbcon->query("SELECT * FROM tbl_realtime ORDER BY id DESC LIMIT 1");
$resultSetRealTime = mysqli_fetch_array($dataSetRealTime);
$SetTime = $resultSetRealTime['reload'];