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
        for($i=0; $i <= count($this->routes); $i++){

            if($this->uri === $this->routes[$i]["route"]){

                // controlla se serve essere loggati per questa pagina
                if($this->routes[$i]["needs_logged_in"] == true && $this->is_logged_in == false){
                    require CONTROLLER . "/" . $this->goTo403AccessForbidden();
                    break;
                }

                // richiama la view se non serve essere loggati o se siamo già loggati
                require CONTROLLER . "/" . $this->routes[$i]["controller"];
                break;
                
            }

            # richiama pagina not found se $i == numero di routes
            # quindi il ciclo haiterato tutto l'array
            if($i == count($this->routes)) $this->goTo404PageNotFound();
            
            // if(array_key_exists($this->uri, $this->routes[$i])){
            //     require CONTROLLER . "/" . $this->routes[$i]["controller"];
            // }else{
            //     include CONTROLLER . "/page-not-found.php";
            // } 
        }
    }

    # pagina 404 - pagina non trovata
    function goTo404PageNotFound(){
        include CONTROLLER . "/404-page-not-found.php";
    }

    # pagina 403 - accesso negato
    function goTo403AccessForbidden(){
        include CONTROLLER . "/403-access-forbidden.php";
    }

    # show all routes
    function showAllRoutes(){
        foreach($this->routes as $key => $value){
            echo "<p>URI: $key - PATH: $value</p>";
        }
    }


} # end class Router