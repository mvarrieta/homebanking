<div class="container">
<p><h1 class="display-4 text-left" style="font-size:200%" >Has pagado el servicio:</h1> <h3>{{ $service}} </h3></p>
<p><h1 class="display-4 text-left" style="font-size:200%" >Monto:</h1><h3>$ {{ $money}}</h3> </p>
<p><h1 class="display-4 text-left" style="font-size:200%" >Nro de Referencia de Pago:</h1><h3> {{ $ref}}</h3> </p>
<br>

<a class="btn btn-primary btn-lg" href="{{route('servicios')}}"role="button">Pagar otro servicio</a>
</div>