<?php
require_once 'queries.php';
require 'connection.php';
global $get_people_list;
$connection = $GLOBALS['connection'];
$get_people = $GLOBALS['get_people'];

$get_people_list = function () use ($connection, $get_people) {

    $list = null;
    if ($query_result = mysqli_query($connection, $get_people())) {
        if (mysqli_num_rows($query_result) > 0) {
            $list = "<ul>";
            while ($row = mysqli_fetch_array($query_result)) {
                $list .= "<li><a href='php/person_details_view.php?name=".$row['name']."&surname=".$row['surname']
                    ."'>" . $row['name'] . " " . $row['surname'] . "</a></li>";
            }
            $list .= "</ul>";
        }
        require 'close_connection.php';
        return $list;
    }else {
        require 'close_connection.php';
        return mysqli_error($connection);
    }

};
