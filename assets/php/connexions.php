<?php
function connexions() {

// connexions.php
$servername = "localhost";
$username = "root";
$password = ""; // Replace with the correct password
$dbname = "royalmedina"; // Make sure there's no semicolon at the end

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
return $conn;
}
?>