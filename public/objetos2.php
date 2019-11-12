<?php

class Persona {

     private $nombre;
     protected $altura;
     private $dni;
     const BRAZOS=2;

public function __construct($nombre, $altura, $dni)
{
	$this->nombre = $nombre;
	$this->altura = $altura;
	$this->dni = $dni;

}


     public function getNombre()
     {
     	return $this->nombre;
     }
     public function getAltura()
     {
     	return $this->altura;
     }
     public function getDni()
     {
     	return $this->dni;
     }

     public function setNombre($nombre='')
     {
     	$this->nombre =$nombre;
     }
 	public function setAltura($altura='')
     {
     	$this->altura =$altura;
     }
	public function setDni($dni='')
     {
     	if (!is_numeric($dni)){
     		throw new Exception("EL DNI debe ser numerico", 1);
     		
     	}else {
     		$this->dni =$dni;
     	}
     	
     }

    }

    /**
     * 
     */
    class Estudiante extends Persona
    {
    	private $calificacion;
    	public function __construct($nombre, $altura, $dni,$calificacion)
    	{
    		parent::__construct($nombre, $altura, $dni);
    		$this->calificacion = $calificacion;
    	}

    	public function getCalificacion($calificacion='')
    	{
    		return $this->calificacion;
    	}
		public function __toString()
	{
			return "Su nombre es: ".$this->getNombre()." mide: ".$this->getAltura()." mts de altura. Y su DNI es: ".$this->getDni()." Su promedio es de: ".$this->getCalificacion();
	}
    	
    }

$vicky = new Estudiante("Federico", 1.70, "45823225", 9);
echo $vicky;

?>