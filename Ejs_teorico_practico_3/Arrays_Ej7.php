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
    function llenarArray(){
    $valores = array();
    $max_num = 1000;
    for ($x=0;$x<$max_num;$x++) {
        $num_aleatorio = rand(1,10);
        array_push($valores,$num_aleatorio);
        print $valores[$x]." ";
      }
      return $valores;
    }
    llenarArray();
    ?>
</body>
</html>