<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garaje de coches</title>
</head>
<body>
    <h1>Coches</h1>
    <?php 
        $arrayCoches = array(
            "111BCD" => array("Ford", "Focus", 5),
            "222EFG" => array("Seat", "Panda", 2),
            "333HIJ" => array("Renault", "QP", 2),
            "444KLM" => array("Toyota", "Supra", 5)
        );

        ksort($arrayCoches);

        foreach ($arrayCoches as $matricula => $coche) {
            echo "Matrícula: $matricula, Marca: {$coche[0]}, Modelo: {$coche[1]}, Puertas: {$coche[2]}<br>";
        }
    ?>
</body>
</html>
