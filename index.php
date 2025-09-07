<?php

use Util\Router;

spl_autoload_register(function($class){
    $class = strtolower(basename($class));
    $sources = ["model/$class.php","database/$class.php"];
    foreach($sources as $source){
        if(file_exists($source)){
             require_once $source;
        }
    }
   
});

Router::routeToController();