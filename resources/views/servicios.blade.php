@extends('layouts.base', [
 'jumboTitle' => 'Pago de Servicios',
 'jumboDesc' => 'Paga todo lo que necesites desde la comodidad de tu casa'
  ])

@section('content')

<div class="container" align="text-center" id="principal">

 <form method="POST"> 
  <div class="col-7">
  <div class="form-group">
  <label for="inputGroupSelect01"><h3>Nombre del servicio</h3></label>
    <select class="custom-select" name="servicio" required id="nameService">
    <option selected value="">Seleccione...</option>
    @foreach ($service as $item)
    <option>{{$item->name}}</option>
     @endforeach

  </select>
</div>
</div>


</form>

  <div class="col-7"> 
  <div class="form-group">
    <label for="FormControlInput1"><h3>Nro de Referencia</h3></label>
    <input type="number" class="form-control" name="nroReferencia" placeholder="Nro de Referencia" required="true" id="ref">
  </div>
  </div>
 
<div class="col-7"> 
  <div class="form-group">
    <label for="FormControlInput1"><h3>Importe</h3></label>
    <input type="text" class="form-control" name="importe" placeholder="Importe" required="true" id="moneyService">
  </div>
  </div>
<div class="container" align="text-right">
      <button type="button" class="btn btn-primary btn-lg" id="payService">Pagar</button>
    </div>
</form>
</div>

@endsection


@section('scripts')
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="../../public/resources/js/bootstrap.js"></script>
<script>
        $(document).ready(function(){
            $("#payService").click( function(){

              if ($("#moneyService").val()!=''){

                    var data = {
                    money: $("#moneyService").val(),
                    service: $("#nameService").val(),
                    ref: $("#ref").val()
                    }
                  $.post('services/pay', data, function(response){
                    if (response.success){
                      $('#principal').html(response.view)
                        }
                  });
                }else {
                    alert("Por favor rellenar los datos")
                }
            });
        }); 
    </script>

@endsection