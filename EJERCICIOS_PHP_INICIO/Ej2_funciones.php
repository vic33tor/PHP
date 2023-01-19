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
        $ip_c = $_SERVER['REMOTE_ADDR'];
        echo "La IP del cliente es ".$ip_c."<br>";
        $ip_s = $_SERVER['SERVER_ADDR'];
        echo "La IP del servidor es ".$ip_s."<br>";
        echo getcwd();

    ?>
</body>
</html>