<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba if</title>
</head>
<body>
    <?php
    $nota1 = 6.5;
    $nota2 = 9;
    $nota3 = 8;
    
    if ($nota1 > $nota2 && $nota1 > $nota3) {
        echo "La nota 1 es mayor";
    } elseif ($nota2 > $nota1 && $nota2 > $nota3){
        echo "La nota 2 es mayor";
    } else {
        echo "La nota 3 es mayor";
    }

    ?>
</body>
</html>