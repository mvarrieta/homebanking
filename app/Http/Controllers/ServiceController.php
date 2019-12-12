<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    
public function index(){

	$service = Service::orderBy('id', 'DESC')->get();
     return view ('servicios', compact('service'));
    	
    }

   public function payService(Request $request){
   	$service = $request->get('service');
   	$money = $request->get('money');
   	$ref = $request->get('ref');

   	   	   
   $vista=view('serviciopagado', compact('service','money','ref'))->render();
   return response()->json(array('success'=>true, 'view'=>$vista));

   }


}
