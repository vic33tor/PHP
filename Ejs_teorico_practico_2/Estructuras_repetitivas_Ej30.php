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
        $num = 9;
        echo "El numero es: ".$num."<br>";
        for ($i = 1; $i < $num; $i++) {
            if(($num-$i)%2==0){
                echo $num-$i."<br>";
            }
        }
    ?>
</body>
</html>