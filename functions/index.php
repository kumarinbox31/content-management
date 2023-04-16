<?php
    $replace = 'functions/';
    $dirs = array_filter(glob('functions/'.'*'), 'is_dir');
    foreach($dirs as $dir){
        $files = glob($dir.'/'.'*');
        foreach($files as $file){
            require $file;
        }
    }
?>