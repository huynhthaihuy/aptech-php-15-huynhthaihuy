<?php
$servername='localhost';
$user='root';
$password='';
$db = 'aptech_php_15_ss4';
// Create connection
$conn = new mysqli($servername, $user, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
} 
echo "successfully";
?>