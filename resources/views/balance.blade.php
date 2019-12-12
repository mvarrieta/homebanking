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
    @foreach ($balance as $item)
    <tr>
        <th scope="row">{{date('d-m-Y',strtotime($item->fecha))}}</th>
          <td>{{$item->desc}}</td>
          <td>{{$item->importe}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>
@endsection