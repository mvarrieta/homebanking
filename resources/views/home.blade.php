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
	<h1 class="display-4 text-center" style="font-size:250%;" >Bienvenido a MBanking, qué quieres hacer hoy?</h1>
	<p class="lead text-center" style="font-size: 100%">En este sitio podes operar con tu cuenta mirando el balance, haciendo transferencia, pagando servicios y armando inversiones!</p>
</div>
</div>


<div class="container" align="text-center">
<!--<div class="card-deck text-center"> Revisar la configuración con hoja de estilo para que el card tenga el mismo tamaño-->
	<div class="row">
		<div class="col-lg-4 col-sm-12">
		<div class="card text-center mx-auto" style="width: 18rem">
    	<img src="../../public/imagenes/balance.ico" class="card-img-top" alt="Balance">
    	<div class="card-body">
      	<h5 class="card-title">Balance</h5>
       	<p class="card-text">Mira como vienen sus cuentas: Ingresos y Egresos</p>
    	<a href="balance" class="btn btn-primary">Ver Situacion Economica</a>
       	</div>
  		</div>
  		</div>

  		<div class="col-lg-4 col-sm-12">
 		<div class="card text-center mx-auto" style="width: 18rem">
    	<img src="../../public/imagenes/servicios.png" class="card-img-top" alt="Pago de Servicios">
    	<div class="card-body">
      	<h5 class="card-title">Pago de Servicios</h5>
       	<p class="card-text">Paga todo lo que necesites desde la comodidad de tu casa</p>
    	<a href="servicios" class="btn btn-primary">Pagar Servicios</a>
        </div>
  		</div>
  		</div>

  		<div class="col-lg-4 col-sm-12">
  		<div class="card text-center mx-auto" style="width: 18rem">
    	<img src="../../public/imagenes/inversiones.jpg" class="card-img-top" alt="inversiones">
    	<div class="card-body">
      	<h5 class="card-title">Inversiones</h5>
       	<p class="card-text">Duplica tus ahorros en el mercado financiero</p>
    	<a href="inversiones" class="btn btn-primary">Invertir en cosas</a>
    	</div>
  		</div>
  		</div>
</div>
</div>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="../../public/resources/js/bootstrap.js"></script>

</body>
</html>