<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sumaNotas = 0;
        $numeroNotas = $_GET["numeroNotas"];
        for ($i = 1; $i <= $numeroNotas; $i++) {
            $nota = $_GET["nota" . $i];
            $sumaNotas+=$nota;
        }
        echo "<br>La media de las notas es " . $sumaNotas/$numeroNotas;
    ?>
</body>
</html>