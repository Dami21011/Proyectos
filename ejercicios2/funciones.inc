<?php 

    function calculaDescuento($precio,$descuento = 0) {
        $precioFinal = $precio - ($precio * ($descuento/100));

        return $precioFinal;
    }

    function intercambia(&$n1, &$n2) {
        $temporal = $n1;
        $n1 = $n2;
        $n2 = $temporal;
    }

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

    function cuenta2($n1, $n2, &$n3) {
        if (!isset($n3)) {
            $n3 = 1;
        }

        if ($n3 <= 0) {
            echo "Número inválido para realizar la cuenta";
        } else {
            if ($n1 < $n2) {
                for ($i = $n1; $i <= $n2; $i += $n3) {
                    if ($i == $n2) {
                        echo $i;
                    } else {
                        echo $i . ",";
                    }
                }
            } else {
                for ($i = $n1; $i >= $n2; $i -= $n3) {
                    if ($i == $n2) {
                        echo $i;
                    } else {
                        echo $i . ",";
                    }
                }
            }
        }
    }

    function saludo($n){
        echo "Hola, ".$n;
    }

?>