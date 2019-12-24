<?php

spl_autoload_register (function ($class){
     $class=strtolower($class);
     $path="includes/$class.php";
//     echo $path;
     if (file_exists($path)){
//        require_once ('$path');
         echo "ok";
     }else{
         die("there is no $class.php");
     }
});

function redirect($location){

    header("location: $location");
}


