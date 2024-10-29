<?php
session_start();
$nombre = $_SESSION['nombre'];
$email = $_SESSION['email'];
$url = $_SESSION['url'];
$sexo = $_SESSION['sexo'];
$_SESSION['convivientes'] =  $_POST['convi'];
$_SESSION['aficiones'] =  $_POST['aficiones'];
$_SESSION['menu'] =  $_POST['menu'];

echo "<style> li { list-style: none; } </style>";

echo "<table border='2'>";
        echo "<tr><th colspan = '2'>Información recibida</th></tr>";
        echo "<tr><td>Nombre de la persona:</td> <td>" . $nombre . "</td></tr>";
        echo "<tr><td>Email de la persona:</td> <td>" . $email . "</td></tr>";
        echo "<tr><td>URL de la persona:</td> <td>" .  $url . "</td></tr>";
        echo "<tr><td>Sexo de la persona:</td> <td>" .  $sexo . "</td></tr>";
        echo "<tr><td>Nº Convivientes de la persona:</td> <td>" . $_SESSION['convivientes'] . "</td></tr>";
    
        echo "<tr><td>Aficiones seleccionadas:</td><td>";
        echo "<ul>";
        foreach ($_SESSION['aficiones'] as $aficion) {
            echo "<li>" . $aficion . "</li>";
        }
        echo "</tr>";

        echo "<tr><td>Menú de la persona:</td> <td>" .  $_SESSION['menu'] . "</td></tr>";

echo "</table>";
?>
