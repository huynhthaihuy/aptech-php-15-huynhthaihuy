<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_15_ss4";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE users (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(50),
email VARCHAR(50) unique,
password varchar(50)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>