<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $archivo_origen = 'datos.txt';

        $archivo_copia = 'copia_datos.txt';

        if (file_exists($archivo_origen)) {
            $contenido = file_get_contents($archivo_origen);

            if (file_put_contents($archivo_copia, $contenido) !== false) {
                echo "Copia de seguridad creada correctamente en 'copia_datos.txt'.";
            } else {
                echo "Error al crear la copia de seguridad.";
            }
        } else {
            echo "El archivo 'datos.txt' no existe.";
        }
    ?>
</body>
</html>