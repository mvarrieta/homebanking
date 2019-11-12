<?php
class Transaccion{

private $fecha;
private $tipo;
private $importe;
const SALDO= 1000;
private $saldo;
public function __construct ($fecha, $tipo, $importe, $saldo)
{
	$this->fecha= $fecha;
	$this->tipo= $tipo;
	$this->importe= $importe;
	$this->saldo= $saldo;
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

$transaccion1 = new Transaccion("18/10/19", "Extraccion",500, 1);

 echo $transaccion1->getFecha();
 echo $transaccion1->getTipo();
 echo $transaccion1->getImporte();
 echo $transaccion1->getSaldo();
?>
