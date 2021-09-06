<?php
require_once "connection.php";
$connection = $GLOBALS['connection'];
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
global $schema;
$schema = $connection->multi_query($query);