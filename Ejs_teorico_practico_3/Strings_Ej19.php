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
    function cadenaReves(){
        $cadena = "hola";
    echo $cadena."<br>";
        $cReves = "";
        for($i=strlen($cadena);$i>=0;$i--){
            $cReves = $cReves .$cadena[$i];
        }
        return $cReves;
    }
    echo cadenaReves();
    ?>
</body>
</html>