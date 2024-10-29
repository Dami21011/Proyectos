<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["colores"])) {
    $colorSeleccionado = $_POST["colores"];
    $_SESSION["colorfondo"] = $colorSeleccionado;
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>408</title>
</head>

<body>
    <h1><u>FORMULARIO</u></h1>
    <form action="408fondoSesion1.php" method="POST">

        Colores:<select name="colores" id="color">
            <option value="yellow">yellow</option>
            <option value="red">red</option>
            <option value="blue">blue</option>
            <option value="orange">orange</option>
            <option value="pink">pink</option>
            <option value="purple">purple</option>
        </select>
        <br><br>
        <input type="submit" value="guardar" name="enviar" />
        <br><br>
        <a href="408fondoSesion2.php">Ir a sesion 2</a>
    </form>
</body>

</html>