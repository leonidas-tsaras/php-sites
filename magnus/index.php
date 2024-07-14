<?php
$uri =  $_SERVER['REQUEST_URI'];

$uri = urldecode($uri);

if($uri === "/magnus/") 
    include_once("home.php"); 
else if($uri === "/magnus/επικοινωνια") 
    include_once("contact.php"); 
else if($uri === "/magnus/τιμες") 
    include_once("prices.php");  
else if($uri === "/magnus/δειπνο")
    include_once("dinner.php");  
else if($uri === "/magnus/δωματια")
    include_once("rooms.php");  
else if($uri === "/magnus/κρατησεις")
    include_once("reservation.php");  
else
    include_once("404.php");
?>