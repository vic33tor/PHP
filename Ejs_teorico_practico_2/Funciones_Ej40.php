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
    function esBisiesto($year=NULL) {
        $year = ($year==NULL)? date('Y'):$year;
        return ( ($year%4 == 0 && $year%100 != 0) || $year%400 == 0 );
    }
    function esValida($dia, $mes, $año){
        if($dia==null || $mes==null || $año==null){
            return false;
        }
        if(($dia<0 || $dia>31)||($mes<0 || $mes>12)||($año<0)){
            return false;
        }
        if($mes==2 && $dia>28){
            return false;
        }
        if(($mes==4 || $mes==6 || $mes==9 || $mes==11)&& $dia>30){
            return false;
        }
        else{
            return true;
        }
    }
    echo (esBisiesto($_POST['year']) ? "Es bisiesto" : "No es bisiesto")."<br>";
    echo (esValida($_POST['dia'],$_POST['mes'],$_POST['year']) ? "Es valida" : "No es valida");
    ?>
</body>
</html>