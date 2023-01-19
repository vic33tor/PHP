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
    $matriz = array(
        array(1, 30, 50, 35),
        array(6, 18, 15, 95),
        array(8, 66, 50, 82),
        array(3, 71, 50, 41),
    );
    $columnas = 0;
    foreach($matriz as $fila) {
        $columnas++;
        $filas = 0;
        foreach ($fila as $elemento) {
            $filas++;
            echo "   $elemento   "."(".$columnas.$filas.")";
        }
    
        echo "<br>";
    }
    ?>
</body>
</html>