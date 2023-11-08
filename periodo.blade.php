@extends('plantillas.header')
@section('contenido')
<title>Alquiler</title>
<link rel="stylesheet" href="styles/alquiler/periodo.css">

<main class="periodo">
<div class="periodo_2">

    <article class="info_periodo">
        <section>
        <h2>Especificaciones</h2>
        <p>Necesitas saber que para nosotros Xpreess Yourself<br>
            Es importante saber el tiempo que vas a tener en tu poder <br>
            Los productos que te ofrecemos para alquilar.
        </p>
    </section>
    </article>
    <form action="POST" id="alquiler" class="alquiler">
    <article class="info_periodo" id="info_periodo2">
        <section class="primera">
        <h3>Fecha Inicial</h3>
        <input type="date" class="fechas">
        </section>
        <section class="primera">
        <h3> Fecha Final</h3>
        <input type="date" class="fechas">
        </section>
    </article>

    <article class="mandar">
    <a href="pagos_1" class="enviar">Ir a Pagar</a>
    </article>
</div>
</form>
</main>
@endsection