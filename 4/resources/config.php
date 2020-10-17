<?php
// Ubah sesuai nama folder utama
define('BASE_URL', 'http://localhost/4');

// sesuaikan dengan server
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "music_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>