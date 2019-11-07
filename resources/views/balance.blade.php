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
      <a class="nav-item nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="balance">Balance</a>
      <a class="nav-item nav-link" href="servicios">Pago de Servicios</a>
      <a class="nav-item nav-link" href="inversiones">Inversiones</a>
    </div>
  </div>
</nav>
<div class="jumbotron">
<div class="container" align="text-center">
  <h1 class="display-4 text-left"> Balance Financiero</h1>
  <p>Acá podes controlar los movimientos de tu cuenta</p>
</div>
</div>
<div>
  <?php $transacciones = [
  0 => ["fecha" =>"18/10/19",
      "Descripcion"=> "Depósito",
      "Importe" => "2000",
      "Saldo"=> "2500"] ,
  1 => ["fecha" =>"19/10/19",
      "Descripcion"=> "Extracción",
      "Importe" => "1000",
      "Saldo"=> "1500"],
  2 => ["fecha" =>"20/10/19",
      "Descripcion"=> "Extracción",
      "Importe" => "1000",
      "Saldo"=> "500"],
  3 => ["fecha" =>"20/10/19",
      "Descripcion"=> "Depósito",
      "Importe" => "2000",
      "Saldo"=> "2500"] ,
  4 => ["fecha" =>"21/10/19",
      "Descripcion"=> "Extracción",
      "Importe" => "1000",
      "Saldo"=> "1500"],
  5 => ["fecha" =>"22/10/19",
      "Descripcion"=> "Extracción",
      "Importe" => "1000",
      "Saldo"=> "500"],
  6 => ["fecha" =>"22/10/19",
      "Descripcion"=> "Depósito",
      "Importe" => "2000",
      "Saldo"=> "2500"] ,
  7 => ["fecha" =>"23/10/19",
      "Descripcion"=> "Extracción",
      "Importe" => "1000",
      "Saldo"=> "1500"],
  8 => ["fecha" =>"24/10/19",
      "Descripcion"=> "Extracción",
      "Importe" => "1000",
      "Saldo"=> "500"], 
  9 => ["fecha" =>"27/10/19",
      "Descripcion"=> "Depósito",
      "Importe" => "2000",
      "Saldo"=> "2500"] ,
  10 => ["fecha" =>"29/10/19",
      "Descripcion"=> "Extracción",
      "Importe" => "1000",
      "Saldo"=> "1500"]
    ]; ?>
</div>
<div class="container">
<table class="table table-responsive-lg">
  <thead>
    <tr>
      <th scope="col">Fecha</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Importe</th>
      <th scope="col">Saldo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <?php foreach ($transacciones as $indice => $transaccion ) {?>

    <?php if ($indice >0 && $indice < 11){ ?>
      <?php foreach ($transaccion as $item) {?>
          <td><?php echo $item ?></td>
      <?php } ?>
    </tr>
    <?php }?>
  <?php }?>
<?php  ?>  
   
    
  </tbody>
</table>
</div>

  
 




<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="../../public/resources/js/bootstrap.js"></script>


</body>
</html>