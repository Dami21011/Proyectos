<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <h1>Contador</h1>
    <?php
    $n1 = 10;
    $n2 = 20;
    $n3;
    function cuenta($n1,$n2,$n3){
        if($n3 == 0 || empty($n3)){
            $n3 = 1;
        }
        if($n1 < $n2){
            for ($i = $n1;$i <= $n2;$i+=$n3){
                if($i == $n2){
                    echo $i;
                } else {
                    echo $i.",";
                }
            }
        } else {
            for ($i = $n1; $i >= $n2; $i-=$n3) {
                if ($i == $n2) {
                    echo $i;
                } else {
                    echo $i . ",";
                }
            }
        }
    }

    cuenta($n1,$n2,$n3);

    ?>
</body>
</html>