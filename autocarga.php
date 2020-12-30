<?php
    function auto_load($class){
        if (file_exists("controller/".$class.".php")) {
            require_once "controller/".$class.".php";
        }
    }

    spl_autoload_register('auto_load');
?>
