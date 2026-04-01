<?php

//data validation 

if(isset($_POST['userid'])) $userid = $_POST['userid'];
if(isset($_POST['title'])) $title = $_POST['title'];
if(isset($_POST['text'])) $text = $_POST['text'];


//connect to database (pdo driver)
include("connect.php");
if($conn) {
    $sql = "INSERT INTO `message` (`user_id`, `title`, `text`) VALUES ( '$userid', '$title', '$text')";
    $conn->exec($sql);

    //redirect 
    header("Location: ../messages.php");
    exit();
} else {
    header("Location: ../new-message.php?m=error");
    exit();
}
