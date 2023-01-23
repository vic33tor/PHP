<?php 
require_once("Celda.php");
require_once("Fila.php");
require_once("Tabla.php");

$fila1 = new Fila(array(1, 2));
$tabla1 = new Tabla(array(
            new Fila(array(
            new Celda("middle", "center", "orange", "IES"), 
            new Celda("middle", "center", "red", "Villaverde"))),
            new Fila(array(
            new Celda("middle", "center", "orange", "Hola"),
            new Celda("middle", "center", "red", "Mundo")))));

$tabla1->pinta_tabla();
?>