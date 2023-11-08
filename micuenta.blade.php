@extends('plantillas.header')
@section('contenido')
    <title>Mi cuenta</title>
    <link rel="stylesheet" href="styles/cuenta/micuenta.css">

    <section class="seccion_micuenta1">
        <h1 class="micuenta">MI CUENTA</h1>
        <section class="seccion_micuenta2">
            <div class="cuenta_perfil">
                <h1 class="nombre">Camila</h1>
                <h1 class="apellidos">Pérez Astroza</h1>
                <p>camila_as06@gmail.com</p>
                <div class="imagenusuario">
                    <img src="img/logos/logoletra.png" alt="imagenusuario">
                </div>
            </div>
                <div class="cuenta_info">
                    <section>
                        <div>
                            <ol style="list-style-type: none">
                                <label class="cuenta_label" for="tipo_doc">Tipo de documento:</label>
                                <li class="usuario_info">Cédula</li>
                                <label class="cuenta_label" for="num_doc">Número de documento:</label>
                                <li class="usuario_info">1014304618</li>
                                <label class="cuenta_label" for="num_telefono">Número de teléfono:</label>
                                <li class="usuario_info">3205687452</li>
                            </ol>
                        </div>
                        <div>
                            <ol style="list-style-type: none">
                                <label class="cuenta_label" for="direccion">Dirección:</label>
                                <li class="usuario_info">Calle 129a bis #91-54</li>
                                <label class="cuenta_label" for="fecha:nacimiento">Fecha de nacimiento:</label>
                                <li class="usuario_info">25/06/2000</li>
                                <label class="cuenta_label" for="genero">Género:</label>
                                <li class="usuario_info">Femenino</li>
                            </ol>
                        </div>
                    </section>
                    <div class="cuenta_botones">
                        <a href="editarinfo" class="botones_cuenta">Editar información</a>
                        <a href="cambiarcontraseña" class="botones_cuenta">Cambiar Contraseña</a>
                    </div>
                </div>
        </section>
    </section>
@endsection
