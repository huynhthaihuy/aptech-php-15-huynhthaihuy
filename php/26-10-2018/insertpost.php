<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_15_ss4";

// Kết nối database tintuc
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$name = "";
$email = "";
$password="";

//Lấy giá trị POST từ form vừa submit
    if(isset($_POST["name"])) { $name = $_POST['name']; }
    if(isset($_POST["email"])) { $email = $_POST['email']; }
    if(isset($_POST["password"])) { $password = $_POST['password']; }

    $sql = "INSERT INTO users (name, email, password)
    VALUES ('$name', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
    echo "Thêm thành công";
    } else {
    echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }   

// Ngắt kết nối
mysqli_close($conn);
?>