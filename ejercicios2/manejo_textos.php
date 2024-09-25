<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto</title>
</head>
<body>
    <h1>Manejando Textos</h1>
    <?php
    $radio = 12.5;
    define("PI",3.141596);
    $area = PI * pow($radio,2);

    $textoResultado = "El area calculada del circulo es ". number_format($area,2);
    $textoResultadoMayus = strtoupper($textoResultado);
    $textoResultadoModificado = str_replace("calculada","obtenida",$textoResultado);

    $numeros = "1,2,3,4,5";
    $numSinComas = explode(",",$numeros);
    $numConMas = implode("+",$numSinComas);

    echo "Texto normal: ".$textoResultado."<br>";
    echo "Texto mayus: ".$textoResultadoMayus."<br>";
    echo "Texto modificado: ".$textoResultadoModificado."<br>";
    echo "Longitud de la cadena anterior: ".strlen($textoResultadoModificado)."<br>";
    echo "Posición de la palabra circulo en la cadena anterior: ".strpos($textoResultadoModificado,"circulo")."<br>";
    echo $numConMas." = ".array_sum($numSinComas);
    ?>
</body>
</html>