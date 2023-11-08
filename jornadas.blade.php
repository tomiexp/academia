@extends('plantillas.header')

@section('contenido')
   <link rel="stylesheet" href="styles/acursos/jornada.css">
   <link rel="stylesheet" href="styles/acursos/menucursos.css">
   <title>Jornadas</title>

<section class="campos">
   <div class="menuc">
      <nav>
         <ul style="list-style-type: none">
         <li><a href="asignacioncursos" class="lista">Cursos</a></li>
         <li><a href="horarios" class="lista">Programación</a></li>
         <li><a href="jornadas" class="lista">Jornadas</a></li>
         <li><a href="especialidad" class="lista">Especialidad</a></li>
         <li><a href="profesores" class="lista">Profesores</a></li>
         <ul>
      </nav>
   </div>

   <section class="seccion_micuenta1">
    <section class="seccion_micuenta2">     
    <section class="jornadas">
        <div>
        <h1>Jornadas</h1>
        </div>
        <div class="columnas">
        <div class="caja1">
           <a href="horarios">
           <img src="img/acursos/manana.jpg">
           <div class="caja2">
            <h2>Jornada Mañana</h2>
            <p class="info">Esta jornada va de 09:00 a.m. a 12:00 m.</p>
        </div>
        </a>
        </div>
    <div class="caja1">
        <a href="horarios">
           <img src="img/acursos/tarde.jpg">
        <div class="caja2">
            <h2>Jornada Tarde</h2>
            <p class="info">Esta jornada va de 01:00 m. a 05:00 p.m.</p>
        </div>
        </a>
        </div>
    <div class="caja1">
        <a href="horarios">
           <img src="img/acursos/noche.jpg">
        <div class="caja2">
            <h2>Jornada Noche</h2>
            <p class="info">Esta jornada va de 06:00 p.m. a 08:00 p.m.</p>
        </div>
        </a>
        </div>
    </div>
    </section>
    </section>
   </section>
</section>   

@endsection