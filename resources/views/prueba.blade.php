  @extends('layouts.base', [
   'jumboTitle' => 'Inversiones',
   'jumboDesc' => 'Duplica tus ahorros en el mercado financiero'
    ])

  @section('content')

  <div class="container" id="principal2">
  <div class="col"><h1 class="display-4">Acciones en cartera</h1></div>
  <div class="table-responsive">
  <table class="table table-hover">
    <thead class="text-center">
       <tr>
        <th><div class="col">Empresa</div></th>
        <th><div class="col">Cantidad Acciones</div></th>
        <th><div class="col">Valor de Acción</div></th>
        <th><div class="col">Vender</div></th>
      </tr>
    </thead>
    <tbody>


  @foreach ($cartera as $item)
      <tr>
          
            <td align="center" id="empresa-buy">{{$item->empresa}}</td>
            <td align="center" id="acciones-buy">{{$item->acciones}}</td>
            <td align="center" id="valor-buy">{{$item->valor}}</td>
     
           <td align="center"><div class="col">
           <button type="submit" class="btn btn-success btn-sm pr-4 pl-4" id="SellAction">Vender</button></div>
        </td>
      @endforeach
    </tbody>
  </table>
  </div>
  </div>


  <div class="container" id="principal">
  <div class="col"><h1 class="display-4">Acciones Disponibles</h1></div>
  <div class="table-responsive">
  <table class="table table-hover">
    <thead class="text-center">
       <tr>
        <th><div class="col">Empresa</div></th>
        <th><div class="col">Valor de Acción</div></th>
        <th><div class="col" style="display: none" id="titulo">Cantidad a comprar</div></th>
      </tr>
    </thead>
    <tbody>
    <tr>
          <td>
           <form method="POST"> 
            <label for="inputGroupSelect02">Nombre del servicio</label>
            <select class="custom-select" name="empresa" required id="empresa" onchange="mySelect()" >
            <option selected value="">Seleccione...</option>
            @foreach ($investment as $item)
            <option>{{$item->empresa}}</option>
            @endforeach
            </select>
            </form>
          </td>
            <td align="center" id="valor"style="display: none">{{$item->valor}}</td>
            <td align="center"><input type="text" class="form-control" name="importe" required="true" id="cant" style="display:none"></td>
            
              <td align="center">
           <button type="submit" class="btn btn-primary btn-sm pr-3 pl-3" id="confirm">Comprar</button></td>
           <button type="submit" class="btn btn-primary btn-sm pr-3 pl-3" id="BuyAction" style="display: none">Comprar</button></td>></tr>
      
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
          $(document).ready(function(){
            $("#empresa").change(mySelect(){
              $("confirm").hide();
              $("#titulo").show();
              $("#cant").show();
              $("#BuyAction").show();
            });
          
              $("#BuyAction").click( function(){
                  if ($("#cant").val()!=''){
                
                      var data = {
                      id:$("#id").text(),
                      empresa: $("#empresa").text(),
                      //acciones: $("#acciones").text(),
                      valor: $("#valor").text(),
                      cant:$("#cant").val()

                     }
                    $.post('investment/buy', data, function(response){
                      if (response.success){
                        $('#principal').html(response.view)
                        location.reload();
                      }
                    });
                    }else {
                   //   alert("Por favor rellenar los datos")
                  }
              });
            }); 
  </script>


  @endsection
