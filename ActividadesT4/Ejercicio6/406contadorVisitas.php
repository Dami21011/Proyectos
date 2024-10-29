<?php
    //$visitas = 0;
    if (!isset($_COOKIE['visitas'])) {
        $visitas = 1;
        setcookie('visitas', $visitas, time() + 3600);
    } else {
        $visitas = $_COOKIE['visitas'];
        if (isset($_POST['reiniciar'])) {
            $visitas = 0;
            //setcookie('visitas', $visitas, time() + 3600);
            echo "El contador de visitas se ha reiniciado.<br>";
        } 
        $visitas++;
        setcookie('visitas', $visitas, time() + 3600);
    }
    echo "Bienvenido a nuestra página web. Has visitado esta página $visitas veces .";

?>