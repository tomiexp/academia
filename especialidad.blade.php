@extends('plantillas.header')

@section('contenido')

   <link rel="stylesheet" href="styles/acursos/especialidad.css">
   <link rel="stylesheet" href="styles/acursos/menucursos.css">
   <title>Especialidad</title>

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
        <h1>Especialidades</h1>
        </div>
        <div class="columnas">
        <div class="caja1">
           <a href="horarios">
            <video width="250px" controls loop onmouseover="this.play()" onmouseout="this.pause();" muted="muted">
                <source src="videos/coreo.mp4">
               </video>
           <div class="caja2">
            <h2>Coreografía</h2>
            <p class="info"> 
                Contamos con profesores especializados<br>
                en creación de coreografías en todos <br>
                los géneros de la academía.
            </p>
        </div>
        </a>
        </div>
    <div class="caja1">
        <a href="horarios">
           <video width="250px" controls loop onmouseover="this.play()" onmouseout="this.pause();" muted="muted">
            <source src="videos/kpop.mp4">
           </video>
        <div class="caja2">
            <h2>Kpop</h2>
            <p class="info">
                Contamos con profesores especializados<br>
                en coreografías de kpop de todos<br>
                solistas, boybands y girlbands.
            </p>
        </div>
        </a>
        </div>
    <div class="caja1">
        <a href="horarios">
            <video width="250px" controls loop onmouseover="this.play()" onmouseout="this.pause();" muted="muted">
                <source src="videos/pop.mp4">
               </video>
        <div class="caja2">
            <h2>Comercial</h2>
            <p class="info">
                Contamos con profesores especializados<br>
                en creación de coreografías en todos <br>
                en los géneros comerciales.
            </p>
        </div>
        </a>
        </div>
    <div class="caja1">
            <a href="horarios">
                <video width="250px" controls loop onmouseover="this.play()" onmouseout="this.pause();" muted="muted">
                    <source src="videos/reggaeton.mp4">
                   </video>
            <div class="caja2">
                <h2>Reggaeton</h2>
                <p class="info">
                    Contamos con profesores especializados<br>
                    en creación de coreografías en todos <br>
                    en los géneros reggaeton o urbano.
                </p>
            </div>
            </a>
            </div>
    </div>
    </section>
    </section>
   </section>
</section>   

@endsection