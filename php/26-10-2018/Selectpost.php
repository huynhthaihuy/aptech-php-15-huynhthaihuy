<?php
if($_POST['email'] === 'kinsatthu123@yahoo.com' & $_POST['password'] === '123456'){
$servername='localhost';
$user='root';
$password='';
$db = 'aptech_php_15_ss3';
// Create connection
$conn = new mysqli($servername, $user, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
} 
$sql = "SELECT ID, Title, Category_id FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Title: " . $row["Title"]. " -categories_id " . $row["Category_id"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
}
else{
    header('Location: ./FormPOST.php');
}
?>
