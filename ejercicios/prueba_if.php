<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba if</title>
</head>
<body>
    <h1>Valoración notas</h1>
    <?php
    $nota1 = rand(0,10);
    $nota2 = rand(0,10);
    $nota3 = rand(0,10);
    $Notamayor;
    
    if ($nota1 > $nota2 && $nota1 > $nota3) {
        echo  $nota1." es la nota mayor que es la primera";
        $Notamayor = $nota1;
    } elseif ($nota2 > $nota1 && $nota2 > $nota3){
        echo $nota2." es la nota mayor que es la segunda";
        $Notamayor = $nota2;
    } else {
        echo $nota3." es la nota mayor que es la tercera";
        $Notamayor = $nota3;
    }

    ?>
</body>
</html>