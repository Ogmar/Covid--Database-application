<?php
//server info
$server = "";
$username = "";
$password = "";
$database = "";

try{
  $conn = new PDO("mysql:host=$server;port=3306;dbname=$database", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
?>