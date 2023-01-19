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
     $cumpleaños = date('2023/02/27');
     $time_left = strtotime($cumpleaños)-$fecha_actual;  
     $days = floor($time_left / (60*60*24));
     $time_left %= (60 * 60 * 24);

     $hours = floor($time_left / (60 * 60));
     $time_left %= (60 * 60);

     $min = floor($time_left / 60);
     $time_left %= 60;

     $sec = $time_left;
    
    echo "Remaing time: $days days and $hours hours and $min min and $sec sec left";
    ?>
</body>
</html>