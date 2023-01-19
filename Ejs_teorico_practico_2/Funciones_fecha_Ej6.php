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

$nombre_archivo = 'archivo.txt';
if (file_exists($nombre_archivo)) {
    echo "La última modificación de $nombre_archivo fue: " . date("l, dS F, Y, h:i a", filectime($nombre_archivo));
}

?>

</body>
</html>