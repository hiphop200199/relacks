<?php

namespace Util;



class Router{
    public static function routeToController()
    {
        $url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $path = parse_url($url,PHP_URL_PATH);
        $routes = require_once 'route.php';
        foreach($routes as $route){
            if($route['path']==$path){
                require_once $_SERVER['DOCUMENT_ROOT'] . '/controller' . '/' . $route['controller'] . '.php';
            }
        }
    }
}