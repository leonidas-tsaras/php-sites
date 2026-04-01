<?php

//data validation 
if(isset($_GET['id'])) $id = $_GET['id'];
else {
    header("Location: ../messages.php?m=error");
    exit();
}
if(isset($_GET['st'])) $status = $_GET['st'];
else {
    header("Location: ../messages.php?m=error");
    exit();
}

//connect to database (pdo driver)
include("connect.php");
if($conn) {
    $sql = "UPDATE `message` SET `status` = '$status' WHERE `message_id` = '$id'";
    $conn->exec($sql);

    //redirect 
    header("Location: ../messages.php");
    exit();
} else {
    header("Location: ../messages.php?m=error");
    exit();
}
