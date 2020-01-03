@extends('layouts.base', [
 'jumboTitle' => 'Balance Financiero',
 'jumboDesc' => 'Acá podes controlar los movimientos de tu cuenta'
  ])

@section('content')

</div>
<div class="container">
<div class="table-responsive">
<table class="table table-hover table-striped">
  <thead class="text-center table-success">
    <tr>
      <th scope="col"><h4>Fecha</h4></th>
      <th scope="col"><h4>Descripcion</h4></th>
      <th scope="col"><h4>Importe</h4></th>
      <th scope="col"><h4>Saldo</h4></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($balance as $item)
    <tr>
        <th scope="row" class="text-center">{{date('d-m-Y',strtotime($item->fecha))}}</th>
          <td class="text-center">{{$item->descrip}}</td>
          <td class="text-center">${{$item->importe}}</td>
          <td class="text-center">${{$item->saldo}}</td>

    </tr>
@endforeach
    
</tbody>
</table>
</div>
</div>


@endsection

@section('scripts')

@endsection



