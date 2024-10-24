<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['enviar'])) {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'Anónimo';

        $modulos = isset($_POST['modulos']) ? $_POST['modulos'] : [];

        echo "<h2>Información recibida</h2>";
        echo "<p><strong>Nombre del alumno:</strong> " . $nombre . "</p>";

        if (!empty($modulos)) {
            echo "<p><strong>Módulos seleccionados:</strong></p>";
            echo "<ul>";
            foreach ($modulos as $modulo) {
                echo "<li>" . $modulo . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p><strong>No seleccionaste ningún módulo</strong></p>";
        }
    }
}

if (isset($_SERVER['HTTP_REFERER'])) {
    echo "<p><strong>HTTP_REFERER:</strong> " . $_SERVER['HTTP_REFERER'] . "</p>";
} else {
    echo "<p><strong>No hay valor de HTTP_REFERER disponible.</strong></p>";
}
?>
