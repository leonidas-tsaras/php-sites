<?php

//routing
$uri = $_SERVER['REQUEST_URI'];
$path = "/studio/";

if ($uri == $path . "portfolio")
  include("portfolio.php");
else if ($uri == $path . "contact")
  include("contact.php");
else if ($uri == $path . "about")
  include("about.php");
else if ($uri == $path)
  include("home.php");
else if ($uri == $path . "newsletter")
  include("newsletter.php");
else {
  include("404.php");
}
