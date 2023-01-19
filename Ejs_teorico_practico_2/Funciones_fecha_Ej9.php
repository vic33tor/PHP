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
        $originalDate = "2021-07-18";
        $newDate = date("d-m-Y", strtotime($originalDate));
        echo $originalDate."<br>";
        echo $newDate;
    ?>
</body>
</html>