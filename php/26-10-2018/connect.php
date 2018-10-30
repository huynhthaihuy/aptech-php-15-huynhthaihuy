<?php
$servername='localhost';
$user='root';
$password='';
$db = 'aptech_php_15_ss4';
// Create connection
$conn = mysqli_connect($servername, $user, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
} 
return $conn;
?>