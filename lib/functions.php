<?php

/**
*Debugger une variable
*@para mixed $var la variable à afficher
*@para
**/


function debug($var, bool $die=true) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    if ($die) {
        die;
        
    }
}

function getHeader(string $title) {
    require_once 'layout/header.php';
}
function getFooter() {
    require_once 'layout/footer.php';
}
function getMenu() {
    require_once 'layout/menu.php';
}