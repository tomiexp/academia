@extends('plantillas.iniciosesion')
@section('contenido')
    <title>Cambiar contraseña</title>
    <h1>¡CAMBIA TU CONTRASEÑA!</h1>
    <form method="post">
        <label for="correo">Correo electrónico:</label>
        <input class="campos" name="correo" id="correo" type="email" required placeholder="Ingresa tu correo electrónico">
        <label for="nueva_contraseña">Nueva contraseña:</label>
        <input class="campos" name="nueva_contraseña" id="nueva_contraseña" type="password" required
            placeholder="Crea tu nueva contraseña">
        <input class="submit" type="submit" value="Cambiar Contraseña">
        <p><a href="javascript: history.go(-1)">Cancelar</a></p>
    </form>
@endsection
