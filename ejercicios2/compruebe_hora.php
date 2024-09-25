<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas</title>
</head>
<body>
    <h1>Comprobando Horas</h1>
    <?php
        $hora = "21:10:32";

        if(!preg_match("/^([01]?[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]$/", $hora)){
            echo $hora." es una hora no válida";
        } else {
            echo $hora." es una hora válida";
        }
    ?>
</body>
</html>