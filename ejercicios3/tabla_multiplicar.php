<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
</head>
<body>
    <h1>Tablas</h1>
    <?php 
        $arrayNum = [
            [0,1,2,3,4,5,6,7,8,9,10], 
            [0,1,2,3,4,5,6,7,8,9,10], 
        ];

        for ($i = 0; $i < count($arrayNum[0]); $i++) {
            echo "Tabla del ".$arrayNum[0][$i].":<br>";
            
            for ($j = 0; $j < count($arrayNum[1]); $j++) {
                echo $arrayNum[0][$i]." x ".$arrayNum[1][$j]." = ".($arrayNum[0][$i] * $arrayNum[1][$j])."<br>";
            }

            echo "<br>";
        }
    ?>
</body>
</html>
