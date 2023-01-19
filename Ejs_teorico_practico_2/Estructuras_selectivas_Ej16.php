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
    $num1 = rand(0,10);
    $num2 = rand(0,10);
    $num3 = rand(0,10);
    $num4 = rand(0,10);
    echo $num1."<br>".$num2."<br>".$num3."<br>".$num4."<br>"."<br>"."<br>";
    echo max($num1, $num2, $num3, $num4,)."<br>";
    if(max($num1, $num2, $num3, $num4,)%2==0){
        echo"Es par";
    }
    else{
        echo"Es impar";
    }
    ?>
</body>
</html>