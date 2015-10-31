<?php

$servername = "localhost";
$username = "root";
$password = "code4good";
$dbname = "code4good.db";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
	die("connection failed " . $conn->connect_error);
}


?>
