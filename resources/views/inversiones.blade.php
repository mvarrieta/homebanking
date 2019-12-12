@extends('layouts.base', [
 'jumboTitle' => 'Inversiones',
 'jumboDesc' => 'Duplica tus ahorros en el mercado financiero'
  ])

@section('content')
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

@foreach ($investment as $item)
    <tr>
        <th scope="row">{{date('d-m-Y',strtotime($item->fecha))}}</th>
          <td>{{$item->empresa}}</td>
          <td>{{$item->acciones}}</td>
          <td>{{$item->valor}}</td>
   
         <td>
         <button type="submit" class="btn btn-primary btn-sm pr-3 pl-3">Comprar</button>
         <button type="submit" class="btn btn-success btn-sm pr-4 pl-4">Vender</button>
      </td>
    </tr>
    @endforeach
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
