<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Balance;

class ServiceController extends Controller
{
    
public function index(){

	$service = Service::orderBy('id', 'DESC')->get();
     return view ('servicios', compact('service'));
    	
    }
/*Esta funcion captura los datos ingresados en la vista Servicios para luego devolverlos impresos en la pantalla siguiente asi como tambien pasar los parametros para insertarlos en la tabla Balance*/
   public function payService(Request $request){
   	$service = $request->get('service');
   	$money = $request->get('money');
   	$ref = $request->get('ref');
   	   
   $vista=view('serviciopagado', compact('service','money','ref'))->render();
  
  /*variable que devuelve el ultimo dato de saldo ordenado por id descendiente-Limitamos a1 para que sólo traiga el ultimo */
     $lastSaldo= Balance::select('saldo')
              ->orderBy('id', 'desc')
              ->limit(1)
              ->get();

   /*Creo el objeto para guardar los datos en la tabla Balance*/
   $transaction=new Balance;
   $transaction->fecha=date('y-m-d');
   $transaction->tipo_op=8;
   $transaction->descrip='Pago de '.$service;
   $transaction->importe=$money;
 // $transaction->saldo=ObtenerSaldo($lastSaldo)-$money;
   $transaction->saldo=$lastSaldo[0]['saldo']-$money; /* a $LastSaldo le indicamos que traiga sólo el contenido de su unico campo ya q sino lo devuelve como un array- De esta manera actualizamos el saldo*/
   $transaction->save();

   return response()->json(array('success'=>true, 'view'=>$vista));
   }


}
?>
