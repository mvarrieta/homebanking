<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index(){
    	return view ('servicios');
    }

   public function payService(Request $request){
   	$service = $request->get('service');
   	$money = $request->get('money');
   	$ref = $request->get('ref');

   	   	   
   $vista=view('serviciopagado', compact('service','money','ref'))->render();
   return response()->json(array('success'=>true, 'view'=>$vista));

   }

}



