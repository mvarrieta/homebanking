@extends('layouts.base', [
 'jumboTitle' => 'Inversiones',
 'jumboDesc' => 'Duplica tus ahorros en el mercado financiero'
  ])

@section('content')

<div class="row">
<div class="col">

<div class="container" id="principal">
<div class="col bg-success text-white"><h4 class="display-4" style="text-align: center; font-size:250%">Compra de Acciones</h4></div>
<div class="table-responsive ">
<table class="table table-hover table-success">
  <thead class="text-center">
     <tr><td></td>
     
      <th><div class="col">Empresa</div></th>
     <!-- <th><div class="col" style="display: none" id="tituloValor">Valor de Acción</div></th>-->
      <th><div class="col" style="display: none" id="titulo">Cantidad a comprar</div></th>
    </tr>

  </thead>
  <tbody>
<tr>
  <td></td>
<td>
           <form method="POST"> 
           <select class="custom-select" name="empresa" required id="empresa" onchange="mySelect()">
            <option selected value="">Seleccione...</option>
            @foreach ($investment as $item)
            <option>{{$item->empresa}}</option>
            @endforeach
            </select>
            </form>
          </td>
           <!-- <td align="center" id="valor"style="display: none">*****</td>-->
           
            <td align="center"><input type="text" class="form-control" required="true" id="cant" style="display: none"></td>
            <td align="center"><button type="submit" class="btn btn-success btn-lg pr-3 pl-3" id="BuyAction" style="display: none">Comprar</button></td></tr>
  </tbody>
</table>
</div>
</div>
</div>
<div class="col">
<div class="container" id="principal3">
<div class="col bg-primary text-white"><h4 class="display-4" style="text-align: center; font-size:250%">Venta de Acciones</h4></div>
<div class="table-responsive">
<table class="table  table-primary table-hover">
  <thead class="text-center">
     <tr>
      <td></td>
      <th><div class="col" style="text-align: center">Empresa</div></th>
      <th><div class="col" style="display: none; align-content: center;" id="tituloValor">Valor de Acción</div></th>
      <!--<th><div class="col" style="display: none" id="titulo2">Cantidad a Vender</div></th>-->
    </tr>
  </thead>
  <tbody>
<tr>
  <td></td>
<td style="align-self: center">
           <form method="POST"> 
           <select class="custom-select" name="empresa-sell" required id="empresa-sell" onchange="mySelect2()" style="align-content: center; text-align: center">
            <option selected value="">Seleccione...</option>
            @foreach ($cartera as $item)
            <option>{{$item->empresa}}</option>
            @endforeach
            </select>
            </form>
            </td>       
            <td align="center"><button type="submit" class="btn btn-primary btn-lg pr-3 pl-3" id="SellAction" style="display: none">Vender</button></td></tr>
  </tbody>
</table>
</div>
</div>
</div>
</div>
<div class="container" id="principal2">
<div class="col bg-info text-white"><h1 class="display-4" style="font-size: 220%; text-align: center;">Acciones en cartera</h1></div>
<div class="table table-responsive table-info">
<table class="table table-hover">
  <thead class="text-center">
     <tr>
      <th><div class="col">Empresa</div></th>
      <th><div class="col">Cantidad Acciones</div></th>
      <th><div class="col">Valor de Acción</div></th>
      <!--<th align="center"><div class="col"><button type="submit" class="btn btn-success btn-sm pr-4 pl-4" id="SellAction">Vender</button></div></th>-->
    </tr>
  </thead>

<tbody>

@foreach ($cartera as $item)
    <tr>
          
          <td align="center" id="empresa-sell">{{$item->empresa}}</td>
          <td align="center" id="acciones-sell">{{$item->acciones}}</td>
          <td align="center" id="valor-sell">{{$item->valor}}</td>
  @endforeach 
       

</tr>
</tbody>
</table>
</div>
</div>


<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="../../public/resources/js/bootstrap.js"></script>
@endsection
@section('scripts')
<script  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="../../public/resources/js/bootstrap.js"></script>
<script>
function mySelect(){
  $("#titulo").show();
 // $("#tituloValor").show();
  $("#cant").show();
  $("#BuyAction").show();
  };

function mySelect2(){
  $("#SellAction").show();
  };

$(document).ready(function(){  

  $("#SellAction").click( function(){
       
       var data = {empresa2: $("#empresa-sell option:selected").text()}
      $.post('investment/sell', data, function(response){
      if (response.success){
          $('#principal').html(response.view)
          location.reload();
                          }
          });
      });
  $("#BuyAction").click( function(){
       if ($("#cant").val()!=''){
       var data = {
       //id:$("#id").text(),
       empresa: $("#empresa option:selected").text(),
       acciones: $("#acciones").text(),
       //valor: $("#valor").text(),
       cant:$("#cant").val()
                  }
      $.post('investment/buy', data, function(response){
      if (response.success){
          $('#principal').html(response.view)
          location.reload();
                          }
          });
      }else {
      alert("Por favor rellenar los datos")
             }
  });


  });
  
</script>
@endsection
