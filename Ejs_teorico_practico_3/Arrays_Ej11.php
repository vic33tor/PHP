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
    $datos1 = array (3,5);
    $datos2 = array (7,8);
    echo "Vector 1: (".$datos1[0].",".$datos1[1].")<br>";
    echo "Vector 2: (".$datos2[0].",".$datos2[1].")<br>";
    function sumaVectores($datos1, $datos2){
    $resultado = array();
    for ($i = 0; $i <= count($datos2); $i++) {
        $resultado[$i] = $datos1[$i] + $datos2[$i] ;
    }
    return "Resultado: (".$resultado[0].",".$resultado[1].")";;
}
    echo sumaVectores($datos1,$datos2);
    ?>
</body>
</html>