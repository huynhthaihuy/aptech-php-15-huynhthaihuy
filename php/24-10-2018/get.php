<?php
echo "Đúng rồi get.php";
echo $_GET['email'];
if($_GET['email'] === 'kinsatthu123@yahoo.com' & $_GET['password'] === '123456'){
echo "Đúng rồi";
}
else{
    header('Location: ./FormGet.php');
}
?>
