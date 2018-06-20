<?php

/**
 * Class Routeur
 *class routeur
 * creer routes et trouver controller
 */
class Routeur
{
    private $request;
    private $routes = ["home" => "home", "contact"=> "contact"];

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function renderController()
    {
        $request = $this->request;

        if(key_exists($request->routes))
        {
            $controller = $this->routes[$request];
            include(CONTROLLER. $controller.'php');
        } else{
            echo '404';
        }
    }

}