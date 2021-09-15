<?php

global $create_person,
       $create_address,
       $create_phone,
       $create_person_addresses,
       $get_person_addresses,
       $get_person_address,
       $get_person_phones,
       $get_person_phone,
       $get_person,
       $get_people;


$create_person = function ($name, $surname, $age)
{
    return "insert into people(name, surname, age) values ('$name', '$surname', '$age')";
};

$create_address = function ($address, $number)
{
    return "insert into addresses(address, number) values ('$address', $number)";
};

$create_phone = function ($name, $number, $person_name, $surname)
{
    return "insert into phones(
                   name, 
                   number, 
                   person_name, 
                   person_surname) 
                   values ('$name', '$number', '$person_name', '$surname')";
};

$create_addresses_people = function ($person_name, $person_surname, $address, $number, $name)
{
    return "insert into addresses_people(
                             person_name, 
                             person_surname, 
                             address_address, 
                             address_number, name) 
                             values ('$person_name', '$person_surname', '$address', $number, '$name')";
};

$get_person_addresses = function ($person_name, $person_surname)
{
    return "select ap.name, a.address, a.number from addresses as a
    left join addresses_people ap
        on a.address = ap.address_address and a.number = ap.address_number
    left join people p
        on p.name = ap.person_name and p.surname = ap.person_surname
where p.name = '$person_name'
  and p.surname = '$person_surname'";
};

$get_people = function ()
{
    return "select p.name, p.surname from people p;";
};

$get_person_phones = function ($name, $surname)
{
  return "select ph.name, ph.number, ph.person_name, ph.person_surname
from phones ph 
    inner join people p 
        on ph.person_name = p.name 
        and ph.person_surname = p.surname 
where p.name = '$name' and p.surname = '$surname'";
};

$get_person = function ($name, $surname)
{
    return "select * from people p where p.name = '$name' and p.surname = '$surname'";
};

$get_person_address = function ($name, $surname, $address, $number)
{
    return "select ap.name, a.address, a.number from addresses as a
    left join addresses_people ap
        on a.address = '$address'
        and a.number = $number
    left join people p
        on p.name = ap.person_name
        and p.surname = ap.person_surname
where p.name = '$name'
  and p.surname = '$surname';";
};

$get_person_phone = function ($phone_name, $phone_number)
{
    return "select ph.name, ph.number 
from phones ph
    inner join people p
        on ph.person_name = p.name
        and ph.person_surname = p.surname 
where ph.name = '$phone_name'
        and ph.number = '$phone_number'";
};