<?php 
class Alumno {

    public static $creados = 0;
	private $nombre;
	private $primer_apellido;
	private $segundo_apellido;
	private $dni;

	function __construct($nombre, $primer_apellido, $segundo_apellido, $dni){
		$this->nombre = $nombre;
		$this->primer_apellido = $primer_apellido;
		$this->segundo_apellido = $segundo_apellido;
		$this->dni = $dni;
        Alumno::$creados++;
	}
    function __destruct(){
        Alumno::$creados--;
    }
    public function __set($atributo, $valor){
        if(property_exists(__CLASS__, $atributo)){
            $this->$atributo = $valor;
        }
    }
    public function __get($atributo){
        if(property_exists(__CLASS__, $atributo)){
            return $this->$atributo;
        }
        return NULL;
    }

    
    function setDni($dni){
        $letra = substr($dni, -1);
        $numeros = substr($dni, 0, -1);
    
        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
        $this->dni = $dni;
        }
    }
}
?>