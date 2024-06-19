<?php

//routing
$uri = $_SERVER['REQUEST_URI'];
$path = "/sites/bloom/";

if($uri == $path."categories") 
    include("categories.php");
else if($uri == $path."contact")
    include("contact.php");
else if($uri == $path."about")
    include("about.php");
else if($uri == $path."products")
    include("products.php");
else if($uri == $path)
    include("home.php");   
else {
    include("404.php");
}

