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
     $fecha_actual = time();  
     $fin_anho = date('2022/12/31');
     $time_left = strtotime($fin_anho)-$fecha_actual;  
     $days = floor($time_left / (60*60*24));
    
    echo "Quedan ".$days." dias";
    ?>
</body>
</html>