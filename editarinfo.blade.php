@extends('plantillas.header')
@section('contenido')
    <title>Editar información</title>
    <link rel="stylesheet" href="styles/cuenta/editarinfo.css">

    <section class="editar1">
        <h1 class="titulo">EDITAR INFORMACIÓN</h1>
        <section class="editar2">
            <div class="cuenta_perfil">
                <form action="procesar_imagen.php" method="POST" enctype="multipart/form-data">
                    <div class="imagenusuario">
                        <img src="img/logos/logoletra.png" alt="imagenusuario">
                    </div>
                    <input class="botones_cuenta" type="submit" value="Seleccionar foto de perfil">
                </form>
            </div>
            <div class="cuenta_info">
                <section>
                    <div class="lista">
                        <ol style="list-style-type: none">
                            <label class="cuenta_label" for="nombre">Nombre:</label>
                            <input class="campos" type="text" name="nombre" id="nombre" value="Juan Diego">
                            <label class="cuenta_label" for="apellidos">Apellidos:</label>
                            <input class="campos" type="text" name="apellidos" id="apellidos" value="Nieto Lancheros">
                            <label class="cuenta_label" for="num_telefono">Número de teléfono:</label>
                            <input class="campos" type="text" name="num_telefono" id="num_telefono" value="3143089277">
                        </ol>
                    </div>
                    <div class="lista">
                        <ol style="list-style-type: none">
                            <label class="cuenta_label" for="tipo_doc">Tipo de documento:</label>
                            <select class="campos" name="tipo_doc" id="tipo_doc">
                                <option value="CC">Cédula de Ciudadanía</option>
                                <option value="TI">Tarjeta de Identidad</option>
                                <option value="CE">Cédula de Extranjería</option>
                            </select>
                            <label class="cuenta_label" for="num_doc">Número de documento:</label>
                            <input class="campos" type="text" name="num_doc" id="num_doc" value="1031807227">
                            <label class="cuenta_label" for="direccion">Dirección:</label>
                            <input class="campos" type="text" name="direccion" id="direccion" value="Calle 129b #89-17">
                        </ol>
                    </div>
                </section>
                <div class="cuenta_botones">
                    <input class="botones_cuenta" type="submit" value="Guardar cambios">
                    <a class="botones_cuenta" href="micuenta" class="botones_cuenta">Cancelar</a>
                </div>
            </div>
        </section>
    </section>
@endsection
