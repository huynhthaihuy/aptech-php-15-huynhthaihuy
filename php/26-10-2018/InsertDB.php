<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_15_ss4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (name, email, password)
VALUES ('John', 'john@example.com', '123'),
('Huy','ch4ut1nhtr1@gmail.com','123'),
('Khai','boss@gmail.com','123'),
('Lam','lol@gmail.com','1234'),
('Dat','dhdh@gmail.com','lol')
";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>