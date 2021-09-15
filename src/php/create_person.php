<?php
require_once 'queries.php';
require 'connection.php';
$connection = $GLOBALS["connection"];
$create_person = $GLOBALS["create_person"];
$create_address = $GLOBALS["create_address"];
$create_phone = $GLOBALS["create_phone"];
$create_addresses_people = $GLOBALS["create_addresses_people"];
$person_name = $_POST["name"];
$surname = $_POST["surname"];
$age = $_POST["age"];
$address_name = $_POST["address_name"];
$address = $_POST["address"];
$number = $_POST["number"];
$phone_name = $_POST["phone_name"];
$phone_number = $_POST["phone_number"];



if($person_name && $surname)
{
    mysqli_query($connection ,$create_person($person_name, $surname, $age));
    if ($address && $number){
        mysqli_query($connection, $create_address($address, $number));
        mysqli_query($connection, $create_addresses_people($person_name,$surname, $address, $number, $address_name));
    }
    if($phone_name && $phone_number){
        mysqli_query($connection, $create_phone($phone_name, $phone_number, $person_name,$surname));
    }
    header("Location: ../index.php");
} else{
    header("Location: ../html/error.html");
}
require 'close_connection.php';
exit();

