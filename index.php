<?php
    require_once 'config.php';
    define('AB_DEBUG','development');
    switch(AB_DEBUG){
        case 'production':
        break;
        case 'testing':
            error_reporting(E_ALL);
            ini_set('display_errors',1);
        break;
        case 'development':
            error_reporting(E_ALL);
            ini_set('display_errors',-1);
        break;
    }
    class Ab_Controller{
        function __construct(){
            // global $config;
        }
        function index(){
            global $config;
            $uri = new uri;
            $controller = $uri->segment(1) != '' ? $uri->segment(1) : $config['default_controller'];
            $function = $uri->segment(2) != '' ? $uri->segment(2) : $config['default_function'];
            $file = 'controllers/'.$controller.'.php';
            if(file_exists($file)){
                include $file;
                $c = new $controller;
                $c->$function();
            }else{
                echo 'controller not found.';
            }
            
        }
    }
    
    $ab = new Ab_Controller();
    $ab->index();
?>