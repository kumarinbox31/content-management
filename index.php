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
    
?>