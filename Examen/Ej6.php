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
        $notas = array (10,9,8,9,6,5);
        $sumaNotas = 0;
        $media = 0;
        for ($i = 0; $i <= count($notas); $i++) {
            echo $notas[$i]." ";
            $sumaNotas+=$notas[$i];
        }
        $media = $sumaNotas/count($notas);
        echo "<br>La media de las notas es ".$media;
    ?>
</body>
</html>