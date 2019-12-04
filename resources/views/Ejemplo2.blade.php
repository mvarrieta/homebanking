@extends('layouts.app', [
 'jumboTitle' => 'Balance Financiero',
 'jumboDesc' => 'Aca podes controlar los movimientos de tu cuenta'
  ])

@section('content')

<div class="container">
   <div class="row">
       <div class="alert alert-primary" role="alert">
           <strong>Saldo $1000</strong>
       </div>
       <table class="table table-hover">
           <thead>
               <tr>
               <th scope="col">Fecha</th>
               <th scope="col">Descripcion</th>
               <th scope="col">Importe</th>
               </tr>
           </thead>
           <tbody>
               <tr>
                   <th scope="row">10/12/2018</th>
                   <td>Descripcion</td>
                   <td>100</td>
               </tr>
           </tbody>
       </table>
   </div>
</div>

@endsection