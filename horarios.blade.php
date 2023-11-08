@extends('plantillas.header')

@section('contenido') 
   <link rel="stylesheet" href="styles/acursos/horario.css">
   <link rel="stylesheet" href="styles/acursos/menucursos.css">
   <title>Programación</title>

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

      <section class="titulo"> 
         <div class="title">  
         <h1>PROGRAMACIÓN</h1>   
         </div>

        <div class="imagenh">  
            <img src="img/acursos/horario.png">
         </section> 
    </section>
   </section>
</section>   

@endsection