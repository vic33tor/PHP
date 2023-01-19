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
    date_default_timezone_set("Europe/Madrid");
    setlocale(LC_TIME, 'es_VE.UTF-8','esp');
    $fecha = new DateTime($_POST['año']."-".$_POST['mes']."-".$_POST['dia']);

    echo strftime('%A %e de %B de %Y', $fecha->getTimestamp());
    
    ?>
</body>
</html>