<?php
require_once "connection.php";
$connection = $GLOBALS['connection'];
$query = "  create table if not exists people( 
                name varchar(100),
                surname varchar(200),
                age date,
                constraint people_pk primary key (name, surname)
              );

            create table if not exists phones(
                name varchar(100),
                number varchar(30),
                person_name varchar(100),
                person_surname varchar(200),
                constraint phones_pk primary key (name, number),
                constraint people_phone_pk 
                    foreign key (person_name, person_surname) 
                        references people (name, surname) 
                        on update cascade 
                        on delete cascade 
            );

            create table if not exists addresses(
                address varchar(255),
                number int,
                constraint addresses_pk primary key (address, number)     
            );

            create table if not exists addresses_people (
                person_name varchar(100),
                person_surname varchar(200),
                address_address varchar(255),
                address_number int,
                name varchar(255),
                constraint addresses_people_pk 
                    primary key (person_name, address_address,  address_number),
                constraint addresses_people_people_fk 
                    foreign key (person_name, person_surname) 
                        references people (name, surname) 
                        on update cascade 
                        on delete cascade,
                constraint addresses_people_addresses_fk 
                    foreign key (address_address, address_number)
                        references addresses (address, number) 
                        on update cascade 
                        on delete cascade
            )";
global $schema;
$schema = mysqli_multi_query($connection, $query);
require 'close_connection.php';