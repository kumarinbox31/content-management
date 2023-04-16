<?php
function base_url($txt=''){
    global $config;
    $base_url = $config['base_url'];
    return $base_url.$txt;
}
?>