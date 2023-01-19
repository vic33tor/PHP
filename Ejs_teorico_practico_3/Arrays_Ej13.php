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
        $notas = array ($_POST['nota1'],$_POST['nota2'],$_POST['nota3'],$_POST['nota4'],$_POST['nota5'],$_POST['nota6'],$_POST['nota7'],$_POST['nota8'],$_POST['nota9'],$_POST['nota10'],);
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