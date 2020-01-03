<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balance;

class BalanceController extends Controller
{
    public function index()
    {
    	
    $balance = Balance::orderBy('id', 'DESC')->get();
     return view ('balance', compact('balance'));
    }

   /* public function ObtenerSaldo()
    {
       $lastSaldo= Balance::select('saldo')
              ->orderBy('id', 'desc')
              ->limit(1)
              ->get();
              return ($lastSaldo[0]['saldo']);
    }*/


/*

	public function __invoke()
	{
	$transaccion1 = new Transaccion("18/10/19", "Extraccion",500);
	$transaccion2 = new Transaccion("19/10/19", "Extraccion",100);
	$transaccion3 = new Transaccion("20/10/19", "Extraccion",200);
	$transaccion4 = new Transaccion("21/10/19", "Extraccion",300);
	$transaccion5 = new Transaccion("22/10/19", "Extraccion",100);
	return view ("balance", compact("transaccion1","transaccion2","transaccion3","transaccion4", "transaccion5"));

	}

}

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
*/

}