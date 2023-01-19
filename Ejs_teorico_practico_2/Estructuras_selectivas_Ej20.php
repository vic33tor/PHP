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
    $num1 = rand(1,10);
    echo $num1."<br>";
    function esPrimo($num1){
        for ($i = 2; $i < $num1; $i++) {
            if (($num1 % $i) == 0) {
                return false;
            }

        }
        return true;
    }
    $resultado = esPrimo($num1) ? 'Es primo' : 'No es primo';
    echo $resultado;
    ?>
</body>
</html>