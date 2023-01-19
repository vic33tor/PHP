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
$date1 = strtotime("2016-06-01"); 
$date2 = strtotime("2018-09-21"); 

$diff = abs($date2 - $date1); 
  
  
$years = floor($diff / (365*60*60*24)); 
  
  
$months = floor(($diff - $years * 365*60*60*24)
                               / (30*60*60*24)); 
  

$days = floor(($diff - $years * 365*60*60*24 - 
             $months*30*60*60*24)/ (60*60*24));
  
  echo $years." años, ".$months." meses, ".$days." dias";
    ?>
</body>
</html>