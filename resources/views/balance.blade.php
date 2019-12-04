@extends('layouts.base', [
 'jumboTitle' => 'Balance Financiero',
 'jumboDesc' => 'Acá podes controlar los movimientos de tu cuenta'
  ])

@section('content')

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
@endsection