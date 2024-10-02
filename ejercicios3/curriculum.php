<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
</head>
<body>
    <h1>Mi Curriculum</h1>
<?php 
        $estudios_es = "Estudios cursados: GM SMR / GS DAW";
        $idiomas_es = "Idiomas que hablo: Español / Inglés / Valenciano";
        $estudios_en = "Studies completed: GM SMR / GS DAW";
        $idiomas_en = "Languages I speak: Spanish / English / Valencian";
        
        $idioma = $_GET["idioma"];
        $estudios_var = "estudios_" . $idioma;
        $idiomas_var = "idiomas_" . $idioma;
        
        echo @("<p>${$estudios_var}</p>");
        echo @("<p>${$idiomas_var}</p>");
    ?>
</body>
</html>
