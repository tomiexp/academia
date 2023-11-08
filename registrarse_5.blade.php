@extends('plantillas.registro')
@section('contenido')
    <label for="num_telefono">Número de teléfono:</label>
    <input class="campos" type="text" name="num_telefono" id="num_telefono" required placeholder="Escribe tu número de teléfono">
    <label for="direccion">Dirección:</label>
    <input class="campos" type="text" name="direccion" id="direccion" required placeholder="Escribe tu dirección">
    @yield('error')
    <input class="submit" type="submit" value="Continuar">
    <p><a href="registrarse_4">Regresar</a></p>
@endsection