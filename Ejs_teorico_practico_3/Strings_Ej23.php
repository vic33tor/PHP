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
    $texto = "Hola Mundo";
    echo $texto."<br>";
    function contVocal($texto){
    $contA = 0;
    $contE = 0;
    $contI = 0;
    $contO = 0;
    $contU = 0;
    for($i=0;$i<strlen($texto);$i++){
        if($texto[$i]=="a" || $texto[$i]=="A"){
            $contA++;
        }
        elseif($texto[$i]=="e" || $texto[$i]=="E"){
            $contE++;
        }
        elseif($texto[$i]=="i" || $texto[$i]=="I"){
            $contI++;
        }
        elseif($texto[$i]=="o" || $texto[$i]=="O"){
            $contO++;
        }
        elseif($texto[$i]=="u" || $texto[$i]=="U"){
            $contU++;
        }
    }
    $vocales = array (
        "A" => $contA, 
        "E" => $contE,
        "I" => $contI,
        "O" => $contO,
        "U" => $contU
        );
        return $vocales;
    }
    foreach (contVocal($texto) as $item => $value){
        echo $item.": ".$value."<br>";
   }
    ?>
</body>
</html>