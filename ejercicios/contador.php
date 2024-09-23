<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <h1>Bucles</h1>
    <?php
    for ($i = 0; $i <= 100; $i++){
        if($i < 100){
            echo $i.",";
        } else {
            echo $i;
        }
    }

    echo "<br>";

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