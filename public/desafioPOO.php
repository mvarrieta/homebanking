<?php
class Transaccion{

private $fecha;
private $tipo;
private $importe;
private static $misaldo= 1000;
private $saldo;
public function __construct ($fecha, $tipo, $importe)
{
	$this->fecha= $fecha;
	$this->tipo= $tipo;
	$this->importe= $importe;
	$this->saldo= $this->calculateSaldo($importe);
}


public function calculateSaldo($importe)
{
	self::$misaldo = self::$misaldo - $importe;
	return self::$misaldo;
}

public function getFecha()
{
	return $this->fecha;
}
public function getTipo()
{
	return $this->tipo;
}
public function getImporte()
{
	return $this->importe;
}
public function getSaldo()
{
	return $this->saldo;
}

public function setFecha($fecha='')
{
	$this->fecha= $fecha;
}
public function setTipo($tipo='')
{
	$this->tipo= $tipo;
}
public function setImporte($importe='')
{
	$this->importe= $importe;
}
public function setSaldo($saldo='')
{
	$this->saldo= $saldo;
}


}

$transaccion1 = new Transaccion("18/10/19", "Extraccion",500);
$transaccion2 = new Transaccion("19/10/19", "Extraccion",300);

 echo $transaccion1->getFecha();
 echo $transaccion1->getTipo();
 echo $transaccion1->getImporte();
 echo $transaccion1->getSaldo();

 echo $transaccion2->getFecha();
 echo $transaccion2->getTipo();
 echo $transaccion2->getImporte();
 echo $transaccion2->getSaldo();
?>
