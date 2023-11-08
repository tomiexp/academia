@extends('plantillas.registro')
@section('contenido')
    <label for="nombre">Nombre:</label>
    <input class="campos" type="text" name="nombre" id="nombre" required placeholder="Escribe tu nombre">
    <label for="apellidos">Apellidos:</label>
    <input class="campos" type="text" name="apellidos" id="apellidos" required placeholder="Escribe tus apellidos">
    @yield('error')
    <input class="submit" type="submit" value="Continuar">
    <p><a href="javascript: history.go(-1)">Regresar</a></p>
@endsection
