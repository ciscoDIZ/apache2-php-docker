<?php

echo 'Hello World!!! I\'m Francisco Domínguez Iceta';
if (mysqli_connect("devmysql", "datauser", "password", "database"))
    echo "<br>conecta!! a devmysql";
else
    echo "<br>no conecta :( jooooooooooooo";

echo "<br>$myvar"
?>