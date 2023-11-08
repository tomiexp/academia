@extends('plantillas.header')
@section('contenido')
<link rel="stylesheet" href="styles/pagos/pagos_3.css">
<title>Pagar</title>
<html>
<div class="todo">
    <div class="titulo">
        <h1>Pagos online</h1>
    </div>
    <div class="info">
        <h1>¡¡Ya estas en el final!! </h1>
        <p>Guau, ya vas en la ultima estapa de tu pago, vas a dsifrutas mucho lo que vas a comprar.</p>
        <p>Si tienes algun problema con tu pago comunicate con nosotros <a href="https://api.whatsapp.com/send?phone=573238137184">aqui</a>.</p>
    </div>
    <label class="proceso">Acabaste</label>
    <div class="progress-bar">
        <div class="progress"></div>
    </div>
    <div class="idpago">
        <h1>Tu referencia de pagos es:</h1>
        <label>N0001</label>
    </div>
    <div class="factura">
        <label>Valor:</label>
        <label class="pre">$50000</label>
        <label>Valor impuesto:</label>
        <label class="pre">$0</label>
        <br>
        <br>
        <span>Descripcion del pago:</span>
        <span class="inf">curso de kpop</span>
        <br>
        <br>

        <span class="fec">Fecha de pago</span>
        <span class="inf">12/2/2023</span>
        <div class="Explora">
            <h3>Explora más:</h3>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Más cursos</a></li>
                <li><a href="#">Mis clases</a></li>
                <li><a href="#">Productos alquiler</a></li>
                <li><a href="#">Programar </a></li>
            </ul>
        </div>
        <div class="contac">
            <h3>¿Tienes alguna pregunta?</h3>
            <p>No dudes en contactarnos:</p>
            <p>Teléfono: <span>(+57) 3238237184</span></p>
            <p>Correo electrónico: <span>info@tudominio.com</span></p>
        </div>

</div>
</html>
@endsection
