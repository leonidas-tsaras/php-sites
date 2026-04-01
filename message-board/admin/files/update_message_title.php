<?php

//data validation 
if(isset($_GET['id'])) $id = $_GET['id'];
else {
    header("Location: ../messages.php?m=error");
    exit();
}
if(isset($_GET['title'])) $title = $_GET['title'];
else {
    header("Location: ../messages.php?m=error");
    exit();
}

//connect to database (pdo driver)
include("connect.php");
if($conn) {
    $sql = "UPDATE `message` SET `title` = '$title' WHERE `message_id` = '$id'";
    $conn->exec($sql);

    //redirect 
    header("Location: ../messages.php");
    exit();
} else {
    header("Location: ../messages.php?m=error");
    exit();
}
