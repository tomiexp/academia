@extends('plantillas.header')
@section('contenido')
<title>Alquiler</title>
    <link rel="stylesheet" href="styles/alquiler/vestuarios.css">
    <main class="principal">
        <div class="clases">
            <a href="vestuario" class="choose">Vestuarios</a>
            <a href="audiovisual" class="choose">Audiovisual</a>
        </div>

        <form action="POST" id="alquiler" class="alquiler">
            <div class="contenedor_vestuario">
                <article class="productos_vestuario">
                    <h2>Estilo</h2>
                    <div class="productos_vestuario_img">
                        <img src="img/alquiler/estilo.png">
                    </div>
                    <select name="estilo" id="">
                        <option value="" disabled selected>Seleccionar</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                    </select>
                </article>
                <article class="productos_vestuario">
                    <h2>Curso</h2>
                    <div class="productos_vestuario_img">
                        <img src="img/alquiler/cursos.png">
                    </div>

                    <select name="curso" id="">
                        <option value="" disabled selected>Seleccionar</option>
                        <option value="reggaeton">Reggaeton</option>
                        <option value="k-pop">K-pop</option>
                    </select>
                </article>
                <article class="productos_vestuario">
                    <h2>Superior</h2>
                    <div class="productos_vestuario_img2">
                        <img src="img/alquiler/superior.png">
                    </div>
                    <div class="opciones">
                        <select name="tallas" id="">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="xs">XS</option>
                            <option value="s">S</option>
                            <option value="m">M</option>
                            <option value="l">L</option>
                        </select>
                    </div>
                </article>
                <article class="productos_vestuario">
                    <h2>Inferior</h2>
                    <div class="productos_vestuario_img">
                        <img src="img/alquiler/inferior.png">
                    </div>
                    <div class="opciones">
                        <select name="tallas" id="">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="xs">XS</option>
                            <option value="s">S</option>
                            <option value="m">M</option>
                            <option value="l">L</option>
                        </select>
                    </div>
                </article>
            </div>
            <div class="section">
                <article class="productos_vestuario_aparte">
                    <h2>Calzado</h2>
                    <div class="productos_vestuario_img3">
                        <img src="img/alquiler/calzado.png">
                    </div>
                    <div class="opciones">
                        <select name="calzado" id="">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                        </select>
                    </div>
                </article>
                <div class="send">
                    <a href="audiovisual" class="next">Siguiente</a>
                </div>
            </div>
        </form>
    </main>
@endsection
