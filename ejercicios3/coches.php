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
            array("matricula" => "111BCD", "marca" => "Ford", "modelo" => "Focus", "puertas" => 5),
            array("matricula" => "222EFG", "marca" => "Seat", "modelo" => "Panda", "puertas" => 2),
            array("matricula" => "333HIJ", "marca" => "Renault", "modelo" => "QP", "puertas" => 2),
            array("matricula" => "011KLM", "marca" => "Toyota", "modelo" => "Supra", "puertas" => 5)
        );

        usort($arrayCoches, function($a, $b) {
            return strcmp($a['matricula'], $b['matricula']);
        });

        foreach ($arrayCoches as $coche) {
            echo "Matrícula: {$coche['matricula']}, Marca: {$coche['marca']}, Modelo: {$coche['modelo']}, Puertas: {$coche['puertas']}<br>";
        }
    ?>
</body>
</html>
