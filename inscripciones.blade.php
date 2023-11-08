@extends('plantillas.header')
@section('contenido')
    <title>Inscripciones</title>
    <link rel="stylesheet" href="styles/inscripciones/inscripciones.css">

    <section class="inscripciones_1">
        <h1>NUESTROS PLANES</h1>
        <section class="inscripciones_2">
            <a href="pagos_1">
                <div class="curso">
                    <img src="img/planes/amateur.jpg" alt="curso">
                    <div class="curso_info">
                        <h2>AMATEUR</h2>
                            <p class="precio">$100.000</p>
                    </div>
                </div>
            </a>
            <a href="pagos_1">
                <div class="curso">
                    <img src="img/planes/fan.jpg" alt="curso">
                    <div class="curso_info">
                        <h2>FAN</h2>
                        <p class="precio">$120.000</p>
                    </div>
                </div>
            </a>
            <a href="pagos_1">
                <div class="curso">
                    <img src="img/planes/superfan.jpg" alt="curso">
                    <div class="curso_info">
                        <h2>SUPERFAN</h2>
                        <p class="precio">$150.000</p>
                    </div>
                </div>
            </a>
        </section>
    </section>
@endsection
