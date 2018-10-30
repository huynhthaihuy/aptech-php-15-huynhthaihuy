<?php
// $servername='localhost';
// $user='root';
// $password='';
// $db = 'aptech_php_15_ss3';
// // Create connection
// $conn = new mysqli($servername, $user, $password,$db);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . mysqli_connect_error());
// } 
// $sql = "SELECT ID, Title, Category_id FROM posts";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["ID"]. " - Title: " . $row["Title"]. " -categories_id " . $row["Category_id"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }
// $conn->close();
//Tạo Database:
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE aptech_php_15_ss4";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>