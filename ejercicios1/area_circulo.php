<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <h1>Página de prueba en PHP</h1>
        <?php
            define('PI',3.1416);
            $radio = 3.5;
            $area = PI * pow($radio,2)
        ?>
        <p>El área del circulo es <?php echo $area; ?> </p>
</body>
</html>