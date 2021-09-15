<?php
global $connection;
$connection = mysqli_connect("data", "datauser", "password", "database");
if ($connection->connect_error) {
    die('connection failed: '.$connection->connect_error);
}

