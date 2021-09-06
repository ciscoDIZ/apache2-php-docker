<?php
require_once './php/connection.php';
echo 'Hello World!!! I\'m Francisco Domínguez Iceta';
$connection = $GLOBALS["connection"];
if ($connection) {
    echo "<br>conecta!! a data";
    $query = "create table if not exists people(
                id int primary key auto_increment, 
                name varchar(100)
              );
              create table if not exists phones(
                  id int primary key auto_increment,
                  name varchar(100),
                  number varchar(30),
                  person_id int,
                  foreign key (person_id) references people (id)
              )";
    $schema = $connection->multi_query($query);
    if($schema) {
        echo "<br>tablas creadas";
    } else{
        echo "<br>tablas no creadas";
    }
    var_dump($schema);
}else {
    echo "<br>no conecta :( jooooooooooooo";
}
?>