<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descuentos en productos</title>
</head>
<body>
    <h1>Productos</h1>
    <?php

    include "funciones.inc";

    echo "El precio con el descuento es de: ".calculaDescuento(120,10);
    ?>
</body>
</html>
