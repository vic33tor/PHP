<?php 
require_once("Articulo.php");

$a1 = new Articulo(1, "cisterna");
$a2 = clone($a1);

echo $a2->id;
?>