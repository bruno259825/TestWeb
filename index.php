<?php

require_once 'autocarga.php';
    require_once 'librerias/vendor/autoload.php';
    
    
    if(isset($_GET["con"]) && class_exists($_GET["con"]."Controller")){
        
        $nameController=$_GET["con"]."Controller";
        $controlador=new $nameController();
        
        if(isset($_GET["act"]) && method_exists($controlador, $_GET["act"])){
            $metodo=$_GET["act"];
            $controlador->$metodo();
            
        }else{
            echo "No se encuentra la página2"; 
        }
    }else{
       echo "No se encuentra la página1"; 
    }
    
?>
