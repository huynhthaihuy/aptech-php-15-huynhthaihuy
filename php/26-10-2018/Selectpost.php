<?php
if($_POST['email'] === 'kinsatthu123@yahoo.com' & $_POST['password'] === '123456'){
    include('connect.php');
    $sql = "SELECT id,name,email,password FROM users";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>PassWord</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["email"]."</td><td>".$row["password"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
}
else{
    header('Location: ./FormSelectPOST.php');
}
?>
