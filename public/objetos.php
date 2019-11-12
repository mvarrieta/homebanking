<?php

class Persona {

     private $nombre;
     protected $altura;
     private $dni;
     const BRAZOS=2;


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
    	
    	public function setAlturaEstudiante($altura='')
    	{
    		$this->altura = $altura;
    	}

    	public function setNombreEstudiante($nombre='')
    	{
    		$this->setNombre ($nombre);
    	}
    }

$vicky = new Estudiante();
$vicky->setNombreEstudiante( $nombre="Victoria");
$vicky->setAltura( $altura="1.90");
$vicky->setDni( $dni=29635462);



echo "Ella es: ".$vicky->getNombre()." mide: ".$vicky->getAltura()." mts de altura. Y su DNI es: ".$vicky->getDni()." y tiene ".Persona::BRAZOS. " brazos";

?>