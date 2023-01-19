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
function Armstrong($num) {
    $suma = 0;
    for ($i = 0; $i < strlen($num); $i++){
        $suma += pow($num[$i],strlen($num));
    }
    if($suma==$num){
        return true;
    }
    else{
        return false;
    }
}

$num = "371";
echo (Armstrong($num) ? "Es Armstrong" : "No es Armstrong");
?>
</body>
</html>