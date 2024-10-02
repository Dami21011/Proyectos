<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copia de seguridad</title>
</head>
<body>
    <?php
        $archivo_origen = 'datos.txt';
        $archivo_copia = 'aa.txt';

        $nuevo_email = 'damianmola45327@gmail.com';

        $patron_email = '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/';

        if (@file_exists($archivo_origen) or die ("Archivo origen no encontrado")) {
            $contenido = file_get_contents($archivo_origen);

            $contenido_modificado = preg_replace($patron_email, $nuevo_email, $contenido);

            if (@file_put_contents($archivo_copia, $contenido_modificado) !== false or die ("Archivo destino no encontrado")) {
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