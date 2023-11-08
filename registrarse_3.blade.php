@extends('plantillas.registro')
@section('contenido')
    <label for="fecha_nacimiento">Fecha de nacimiento:</label>
    <input class="campos" type="date" id="fecha_nacimiento" name="fecha_nacimiento" required value="Selecciona tu fecha de nacimiento">
    <label for="genero">Escoge tu género:</label>
    <select class="select" name="genero" id="genero" required>
        <option disabled selected value="">Selecciona tu género</option>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
        <option value="otro">Otro</option>
        <option value="no_decir">Prefiero no decirlo</option>
    </select>
    @yield('error')
    <input class="submit" type="submit" value="Continuar">
    <p><a href="registrarse_2">Regresar</a></p>
@endsection
