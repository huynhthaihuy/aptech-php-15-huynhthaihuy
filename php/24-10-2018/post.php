<?php
echo "Đúng rồi post.php";
if($_POST['email'] === 'kinsatthu123@yahoo.com' & $_POST['password'] === '123456'){
echo "Đúng rồi";
}
else{
    header('Location: ./FormPOST.php');
}
?>
