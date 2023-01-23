<?php 
require_once("Alumno.php");

$alumno1 = new Alumno("Victor", "Gil", "Nuño", "12345672Y");
$alumno2 = new Alumno("Arturo", "Martin", "Gimenez", "12312312B");

echo Alumno::$creados;
?>