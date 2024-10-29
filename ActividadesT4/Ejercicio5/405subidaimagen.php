<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_FILES['soloImg']) && $_FILES['soloImg']['error'] == 0) {
            $archivo = $_FILES['soloImg'];
            $anchura = isset($_POST['anchura']) ? $_POST['anchura'] . 'px' : 'auto';
            $altura = isset($_POST['altura']) ? $_POST['altura'] . 'px' : 'auto';

            $tipoArchivo = $archivo['type'];

            if ($tipoArchivo == 'image/jpeg' || $tipoArchivo == 'image/png') {
                echo "El archivo subido es una imagen.<br>";
                echo "<img src='data:image/jpeg;base64," . base64_encode(file_get_contents($archivo['tmp_name'])) . "' width='$anchura' height='$altura'>";
            } else {
                echo "<p style='color: red;'>Error: El archivo subido no es una imagen .</p>";
                include "405subida.html";
            }
        } else {
            echo "No se ha subido ningún archivo o hubo un error en la subida.";
        }
    }
?>