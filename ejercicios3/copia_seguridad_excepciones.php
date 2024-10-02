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

        try {
                if (file_exists($archivo_origen)) {
                $contenido = file_get_contents($archivo_origen);
                $contenido_modificado = preg_replace($patron_email, $nuevo_email, $contenido);
                } 
                
                if (@file_put_contents($archivo_copia, $contenido_modificado) !== false) {
                    echo "Copia de seguridad creada correctamente en 'aa.txt'.";
                } else {
                    $e = "Archivo destino no encontrado asi que no se realizará la copia";
                    throw new Exception($e);
                }

            } catch (Exception $e) {
                echo "<b>Se ha producido un error:</b> " . $e->getMessage();
            }
    ?>
</body>
</html>