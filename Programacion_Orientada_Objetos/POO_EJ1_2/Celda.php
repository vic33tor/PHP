<?php 
class Celda {
	public $a_vertical;
	public $a_horizontal;
	public $fondo;
	public $texto;

	function __construct($a_vertical,$a_horizontal,$fondo,$texto) {
		$this->a_vertical = $a_vertical;
		$this->a_horizontal = $a_horizontal;
		$this->fondo = $fondo;
		$this->texto = $texto;
	}
	function pinta_celda() {
		echo "<td align='$this->a_horizontal'
		valign='$this->a_vertical'
		bgcolor='$this->fondo'>	
		$this->texto</td>";
	}
}
?>