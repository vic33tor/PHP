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
    $temp = 1;
    echo "<br> El valor de la variable es ".$temp."<br>";
    echo gettype($temp);

    $temp = 23.5;
    echo "<br> El valor de la variable es ".$temp."<br>";
    echo gettype($temp);

    $temp = "hola";
    echo "<br> El valor de la variable es ".$temp."<br>";
    echo gettype($temp);

    $temp = false;
    echo "<br> El valor de la variable es ".$temp."<br>";
    echo gettype($temp);
    ?>
</body>
</html>