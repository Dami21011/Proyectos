<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['enviar'])) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'Anónimo';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $url = isset($_POST['url']) ? $_POST['url'] : 'No hay url introducida';
            $patronEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    
            $aficiones = isset($_POST['aficiones']) ? $_POST['aficiones'] : [];
            echo "<table border='2'>";
            echo "<tr><th colspan = '2'>Información recibida</th></tr>";
            echo "<tr><td>Nombre de la persona:</td> <td>" . $nombre . "</td></tr>";
            if(!empty($email) && preg_match($patronEmail,$email)){
                echo "<tr><td>Email de la persona:</td> <td>" . $email . "</td></tr>";
            } else {
                echo "<tr><td colspan='2'>Email invalido</td></tr>";
            }
            
            echo "<tr><td>URL de la persona:</td> <td>" . $url . "</td></tr>";
    
            if (!empty($aficiones)) {
                echo "<tr><td>Aficiones seleccionadas:</td><td>";
                echo "<ul>";
                foreach ($aficiones as $aficion) {
                    echo "<li>" . $aficion . "</li>";
                }
                echo "</ul>";
                echo "</tr>";
            } else {
                echo "<tr><td colspan='2'>No seleccionaste ninguna afición</td></tr>";
            }
            echo "</table>";
        }
    }
?>