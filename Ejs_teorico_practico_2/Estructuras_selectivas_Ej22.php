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
        $sueldo = 40000;
        $años = 2;
        if($años>=10){
            $sueldo += $sueldo*(10/100);
            echo "Lleva ".$años." años, su sueldo es de ".$sueldo;
        }elseif($años>=5 && $años<10){
            $sueldo += $sueldo*(7/100);
            echo "Lleva ".$años." años, su sueldo es de ".$sueldo;
        }elseif($años>=3 && $años<5){
            $sueldo += $sueldo*(5/100);
            echo "Lleva ".$años." años, su sueldo es de ".$sueldo;
        }else{
            $sueldo += $sueldo*(3/100);
            echo "Lleva ".$años." años, su sueldo es de ".$sueldo;
        }
    ?>
</body>
</html>