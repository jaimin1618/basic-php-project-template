<?php 
require_once('credentials.php');

$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_errno) {
	$conn_status = "Connection failed";
	die('connection error');
} else {
	$conn_status = "Connected successfully";
}
// echo $conn_status . "<br>";

?>