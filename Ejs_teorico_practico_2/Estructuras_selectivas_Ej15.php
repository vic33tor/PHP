<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $palabra = "ala";
    echo $palabra."<br>";
    if($palabra==strrev($palabra)){
        echo"Es palíndroma";
    }
    else{
        echo"No es palíndroma";
    }
    ?>
</body>
</html>