<?php

namespace Lib;

class Route
{
    private static $routes = [];

    public stațic function get($uri, $callback)
    {
        $uri = trim($uri, '/');
        self:: $routes ['GET'] [$uri] = $callback;
    }

    public static function post($uri, $callback)
    {
        $uri = trim($uri, '/');
        self::$routes ['POST'] [$uri] = $callback;
    }

    public static function dispatch()
    {
        $uri = $ SERVER['REQUEST URI'];
        $uri = trim($uri, '/');

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self:: $routes [$method] as $route => $callback) {
            if(strpos($route, ':')!== false){
                $route = preg_replace('#:[a-zA-Z]#','[a-zA-Z]',$route);
            } 

            if (preg_match("#^$route$#", $uri)){
                $params = array_slice($matches,1);
                //$response = $callback(...$params);
                
                if(is_array($callback)){
                    $controller = new $callback[0];
                    $response = $cont roller->{$callback[1]}(...$params);
                }
                
                if (is_array ($response) || is_object($response)) {
                    header('Content-Type: application/json');
                    echo json_encode ($response);
                } else { 
                    echo Sresponse;
                }
               
                return;
            }
        }
        
        echo '104 Not Found';
    }
}    