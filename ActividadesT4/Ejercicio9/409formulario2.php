<?php
session_start();
$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['url'] = $_POST['url'];
$_SESSION['sexo'] = $_POST['sexo'];
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>409</title>
    </head>
    <body>
        <h1>2º Parte Formulario</h1>
        <form action="409formulario3.php" method="POST">
        <p><label for="convi">Cantidad de convivientes:</label>
            <input type="text" name="convi" id="convi" value="" />
        </p>

        <h2>Aficiones</h2>
        <p><input type="checkbox" name="aficiones[]" id="futbol" value="futbol" />
            <label for="futbol">Futbol</label>
        </p>
    
        <p><input type="checkbox" name="aficiones[]" id="musica" value="musica" />
            <label for="musica">Musica</label>
        </p>

        <p><input type="checkbox" name="aficiones[]" id="baloncesto" value="baloncesto" />
            <label for="baloncesto">Baloncesto</label>
        </p>

        <p><input type="checkbox" name="aficiones[]" id="tenis" value="tenis" />
            <label for="tenis">Tenis</label>
        </p>

        <p><label for="menu">Menú:</label>
            <input type="text" name="menu" id="menu" value="" />
        </p>
        <input type="submit" value="Enviar" name="enviar" />
        </form>
    </body>
<html>