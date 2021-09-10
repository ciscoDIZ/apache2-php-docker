<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php session_start() ?>
</head>
<body>
<form action="create_person.php" method="post">
    <fieldset>
        <legend>Datos personales</legend>
        <label for="name">
            nombre: <input
                type="text"
                id="name"
                name="name">
        </label>
        <label for="surname">
            apellidos: <input
                type="text"
                id="surname"
                name="surname">
        </label>
        <label for="age">
            edad: <input
                type="date"
                id="age"
                name="age">
        </label>
    </fieldset>
    <fieldset>
        <legend>Dirección</legend>
        <label for="address_name">
            Tipo: <input
                    type="text"
                    id="address_name"
                    name="address_name">
        </label>
        <label for="address">
            Dirección: <input
                    type="text"
                    id="address"
                    name="address">
        </label>
        <label for="number">
            number: <input
                    type="number"
                    id="number"
                    name="number">
        </label>
    </fieldset>
    <fieldset>
        <legend>Teléfono</legend>
        <label for="phone_name">
            Tipo: <input
                    type="text"
                    id="phone_name"
                    name="phone_name">
        </label>
        <label for="phone_number">
            number: <input
                    type="number"
                    id="phone_number"
                    name="phone_number">
        </label>
    </fieldset>
    <input type="submit">
</form>
</body>
</html>

