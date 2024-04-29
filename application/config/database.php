<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");


// $db_host = 'localhost';
// $db_user = 'bbbme11_ccima';
// $db_pass = 'GBUD0G2j6N*7';
// $db_name = 'bbbme11_ccima';

// $db_name = 'bbbme11_ccima';

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'ccimax';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}

$collation = $conn->query("SET NAMES 'utf8'");

?>
