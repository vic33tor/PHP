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
    $contador = 0;
        while(true){
            $num1 = rand(1,6);
            $contador++;
            echo $num1."<br>";
            if($num1==6){
                echo "Ha tardado ".$contador." veces";
                break;
            }
        }
    ?>
</body>
</html>