@extends('layouts.base', [
 'jumboTitle' => 'Bienvenido a MBanking, qué quieres hacer hoy?',
 'jumboDesc' => 'En este sitio podes operar con tu cuenta mirando el balance, haciendo transferencia, pagando servicios y armando inversiones!'
  ])

@section('content')
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

@endsection
