<?php
require 'connection.php';
require_once 'queries.php';
global $phone_details;

$phone_details = function ($phone_name, $phone_number)
{
    $phone_details_result = "<div>";
    $connection = $GLOBALS['connection'];
    $get_person_phone = $GLOBALS['get_person_phone'];

    if ($mysqli_result = mysqli_query($connection,$get_person_phone($phone_name,$phone_number))){
        if ($row = mysqli_fetch_array($mysqli_result)) {
            $phone_details_result .= "<h2>".$row['name']."</h2><div>Número: ".$row['number']."</div>";
        }else {
            $phone_details_result .= "error";
        }

    } else {

        $phone_details_result .= "error";
    }
    $phone_details_result .= "</div>";
    return $phone_details_result;
};
