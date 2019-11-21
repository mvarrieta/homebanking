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
  <h1 class="display-4 text-left"> Balance Financiero</h1>
  <p>Acá podes controlar los movimientos de tu cuenta</p>
</div>
</div>
<div>


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
   
          <td><?php echo $transaccion1->getFecha(); ?></td>
          <td><?php echo $transaccion1->getTipo();?></td>
          <td><?php echo $transaccion1->getImporte(); ?></td>
          <td><?php echo $transaccion1->getSaldo();?></td>
    </tr>
    <tr>
   
          <td><?php echo $transaccion2->getFecha(); ?></td>
          <td><?php echo $transaccion2->getTipo();?></td>
          <td><?php echo $transaccion2->getImporte(); ?></td>
          <td><?php echo $transaccion2->getSaldo();?></td>
    </tr>
    <tr>
   
          <td><?php echo $transaccion3->getFecha(); ?></td>
          <td><?php echo $transaccion3->getTipo();?></td>
          <td><?php echo $transaccion3->getImporte(); ?></td>
          <td><?php echo $transaccion3->getSaldo();?></td>
    </tr>
    <tr>
   
          <td><?php echo $transaccion4->getFecha(); ?></td>
          <td><?php echo $transaccion4->getTipo();?></td>
          <td><?php echo $transaccion4->getImporte(); ?></td>
          <td><?php echo $transaccion4->getSaldo();?></td>
    </tr>
    <tr>
   
          <td><?php echo $transaccion5->getFecha(); ?></td>
          <td><?php echo $transaccion5->getTipo();?></td>
          <td><?php echo $transaccion5->getImporte(); ?></td>
          <td><?php echo $transaccion5->getSaldo();?></td>
    </tr>
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