<?php
require_once 'connection.php';
global $create_person, $create_address, $create_phone, $create_person_addresses;

$create_person = function ($name, $surname, $age) {
    return "insert into people(name, surname, age) values ('$name', '$surname', '$age')";
};

$create_address = function ($address, $number) {
    return "insert into addresses(address, number) values ('$address', $number)";
};

$create_phone = function ($name, $number, $person_name, $surname) {
    return "insert into phones(
                   name, 
                   number, 
                   person_name, 
                   person_surname) 
                   values ('$name', '$number', '$person_name', '$surname')";
};

$create_addresses_people = function ($person_name, $person_surname, $address, $number, $name){
    return "insert into addresses_people(
                             person_name, 
                             person_surname, 
                             address_address, 
                             address_number, name) 
                             values ('$person_name', '$person_surname', '$address', $number, '$name')";
};
