<?php
require_once './php/create_schema.php';
echo 'Hello World!!! I\'m Francisco A Domínguez Iceta';
$schema = $GLOBALS["schema"];

    if($schema) {
        echo "<br>tablas creadas";
    } else{
        echo "<br>tablas no creadas";
    }
?>