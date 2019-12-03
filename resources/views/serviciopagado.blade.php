<div class="container">
<p>Has pagado el servicio: {{ $service}} </p>
<p>Monto:$ {{ $money}} </p>
<p>Nro de Referencia de Pago: {{ $ref}} </p>
<br>

<a class="btn btn-primary" href="{{route('servicios')}}"role="button">Pagar otro servicio</a>
</div>