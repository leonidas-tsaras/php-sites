
<?php
$routes = [
    "/PM/site-php/" => "home.php",
    "/PM/site-php/about" => "about.php",
    "/PM/site-php/recipes" => "recipes.php",
    "/PM/site-php/desserts" => "desserts.php",
    "/PM/site-php/price-list" => "price-list.php",
    "/PM/site-php/contact" => "contact.php",
];

$uri = $_SERVER['REQUEST_URI'];

if(array_key_exists($uri, $routes)) {
    require_once($routes[$uri]);
} else {
    require_once("404.php");
}

