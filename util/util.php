<?php
namespace Util;


class Util
{
   
    //將資料傳入畫面
    public static function view(string $path,array $data = [])
    {
        if(!empty($data)){
             extract($data);
        }
       
        require_once $_SERVER['DOCUMENT_ROOT'] . '/page' . '/' . $path . '.php';
    }

    
}
