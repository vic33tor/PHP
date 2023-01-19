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
        for ($i = 1; $i <= 10; $i++) {
            $num1 = rand(0,100);
            $suma += $num1;
            echo $num1."<br>";
        }
        echo"<br> La media de los números es:". number_format(($suma/10), 2);
    ?>
</body>
</html>