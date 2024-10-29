<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>409</title>
</head>
<body>
    <h1><u>FORMULARIO</u></h1>
    <form action="409formulario2.php" method="POST">
        <p><label for="nombre">Nombre y apellidos:</label>
            <input type="text" name="nombre" id="nombre" value="" />
        </p>

        <p><label for="email">Email:</label>
            <input type="text" name="email" id="email" value="" />
        </p>

        <p><label for="url">URL(pagina personal):</label>
            <input type="text" name="url" id="url" value="" />
        </p>

        <fieldset>
            <legend>Sexo</legend>
            <label for="hombre">Hombre:
                <input type="radio" id="in" name="sexo" value="hombre">
            </label>
            <label for="mujer">Mujer:
                <input type="radio" id="nuevo" name="sexo" value="mujer">
            </label>
        </fieldset>
  
        <input type="submit" value="Enviar" name="enviar" />
    </form>
</body>
</html>