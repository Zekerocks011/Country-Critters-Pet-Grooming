<?php
$host = "127.0.0.1";
$userName = "CCCPG";
$password = "CCPG2016";
$dbName = "client_application";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>