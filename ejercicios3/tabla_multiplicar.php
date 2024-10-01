<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
</head>
<body>
    <?php 
        $tablas = array();

        for ($i = 0; $i <= 9; $i++) {
            for ($j = 0; $j <= 9; $j++) {
                $tablas[$i][$j] = $i * $j;
            }
        }

        for ($j = 0; $j <= 9; $j++) {
            echo "Tabla del $j <br>";
            for ($i = 0; $i <= 9; $i++) {
                echo $i . " x ". $j . " = " . $tablas[$i][$j]."<br>";
            }
            echo "<br>";
        }

    ?>
</body>
</html>
