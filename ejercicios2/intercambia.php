<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intercambiar valores</title>
</head>
<body>
    <h1>Intercambio</h1>
    <?php
    $n1 = 10;
    $n2 = 20;

    function intercambia(&$n1, &$n2) {
        $temporal = $n1;
        $n1 = $n2;
        $n2 = $temporal;
    }

    intercambia($n1, $n2);
    echo "N1 valia 10 y ahora ".$n1."<br> N2 valia 20 y ahora ".$n2;
    ?>
</body>
</html>
