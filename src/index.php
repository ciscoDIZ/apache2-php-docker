<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
    <?php
    session_start();
    require_once './php/create_schema.php';
    require_once './php/get_people.php';
    $schema = $GLOBALS["schema"];
    if(!$schema)
    {
        header('Location: ./html/error.html');
    }
    ?>
</head>
<body>
    <h2>Agenda</h2>
    <a href="php/create_person_form.php">create person</a>
    <?php
        $get_people_list = $GLOBALS['get_people_list'];
        echo $get_people_list();
    ?>

</body>
</html>
