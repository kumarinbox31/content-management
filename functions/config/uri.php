<?php
class uri extends Ab_Controller{
    function segment($num){
        $segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
        return isset($segments[$num])?$segments[$num]:''; 
    }
}
