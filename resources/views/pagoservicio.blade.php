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
  <h1 class="display-4 text-left">Pago de Servicios</h1>
  <p>Paga todo lo que necesites desde la comodidad de tu casa</p>
</div>

</div>
<div class="container" align="text-center">
<?php 
if ( empty($_POST['servicio']) || empty($_POST['nroReferencia']) || empty($_POST['importe'])){
    echo "Los campos requeridos están incompletos";
  } else {
    echo "ACABAS DE PAGAR TU SERVICIO!". "<br/>";
    echo "Servicio :  ".($_POST['servicio'])."<br/>";
    echo "Importe pagado: ".(float)($_POST['importe'])."<br/>";
    echo "Nro de Referencia de Pago ".(int)$_POST['nroReferencia'];
  }
  ?>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="../../public/resources/js/bootstrap.js"></script>


</body>
</html>