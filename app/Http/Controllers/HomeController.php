<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home');
    }
}


//pasando parametro para diferentes vistas
//class HomeController extends Controller
//{
    
	//ejemplos
    //public function index($view=1)
    //{
    //	if ($view==1){
	//	return view('welcome', ["nombre"=>"Victoria"]); //se le puede pasar un parametro para que lo muestre en la view return 
    //	} else {
    //		return "Esta vista no existe";
    //	}
    	
    //}

	//public function __invoke($view=1)
    //{
    	
	//$nombre='Victoria';
	//$apellido='Arrieta';
   	
   	//if ($view==1){
	//	return view('welcome', compact('nombre','apellido')); //se le puede pasar un parametro para que lo muestre en la view return view('welcome', ["nombre"=>"Oscar"]);
    //	} else {
    //		return "Esta vista no existe";
    //	}
    //}

?>
