<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Person details</title>
</head>
<body>
<?php
require_once 'person_details.php';
$person_details = $GLOBALS['person_details'];

$name = $_GET['name'];
$surname = $_GET['surname'];
if ($name && $surname){
    echo $person_details($name, $surname);
}
?>
</body>
</html>
