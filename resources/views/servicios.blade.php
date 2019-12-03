<!DOCTYPE html>
<html>
<head>
<title>Mi Homebanking</title>
		<link rel="stylesheet" type="text/css"	href="../../public/resources/css/bootstrap.css">

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Home Banking</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="balance">Balance</a>
      <a class="nav-item nav-link" href="servicios">Pago de Servicios</a>
      <a class="nav-item nav-link" href="inversiones">Inversiones</a>
    </div>
  </div>
</nav>
<div class="jumbotron">
<div class="container" align="text-center">
  <h1 class="display-4 text-left">Pago de Servicios</h1>
  <p>Paga todo lo que necesites desde la comodidad de tu casa</p>
</div>

</div>
<div class="container" align="text-center" id="principal">

 <form method="POST"> 
  <div class="col-7">
  <div class="form-group">
  <label for="inputGroupSelect01">Nombre del servicio</label>
    <select class="custom-select" name="servicio" required id="nameService">
    <option selected value="">Seleccione...</option>
    <option value="Luz" >Luz</option>
    <option value="Gas" >Gas</option>
    <option value="Agua" >Agua</option>
  </select>
</div>
</div>

  <div class="col-7"> 
  <div class="form-group">
    <label for="FormControlInput1">Nro de Referencia</label>
    <input type="number" class="form-control" name="nroReferencia" placeholder="Nro de Referencia" required="true" id="ref">
  </div>
  </div>
 
<div class="col-7"> 
  <div class="form-group">
    <label for="FormControlInput1">Importe</label>
    <input type="text" class="form-control" name="importe" placeholder="Importe" required="true" id="moneyService">
  </div>
  </div>
<div class="container" align="text-right">
      <button type="button" class="btn btn-primary" id="payService">Pagar</button>
    </div>
</form>
</div>

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


</body>
</html>