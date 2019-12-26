<?php
function __autoload($className){
    $filename = __DIR__ ."/classes/".".php";
    if (is_readable($filename)){
        require $filename;
    }
}

?>