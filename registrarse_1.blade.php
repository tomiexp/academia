@extends('plantillas.registro')
@section('contenido')
<form action="{{route('register')}}" method="POST">
    @csrf
    <label for="email">Correo electrónico:</label>
    <input class="campos" name="email" id="email" type="email" required placeholder="Ingresa tu correo electrónico">
    <label for="password">Contraseña:</label>
    <input class="campos" name="password" id="password" type="password" required placeholder="Crea tu contraseña">
    @yield('error')
    <p>¿Estás de acuerdo con nuestros <a href="terminos_y_condiciones.html">Términos y Condiciones</a>?</p>
    <input class="submit" type="submit" value="Continuar">
    <p>Ya tienes una cuenta? <a href="iniciarsesion">¡Inicia sesión aquí!</a></p>
</form>
@endsection
