<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles Teléfono</title>
    <?php
        require 'phone_details.php';
        $phone_details = $GLOBALS['phone_details'];
    ?>
</head>
<body>
<?php
var_dump($_GET);
    if (
        $person_name = $_GET['person-name'] &&
        $person_surname = $_GET['person-surname'] &&
        $phone_name = $_GET['phone-name'] &&
        $phone_number = $_GET['phone-number']
    ) {
       echo $phone_details($person_name, $person_surname, $phone_name, $phone_number);
    }
?>
</body>
</html>
