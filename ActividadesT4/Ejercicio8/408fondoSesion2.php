<?php
session_start();
//$fondo = isset($_SESSION["colorfondo"]) ? $_SESSION["colorfondo"] : 'white';
$fondo = $_SESSION["colorfondo"];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>408</title>
    <style> body{background-color: <?php echo $fondo; ?>;} </style>
</head>

<body>
    <h1>Sesion 2</h1>
    <a href="408fondoSesion1.php">Volver a la pagina inicial</a>
    <br><br>
    <a href="408fondoSesion1.php">Vaciar sesion y volver a la pagina inicial
        <?php
        session_unset();
        session_destroy();
        ?>
    </a>
</body>

</html>