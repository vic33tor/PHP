<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <h2>Formulario</h2>
    <form action="formpost.php" method="post">
        Nombre:
        <input type="text" name="nombre" maxlength="50"><br><br>
        Educacion:
        <select name="educacion">
            <option value="sin-estudios">Sin estudios</option>
            <option value="educacion-obligatoria" selected="selected">Educación Obligatoria</option>
            <option value="formacion-profesional">Formación profesional</option>
            <option value="universidad">Universidad</option>
        </select> <br><br>
        Género:
        <input type="radio" name="genero" value="hombre">Hombre</input>
        <input type="radio" name="genero" value="mujer">Mujer</input>
        <input type="radio" name="genero" value="otro_genero">Otro</input><br><br>
        Nacionalidad:
        <input type="text" name="nacionalidad"><br><br>
        Idiomas:
        <input type="checkbox" name="idiomas[]" value="español" checked="checked">Español</input>
        <input type="checkbox" name="idiomas[]" value="inglés">Inglés</input>
        <input type="checkbox" name="idiomas[]" value="francés">Francés</input>
        <input type="checkbox" name="idiomas[]" value="aleman">Alemán</input>
        <input type="checkbox" name="idiomas[]" value="otro_idioma">Otro</input><br><br>
        Email:
        <input type="text" name="email"><br><br>
        Direccion:
        <input type="text" name="direccion"><br><br>
        // Botón de enviar
        <input type="submit" name="submit" value="Enviar">
    </form>
    </body>
</html>