<?php
include "./paths.php";
include UTILITIES . "/functions.php";
include "./routes.php";
include "./Router.php";

# recuperiamo il URI
$requestURI = $_SERVER["REQUEST_URI"];
$requestMethod = $_SERVER["REQUEST_METHOD"];

# istanziamo il router
$router = new Router($requestURI, $requestMethod, $routes);
$router->routeToRequestedURI();



