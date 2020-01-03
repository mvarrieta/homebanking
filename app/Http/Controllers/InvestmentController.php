<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Investment;
use App\Balance;
use App\Cartera;


class InvestmentController extends Controller
{
    /*Función que mostrará en la vista el contenido de la tabla de Inversiones->Modelo Investment y de tabla Cartera->model Cartera*/
    public function index(){

    $investment = Investment::orderBy('id', 'DESC')->get();
    $cartera = Cartera::orderBy('id','DESC')->get();
    return view ('inversiones', compact('investment','cartera'));
    
    }
     
  //Funcion que registra la compra de acciones, por lo cual debe guardarse un registro en Balance y actualizarse el saldo
   public function BuyAction(Request $request){
      //$id=$request->get('id');
      $empresa= $request->get ('empresa');
      $acciones=$request->get('acciones');
      //$valor=$request->get ('valor');
      //$valor=$valor_action;
      $cant=$request->get('cant');  

   // $vista=view('inversion', compact('empresa','acciones','valor', 'cant'))->render();

      $id_action= Cartera::select('id','acciones')
          ->where('empresa',$empresa)
          ->limit(1)
          ->get();
      //Obtener el valor de esa accion seleccionada//
      $valor_action= Investment::select('valor')
          ->where('empresa',$empresa)
          ->get(); 
       
  //Si no encuentra un registro con esa validacion debe Insertar nuevo registro en  Cartera
  if (empty($id_action[0]['id']))
  {   
    $compra = new Cartera;
    $compra->empresa=$empresa;
    $compra->acciones=$cant;
    $compra->valor=$valor_action[0]['valor'];
    //$compra->total=$cant*$valor;
    $compra->save();

  }else{  
    //Si existe actualiza el saldo de ese registro
    $compra=Cartera::find($id_action[0]['id']);
    //$compra->acciones=$cant;
    $compra->acciones=$id_action[0]['acciones']+$cant;
    $compra->save();
  }

//variable que devuelve el ultimo dato de saldo ordenado por id descendiente-Limitamos a1 para que sólo traiga el ultimo 
   
    $lastSaldo= Balance::select('saldo')
              ->orderBy('id', 'desc')
              ->limit(1)
              ->get();

    $total=$valor_action[0]['valor']*$cant;
   //Creo el objeto para guardar los datos en la tabla Balance
    $transaction=new Balance;
    $transaction->fecha=date('y-m-d');
    $transaction->tipo_op=6;
    $transaction->descrip='Compra de Acciones de '.$empresa;
    $transaction->importe=$total;
  // $transaction->saldo=ObtenerSaldo($lastSaldo)-$money;
   $transaction->saldo=$lastSaldo[0]['saldo']-$total; // a $LastSaldo le indicamos que traiga sólo el contenido de su unico campo ya q sino lo devuelve como un array
   $transaction->save();

   return response()->json(array('success'=>true));
    } 

//Funcion para vender acciones
  Public function SellAction(Request $request){
    $empresa_sell= $request->get ('empresa2');
      
    //Buscamos el registro en la Base
    $id_action= Cartera::select('id','valor','acciones')
          ->where('empresa',$empresa_sell)
          ->limit(1)
          ->get();
    
    $lastSaldo= Balance::select('saldo')
              ->orderBy('id', 'desc')
              ->limit(1)
              ->get();

    $totalVenta=$id_action[0]['valor']*$id_action[0]['acciones'];
   /*Creo el objeto para guardar los datos en la tabla Balance*/
    $transaction=new Balance;
    $transaction->fecha=date('y-m-d');
    $transaction->tipo_op=7;
    $transaction->descrip='Venta de Acciones de '.$empresa_sell;
    $transaction->importe=$totalVenta;
  // $transaction->saldo=ObtenerSaldo($lastSaldo)-$money;
    $transaction->saldo=$lastSaldo[0]['saldo']+$totalVenta; /* a $LastSaldo le indicamos que traiga sólo el contenido de su unico campo ya q sino lo devuelve como un array*/
    $transaction->save();

    //Actualizamos registro
    $venta= new Cartera;
    $venta= Cartera::find($id_action[0]['id']);

    $venta->delete();


   return response()->json(array('success'=>true));

    }
  }
  ?>