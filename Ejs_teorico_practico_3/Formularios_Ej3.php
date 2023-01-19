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
    $resultado = "";
    $cont = 0;
    for($i = 1; $i < intval($_POST['numero'])*2; $i++){
        if($i<=intval($_POST['numero'])){
            $resultado = $resultado.$i." ";
        }else{

            $resultado = str_replace(intval($_POST['numero'])-$cont,"",$resultado);
            $cont++;
        }
        echo $resultado."<br>";
        }
    ?>
</body>
</html>