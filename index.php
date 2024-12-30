<?php
session_start();

# controllo se l'utente è loggato
if($_SESSION["is_logged_in"] === true) $user_is_logged_in = true;
else $user_is_logged_in = false;

# includiamo moduli vari
include "./paths.php";
include UTILITIES . "/functions.php";
include "./routes.php";
include "./Router.php";

# recuperiamo il URI
$requestURI = $_SERVER["REQUEST_URI"];
$requestMethod = $_SERVER["REQUEST_METHOD"];

# istanziamo il router
$router = new Router($requestURI, $requestMethod, $routes, $user_is_logged_in);
$router->routeToRequestedURI();



