@extends('plantillas.header')
@section('contenido')
<title>Alquiler</title>
<link rel="stylesheet" href="styles/alquiler/audiovisual.css">
<main class="principal">
    <div class="clases">
        <a href="vestuario" class="choose">Vestuarios</a>
        <a href="audiovisual" class="choose">Audiovisual</a>
    </div>


    <form action="POST" id="alquiler" class="alquiler">
        <div class="contenedor_audiovisual">
            
            <article class="productos_audio">
                <h1>Tripode</h1>
                <div class="productos_audio_img">
                    <img src="img/alquiler/tripodee.png" alt="">
                </div>
                <button>Agregar producto</button>
            </article> 
            <article class="productos_audio">
                <h1>Audifonos</h1>
                <div class="productos_audio_img1">
                    <img src="img/alquiler/audifonoss.png" alt="">
                </div>
                <button>Agregar producto</button>
            </article> 
            <article class="productos_audio">
                <h1>Microfono</h1>
                <div class="productos_audio_img">
                    <img src="img/alquiler/microfonoo.png" alt="">
                </div>
                <button>Agregar producto</button>
            </article>
            <article class="productos_audio">
                <h1>Estabilizador</h1>
                <div class="productos_audio_img">
                    <img src="img/alquiler/estabilizador.png" alt="">
                </div>
                <button>Agregar producto</button>
            </article>
        </div>
        <div class="section">
        <div class="send">
            <a href="periodo" class="next">Siguiente</a>
            </div>
        </div>
    </form>
</main>

@endsection