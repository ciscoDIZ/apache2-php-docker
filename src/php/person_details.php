<?php
require 'connection.php';
require_once 'queries.php';
global $person_details;
$person_details = function ($name, $surname) {
    $person_details_result = "<div>";
    $connection = $GLOBALS['connection'];
    $get_person = $GLOBALS['get_person'];
    $get_person_addresses = $GLOBALS['get_person_addresses'];
    $get_person_phones = $GLOBALS['get_person_phones'];

    if ($result = mysqli_query($connection, $get_person($name, $surname))) {
        if ($row = mysqli_fetch_array($result)) {
            $person_details_result .= "<div><h2>" . $row['name'] . " " . $row['surname'] . "</h2></div>";
        }
        if ($result = mysqli_query($connection, $get_person_phones($name, $surname))) {
            $person_details_result .= "<div><h4>Teléfonos</h4><ul>";
            while ($row = mysqli_fetch_array($result)) {
                $person_details_result .= "<li><a href='./phone_details_view.php?person-name=".$row['person_name'].
                    "&person-surname=".$row['person_surname']."&phone-name=".$row['name'].
                    "&phone-number=".$row['number']."'>".
                    $row['number']."</a></li>";
            }
            $person_details_result .= "</ul></div>";
        }
        if ($result = mysqli_query($connection, $get_person_addresses($name, $surname))) {
            $person_details_result .= "<div><h4>Direcciones</h4><ul>";
            while ($row = mysqli_fetch_array($result)) {
                $person_details_result .= "<li><a href='#'>" . $row["address"] . ", " . $row["number"] . "</a></li>";
            }
            $person_details_result .= "</ul></div>";
        }
    }
    $person_details_result .= "</div>";
    require 'close_connection.php';
    return $person_details_result;
};
