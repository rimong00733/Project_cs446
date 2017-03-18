<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bananasoft";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
					//echo "Connected successfully<br>";
					//$conn->query("SET NAMES UTF8");
$conn->query("set character set utf8");
?>