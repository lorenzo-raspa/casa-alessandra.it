<?php

class Router{

    # variabili di istanza
    public string $uri;
    public string $method;
    public array $routes;

    # costruttore
    function __construct(string $uri, string $method, array $routes)
    {
        $this->uri = $uri;
        $this->method = $method;
        $this->routes = $routes;
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