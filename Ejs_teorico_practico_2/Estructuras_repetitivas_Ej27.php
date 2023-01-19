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
        $suma = 0;
        $producto = 1;
        for ($i = 1; $i <= 20; $i++) {
            $num1 = rand(0,100);
            if($num1%2==0){
                $suma += $num1;
            }else{
                $producto *= $num1;
            }
            
            echo $num1."<br>";
        }
        echo"<br> La suma de los pares es: ".$suma." <br> El producto de los impares es: ".$producto;
    ?>
</body>
</html>