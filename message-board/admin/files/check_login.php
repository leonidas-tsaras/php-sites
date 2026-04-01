<?php

if(isset($_POST['username'])) $user = $_POST['username'];
if(isset($_POST['password'])) $pass = $_POST['password'];

if($user != "admin") {
    header("Location: ../login.php?m=noadmin");
    exit();
}

//connect to database (pdo driver)
include("connect.php");
if($conn) {
    $sql = "SELECT * FROM `user` WHERE `username` = '$user' AND  `password` = '$pass'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();

    if(count($result) > 0) {
        session_start();
        $_SESSION['admin'] = session_id();
        $_SESSION['user_id'] = $result[0]['user_id'];
        header("Location: ../index.php?m=success");
        exit();
    } else {
        //redirect 
        header("Location: ../login.php?m=error");
        exit();
    }
} else {
    header("Location: ../login.php?m=error");
    exit();
}