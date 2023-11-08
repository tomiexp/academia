@extends('plantillas.registro')
@section('contenido')
    <label for="tipo_doc">Tipo de documento:</label>
    <select class="select" name="tipo_doc" id="tipo_doc" required>
        <option disabled selected value="">Selecciona tu tipo de documento</option>
        <option value="CC">Cédula de Ciudadanía</option>
        <option value="TI">Tarjeta de Identidad</option>
        <option value="CE">Cédula de Extranjería</option>
    </select>
    <label for="num_doc">Número de documento:</label>
    <input class="campos" type="text" name="num_doc" id="num_doc" required placeholder="Escribe tu número de documento">
    @yield('error')
    <input class="submit" type="submit" value="Continuar">
    <p><a href="registrarse_3">Regresar</a></p>
@endsection