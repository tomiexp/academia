@extends('plantillas.iniciosesion')
@section('contenido')
    <title>Iniciar sesión</title>
    <h1>¡INICIA SESIÓN!</h1>
    <form action="{{route('login')}}" method="post">
        @csrf
        <label for="email">Correo electrónico:</label>
        <input class="campos" name="email" id="email" type="email" required placeholder="Ingresa tu correo electrónico">
        <label for="password">Contraseña:</label>
        <input class="campos" name="password" id="password" type="password" required placeholder="Escribe tu contraseña">
        <p>@yield('error')</p>
        <p><a href="cambiarcontraseña">¿Olvidaste tu contraseña?</a></p>
        <input class="submit" type="submit" value="Iniciar Sesión">
        <p>¿No tienes una cuenta? <a href="registrarse_1">¡Regístrate aquí!</a></p>
    </form>
@endsection