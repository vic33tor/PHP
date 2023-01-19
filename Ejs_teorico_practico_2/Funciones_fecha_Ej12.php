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
    echo date('M Y')."<br>";
    echo date('M Y', strtotime('-1 month'))."<br>";
    echo date('M Y', strtotime('-2 month'))."<br>";
    echo date('M Y', strtotime('-3 month'));
    ?>
</body>
</html>