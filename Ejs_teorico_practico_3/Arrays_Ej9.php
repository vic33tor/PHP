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
    function mayorHabitantes(){
    $ciudades = array (
        "Madrid" => 3334730, 
        "Barcelona" => 1664182,
        "Valencia" => 800215,
        "Sevilla" => 691395
        );
        $ciudadMayor = "";
        $numMayor = 0;
        foreach ($ciudades as $item => $value){
            echo $item.": ".$value."<br>";
            if($numMayor<$value){
                $numMayor = $value;
                $ciudadMayor = $item;
            }
       }
       return "La ciudad con mayor número de habitantes es ".$ciudadMayor." con ".$numMayor." habitantes";
    }
    echo mayorHabitantes();
    ?>
</body>
</html>