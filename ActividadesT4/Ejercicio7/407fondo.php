<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["colores"])) {
    $colorSeleccionado = $_POST["colores"];
    setcookie("colorFondo", $colorSeleccionado, time() + 86400, "/");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>407</title>
    <style>
        body {
            background-color: <?php echo isset($_COOKIE['colorFondo']) ? htmlspecialchars($_COOKIE['colorFondo']) : 'white'; ?>; /* Default background color */
        }
    </style>
</head>

<body>
    <h1><u>FORMULARIO</u></h1>
    <form action="407fondo1.php" method="POST">

        Colores:<select name="colores" id="color">
            <option value="yellow">yellow</option>
            <option value="red">red</option>
            <option value="blue">blue</option>
            <option value="orange">orange</option>
            <option value="pink">pink</option>
            <option value="purple">purple</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar" name="enviar" />
    </form>
</body>

</html>