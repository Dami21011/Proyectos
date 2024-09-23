<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <h1>Bucles for y while</h1>
    <p> <b> Este contador va del 1 al 100: </b></p>
    <?php
    for ($i = 0; $i <= 100; $i++){
        if($i < 100){
            echo $i.",";
        } else {
            echo $i;
        }
    }
    ?>

    <p><b>Este contador va del 10 al 0: </b></p>

    <?php

    $i = 10;
    while($i >= 0){
        if ( $i > 0 ){
            echo $i."-";
        } else {
            echo $i;
        }
        $i--;
    }

    ?>
</body>
</html>