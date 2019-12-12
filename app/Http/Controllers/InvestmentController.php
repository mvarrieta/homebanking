<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Investment;
class InvestmentController extends Controller
{
    public function index(){

    $investment = Investment::orderBy('id', 'DESC')->get();
    return view ('inversiones', compact('investment'));
    
    }
}
