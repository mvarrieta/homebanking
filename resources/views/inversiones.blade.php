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
  <h1 class="display-4 text-left">Inversiones</h1>
  <p>Duplica tus ahorros en el mercado financiero</p>
</div>
</div>
<div class="container">
<div class="table-responsive">
<table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Empresa</th>
      <th scope="col">Acciones</th>
      <th scope="col">Valor de Acción</th>
      <th scope="col">Compraventa de Acción</th>
    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <td>Arcos Dorados</td>
      <td>1000</td>
      <td>100</td>
      <td>
         <button type="submit" class="btn btn-primary btn-sm pr-3 pl-3">Comprar</button>
         <button type="submit" class="btn btn-success btn-sm pr-4 pl-4">Vender</button>
      </td>
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
</body>
</html>
