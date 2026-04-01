<?php

//data validation 

if(isset($_POST['username'])) $user = $_POST['username'];
if(isset($_POST['password'])) $pass = $_POST['password'];
if(isset($_POST['email'])) $email = $_POST['email'];
if(isset($_POST['avatar'])) $avatar = $_POST['avatar'];


//connect to database (pdo driver)
include("connect.php");
if($conn) {
    $sql = "INSERT INTO `user` (`username`, `email`, `password`, `avatar`) VALUES ( '$user', '$email', '$pass', '$avatar')";
    $conn->exec($sql);

    //redirect 
    header("Location: ../login.php?m=success");
    exit();
} else {
    header("Location: ../register.php?m=error");
    exit();
}
