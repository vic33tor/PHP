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
    $c1 = "padre";
    $c2 = "madre";
    $contador = 0;
    function comprobarFinal($c1,$c2){
        $c1 = strrev($c1);
        $c2 = strrev($c2);
        while(true){
            if(substr($c1,0,$contador+1)==substr($c2,0,$contador+1)){
                $contador++;
            }else{
                break;
            }
        }
        echo "Coincide con ".$contador." letras";
    }
    echo comprobarFinal($c1,$c2);
    ?>
</body>
</html>