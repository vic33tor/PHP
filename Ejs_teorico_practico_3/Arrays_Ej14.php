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
        if(isset($_POST['lista'])){
        $sumaNotas = 0;
        $media = 0;
        $contador=0;
        foreach($_POST['lista'] as $nota) {
            echo $nota." ";
            $sumaNotas+=$nota;
            $contador++;
        }
        $media = $sumaNotas/$contador;
        echo "<br>La media de las notas es ".$media;
    }
    ?>
</body>
</html>