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
    $num = 5;
    $suma = 0;
    echo "El numero es: ".$num."<br>";
    for ($i = 1; $i <= $num; $i++) {
        $suma += $i;
    }
    echo "La suma es: ".$suma;
    ?>
</body>
</html>