<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['enviar'])) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'Anónimo';
            $email = isset($_POST['email']) ? $_POST['email'] : 'No hay email introducido';
            $url = isset($_POST['url']) ? $_POST['url'] : 'No hay url introducida';
            $anchura = isset($_POST['anchura']) ? $_POST['anchura'] . 'px' : 'auto';
            $altura = isset($_POST['altura']) ? $_POST['altura'] . 'px' : 'auto';

            echo '<html><body style="width:'.$anchura.'; height:'.$altura.' ;">';
    
            $aficiones = isset($_POST['aficiones']) ? $_POST['aficiones'] : [];
            echo "<table border='2'>";
            echo "<tr><th colspan = '2'>Información recibida</th></tr>";
            echo "<tr><td>Nombre de la persona:</td> <td>" . $nombre . "</td></tr>";
            echo "<tr><td>Email de la persona:</td> <td>" . $email . "</td></tr>";
            echo "<tr><td>URL de la persona:</td> <td>" . $url . "</td></tr>";
    
            if (!empty($aficiones)) {
                echo "<tr><td>Aficiones seleccionadas:</td><td>";
                echo "<ul>";
                foreach ($aficiones as $aficion) {
                    echo "<li>" . $aficion . "</li>";
                }
                echo "</tr>";
            } else {
                echo "<tr><td colspan='2'>No seleccionaste ninguna afición</td></tr>";
            }
            if (isset($_FILES['archivo'])) {
                $nombre_archivo = htmlspecialchars(basename($_FILES['archivo']['name']));
                $tipo_archivo = $_FILES['archivo']['type'];
    
                echo "<tr><td colspan='2'>El archivo <strong>$nombre_archivo</strong> ha sido recibido correctamente.</td></tr>";
                echo "<tr><td>Tipo de archivo:</td><td>" . htmlspecialchars($tipo_archivo) . "</td></tr>";
            } else {
                echo "<tr><td colspan='2'>No se recibió ningún archivo o hubo un error al subirlo.</td></tr>";
            }

            echo "</body></html>";
            echo "</table>";
        }
    }
?>