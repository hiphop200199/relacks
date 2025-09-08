<?php

use Util\Router;

//用類別的靜態方法時，他一樣會引用
/* spl_autoload_register(function($class){
    $class = strtolower(basename(str_replace('\\',DIRECTORY_SEPARATOR,$class)));
    $sources = ["model/$class.php","database/$class.php","util/$class.php"];
    foreach($sources as $source){
        if(file_exists($source)){
             require_once $source;
        }
    }
   
}); */

//Router::routeToController();

require_once $_SERVER['DOCUMENT_ROOT'] . '/page/index.php';