<?php

$uri =  $_SERVER['REQUEST_URI'];

$routes = [
    "/web2023/site/about" => "about.php",
    "/web2023/site/apartments" => "apartments.php",
    "/web2023/site/location" => "location.php",
    "/web2023/site/faq" => "faq.php",
    "/web2023/site/contact" => "contact.php",
    "/web2023/site/" => "home.php"
];

if(array_key_exists($uri, $routes)) {
    require_once($routes[$uri]);
} else {
    require_once("404.php");
}
