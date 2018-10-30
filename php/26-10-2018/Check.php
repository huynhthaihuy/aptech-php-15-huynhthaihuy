<?php
include("connect.php");
//lấy dữ liệu
    $email = $_POST['email'];
    $password= $_POST['password'];
    $sql="SELECT * FROM users Where email='$email' AND password='$password'";
//kiểm tra đăng nhập
    $result=mysqli_query($conn, $sql);
    $num_row=mysqli_num_rows($result);
    if($num_row>0){
        echo "Đăng Nhập Thành Công";
    }
    else{
        echo "Error";
    }
// var_dump($_POST);
?>