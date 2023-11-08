@extends('plantillas.header')

@section('contenido')
   <link rel="stylesheet" href="styles/acursos/acursos.css">
   <link rel="stylesheet" href="styles/acursos/menucursos.css">
   <title>Cursos</title>
   
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
 
      <div class="video">
      <a href="especialidad">
         <video width="250px" controls loop onmouseover="this.play()" onmouseout="this.play();" muted="muted">

             <source src="videos/acursos.mp4">
            </video>
      </div>

    <div class="form">
        <form>
   
   <h1>Asignación de Cursos</h1>
   
   <div class="options">  
      <label for="opciones">Selecciona un plan:</label>
      <select id= "plan" name="opciones">
      <option value="">Selecciona una opción</option>
      <option value="fan">Fan (12 Clases)</option>
      <option value="Completo">Completo (24 Clases)</option>
      <option value="Superfan">Super fan (36 Clases)</option>
   </select>
   </div>
   <div class="options">   
      <label for="opciones">Selecciona una jornada:</label>
      <select id= "jornada" name="opciones">
      <option value="">Selecciona una opción</option>
      <option value="mañana">Mañana</option>
      <option value="tarde">Tarde</option>
      <option value="noche">Noche</option>
      <option value="mixta">Mixta</option>
   </select>
   </div>
   <div class="options"> 
      <label for="opciones">Selecciona un horario:</label>
      <select id= "horario" name="opciones">
      <option value="">Selecciona una opción</option>
      <option value="entre semana">Entre semana</option>
      <option value="fin de semana">Fin de semana</option>
      <option value="fin de semana">Mixto</option>
   </select>
   </div>
   <div class="options">
      <label for="opciones">Selecciona un nivel:</label>
      <select id= "nivel" name="opciones">
      <option value="">Selecciona una opción</option>
      <option value="basico">Básico</option>
      <option value="intermedio">Intermedio</option>
      <option value="avanzado">Avanzado</option>
   </select>
   </div> 
   
   <div class="checkbox"> 
   <div class="jueves">
      
      <h3>Selecciona las clases del <br>Jueves</h3>
      <br>
      <label for="title"><input type="checkbox" name="k5pm" id="k5pm">  Kpop (5 p.m.)</label>
      <label for="title"><input type="checkbox" name="p6pm" id="p6pm">  Pop (6 p.m.)</label>
      <label for="title"><input type="checkbox" name="r7pm" id="r7pm">  Regageton (7 p.m.)</label>
      
   </div>
   <div class="viernes">
      
      <h3>Selecciona las clases del <br>Viernes</h3>
      <br>
      <label for="title"><input type="checkbox" name="r5pm" id="r5pm">  Reggaeton (5 p.m.)</label>
      <label for="title"><input type="checkbox" name="k6pm" id="k6pm">  Kpop (6 p.m.)</label>
      <label for="title"><input type="checkbox" name="c7pm" id="c7pm">  Coreo (7 p.m.)</label>
      
   </div>  
   <div class="sabado">
      
      <h3>Selecciona las clases del <br>Sábado</h3>
      <br>
      <label for="title"><input type="checkbox" name="p9am" id="p9am">  Pop (9 a.m.)</label>
      <label for="title"><input type="checkbox" name="k10am" id="k10am">  Kpop (10 a.m.)</label>
      <label for="title"><input type="checkbox" name="r11am" id="r11am">  Regageton (11 a.m.)</label>
      <label for="title"><input type="checkbox" name="c12m" id="c12m">  Coreo (12 m.)</label>
      <label for="title"><input type="checkbox" name="k1pm" id="k1pm">  Kpop (1 p.m.)</label>
      
   </div>  
   <div class="domingo">
      
      <h3>Selecciona las clases del <br>Domingo</h3>
      <br>
      <label for="title"><input type="checkbox" name="k9am" id="k9am">  Kpop (9 a.m.)</label>
      <label for="title"><input type="checkbox" name="r10am" id="r10am">  Regageton (10 a.m.)</label>
      <label for="title"><input type="checkbox" name="p11am" id="p11pm">  Pop (11 a.m.)</label>
      <label for="title"><input type="checkbox" name="c12m" id="c12m">  Coreo (12 m.)</label>
      <label for="title"><input type="checkbox" name="k1pm" id="k1pm">  Kpop (1 p.m.)</label>
      
   </div>   
   <div class="festivo">
      
      <h3>Selecciona las clases del <br>Festivo</h3>
      <br>
      <label for="title"><input type="checkbox" name="p9am" id="p9am">  Pop (9 a.m.)</label>
      <label for="title"><input type="checkbox" name="k10am" id="k10am">  Kpop (10 a.m.)</label>
      <label for="title"><input type="checkbox" name="r11am" id="r11am">  Regageton (11 a.m.)</label>
      <label for="title"><input type="checkbox" name="c12m" id="c12m">  Coreo (12 m.)</label>
      <label for="title"><input type="checkbox" name="k1pm" id="k1pm">  Kpop (1 p.m.)</label>
      
   </div>   
   </div>
   <br>
   <input type="submit" class="boton" value="Enviar">
   </form>   
   </div>
   </section>
</section>
</section>


@endsection
