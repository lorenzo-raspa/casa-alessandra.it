<?php

# list of all routes

$routes = [
    [
        "route"=>"/",
        "controller" => "home-page.php",
        "method" => "get",
        "needs_logged_in" => false
    ],
    [
        "route"=>"/contacts",
        "controller" => "contacts.php",
        "method" => "get",
        "needs_logged_in" => false
    ],
    [
        "route"=>"/gallery",
        "controller" => "gallery.php",
        "method" => "get",
        "needs_logged_in" => false
    ],
    [
        "route"=>"/login",
        "controller" => "login.php",
        "method" => "get",
        "needs_logged_in" => false
    ],
    [
        "route"=>"/logout",
        "controller" => "logout.php",
        "method" => "post",
        "needs_logged_in" => true
    ],
    [
        "route"=>"/access",
        "controller" => "access.php",
        "method" => "post",
        "needs_logged_in" => false
    ],
    [
        "route"=>"/upload",
        "controller" => "upload.php",
        "method" => "get",
        "needs_logged_in" => true
    ],
    [
        "route"=>"/load-images",
        "controller" => "load-images.php",
        "method" => "post",
        "needs_logged_in" => true
    ],
    [
        "route"=>"/images-manager",
        "controller" => "images-manager.php",
        "method" => "get",
        "needs_logged_in" => true
    ],
    [
        "route"=>"/images-delete",
        "controller" => "images-delete.php",
        "method" => "get",
        "needs_logged_in" => true
    ],
];
