<?php
function view($file,$data=[]){
    extract($data);
    include 'views/'.$file.'.php';
}