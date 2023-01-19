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
    $lista1 = array(1,2,3,4,5);
    function metodo1($lista){
        $resultado = array();
        $longitud = count($lista);
        for($i=0;$i<$longitud;$i++){
            array_push($resultado,array_pop($lista));
            echo $resultado[$i]." ";
        }
    }
    $lista2 = array(1,2,3,4);
    
    function metodo2($lista){
        $resultado = array();
        $longitud = count($lista);
        for($i=0;$i<$longitud;$i++){
            array_unshift($resultado,array_shift($lista));
            echo $resultado[$i]." ";
        }
    }
    echo metodo1($lista1);
    echo "<br>";
    echo metodo2($lista2);
    ?>
</body>
</html>