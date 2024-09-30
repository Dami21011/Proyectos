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

        $fechaNac = '2003-06-21';
        $fechaActual = date('Y-m-d');

        echo "Fecha de nacimiento: " . date('d/m/Y', strtotime($fechaNac)) . "<br>";

        $partesFecha = explode('-', $fechaNac);
        echo "¿Fecha Válida? " . (checkdate($partesFecha[1], $partesFecha[2], $partesFecha[0]) ? "Sí" : "No") . "<br>";

        $segundos = strtotime($fechaActual) - strtotime($fechaNac);

        $años = floor($segundos / (365 * 24 * 60 * 60));
        $segundos_restantes = $segundos - ($años * 365 * 24 * 60 * 60);
        $meses = floor($segundos_restantes / (30 * 24 * 60 * 60));
        $segundos_restantes -= $meses * (30 * 24 * 60 * 60);
        $días = floor($segundos_restantes / (24 * 60 * 60));

        echo "Tienes " . $segundos . " segundos de vida, que equivalen a " . 
             $años . " años, " . $meses . " meses y " . $días . " días.";
    ?>
</body>
</html>
