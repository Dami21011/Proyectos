<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas</title>
</head>
<body>
    <h1>Manejando Fechas</h1>
    <?php
        date_default_timezone_set('Europe/Madrid');
        echo "Fecha actual: ".date("d M Y - H:i:s");
    ?>
</body>
</html>