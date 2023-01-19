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
        $dia = getdate();
        if($dia["wday"]== 0 || $dia["wday"]==6){
            echo date('l')." es fin de semana";
        }
        else{
            echo date('l')." no es fin de semana. Faltan ". 6 - $dia["wday"]." dias!";
        }
        
    ?>
</body>
</html>