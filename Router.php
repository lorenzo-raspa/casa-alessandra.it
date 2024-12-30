<?php

class Router{

    # variabili di istanza
    private string $uri;
    private string $method;
    private array $routes;
    private bool $is_logged_in;

    # costruttore
    function __construct(string $uri, string $method, array $routes, bool $user_is_logged_in)
    {
        $this->uri = $uri;
        $this->method = $method;
        $this->routes = $routes;
        $this->is_logged_in = $user_is_logged_in;
    }

    # funzione di routing
    function routeToRequestedURI(){
        if(array_key_exists($this->uri, $this->routes)){
            require CONTROLLER . "/" . $this->routes["$this->uri"];
        }else{
            include CONTROLLER . "/page-not-found.php";
        } 
    }

    # show all routes
    function showAllRoutes(){
        foreach($this->routes as $key => $value){
            echo "<p>URI: $key - PATH: $value</p>";
        }
    }


} # end class Router