<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo Función</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <?php
    $n = "Damián";
    function saludo($n){
        echo "Hola, ".$n;
    }

    saludo($n);

    ?>
</body>
</html>