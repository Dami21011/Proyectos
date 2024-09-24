<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo Función</title>
</head>
<body>
    <h1>Contador</h1>
    <?php
    $n1 = 20;
    $n2 = 10;
    function cuenta($n1,$n2){
        if($n1 < $n2){
            for ($i = $n1;$i <= $n2;$i++){
                if($i == $n2){
                    echo $i;
                } else {
                    echo $i.",";
                }
            }
        } else {
            for ($i = $n1; $i >= $n2; $i--) {
                if ($i == $n2) {
                    echo $i;
                } else {
                    echo $i . ",";
                }
            }
        }
    }

    cuenta($n1,$n2);

    ?>
</body>
</html>