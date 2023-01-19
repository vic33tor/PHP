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
    $my_date = new DateTime();
    echo date('d/m/Y')."<br>";

    $my_date->modify('first day of this month');
    echo $my_date->format('d/m/Y')."<br>";
    
    $my_date->modify('last day of this month');
    echo $my_date->format('d/m/Y');
    ?>
</body>
</html>