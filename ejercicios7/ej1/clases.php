<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
    <?php
    include_once "Persona.php";
    include_once "Estudiante.php";   
    ?>
</head>
<body>
    <h1><u>Personas</u></h1>
    <?php 
        $Persona1 = new Persona("26889321K","Damián Rodríguez López","damrodlop@alu.edu.gva.es");

        echo "<p><b><u>Persona</u></b></p>";
        $Persona1->__setNombre("Manuel Valero Gimeno");
        $Persona1->__setDNI("11223344L");
        $Persona1->__setEmail("manvalgim@alu.edu.gva.es");
        $Persona1->Mostrar();

        echo "<p><b><u>Estudiante</u></b></p>";
        $Estudiante1 = new Estudiante("26889321K","Damián Rodríguez López","damrodlop@alu.edu.gva.es","10622101");
        $Estudiante1->__setnumExpediente("10689101");
        $Estudiante1->Mostrar();
    ?>
</body>
</html>