<?php
$uri =  $_SERVER['REQUEST_URI'];

$base = "/AM/site-php";

$uri = rtrim($uri, '/');

$routes = [
    "$base" => "home.php",
    "$base/about" => "about-us.php",
    "$base/contact" => "contact.php",
    "$base/amenities" => "amenities.php",
    "$base/gallery" => "gallery.php"
];

if(array_key_exists($uri, $routes)) {
    include_once($routes[$uri]);
} else {
    include_once("404.php");
}


/* if($uri === "/IEKC1/site-php")
    include_once("home.php");
elseif($uri === "/IEKC1/site-php/about")
    include_once("about-us.php");
elseif($uri === "/IEKC1/site-php/contact")
    include_once("contact.php");
elseif($uri === "/IEKC1/site-php/amenities")
    include_once("amenities.php");
elseif($uri === "/IEKC1/site-php/gallery")
    include_once("gallery.php");
else
    include_once("404.php"); */
//http://localhost/IEKC1/site-php/contact
