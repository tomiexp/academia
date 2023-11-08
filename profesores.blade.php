@extends('plantillas.header')

@section('contenido')

<link rel="stylesheet" href="styles/acursos/profesores.css">
<link rel="stylesheet" href="styles/acursos/menucursos.css">
<title>Profesores</title>

<section class="campos">
   <div class="menuc">
      <nav>
         <ul style="list-style-type: none">
         <li><a href="asignacioncursos" class="lista">Cursos</a></li>
         <li><a href="horarios" class="lista">Programación</a></li>
         <li><a href="jornadas" class="lista">Jornada</a></li>
         <li><a href="especialidad" class="lista">Especialidad</a></li>
         <li><a href="profesores" class="lista">Profesores</a></li>
         <ul>
      </nav>
   </div>

   <section class="seccion_micuenta1">
    <section class="seccion_micuenta2">
        
        <section class="titulo"> 
            <div>  
            <h1>Profesores</h1>   
            </div>

    <div class="contenedor">
    <figure>
        <img src="img/acursos/p1.jpg">
        <div class="capa">
            <h3>Profesor Andrés</h3>
            <p>Andrés Felipe Rodriguez Granada, un destacado bailarín de 29 años, ha perfeccionado su arte en 
                varios géneros desde 2009, incluyendo K-Pop, pop, latino, urbano, coreografía y danza comercial. 
                Su pasión no se limita a bailar; también busca compartir sus conocimientos y construir un exitoso 
                emprendimiento. Como maestro, se destaca por su enfoque adaptable y su deseo de ayudar a los 
                estudiantes a alcanzar sus metas en la danza. Además, ha establecido una exitosa academia de baile 
                que es un referente en la comunidad local. Con su compromiso y visión, Andrés es un modelo a seguir 
                en la danza y el emprendimiento.<br></p>
        </div>
    </figure>
    </div>

    <div class="contenedor">
        <figure>
            <img src="img/acursos/p2.jpg">
            <div class="capa">
                <h3>Profesor Kevin</h3>
                <p>Kevin Sebastian Rincón, de 27 años, es un destacado bailarín que ha cultivado su arte en 
                    diversos géneros, como K-Pop, danza urbana y pop, desde 2012. Su pasión por el baile se 
                    combina con su deseo de ser un maestro excepcional, adaptando su metodología de enseñanza 
                    a las necesidades individuales de sus estudiantes. Kevin no solo es un bailarín talentoso, 
                    sino también un maestro experimentado que inspira a sus estudiantes a explorar su potencial 
                    en el mundo del baile. Su compromiso con la enseñanza lo convierte en un modelo a seguir en 
                    la comunidad de la danza. Con tan solo 27 años, su futuro en la danza promete más logros 
                    notables.<br></p>
            </div>
        </figure>
        </div>

        <div class="contenedor">
            <figure>
                <img src="img/acursos/p3.jpg">
                <div class="capa">
                    <h3>Profesora Leonela</h3>
                    <p>Flora Leonela Carvajal Castañeda, a sus 22 años, es una destacada bailarina especializada 
                        en K-Pop y danza comercial. Su talento y pasión la han convertido en una inspiración para 
                        jóvenes de todo el mundo. Desde una temprana edad, desarrolló su habilidad en las mejores 
                        academias de baile y ahora comparte su conocimiento a través de una enseñanza rápida 
                        centrada en la retención de pasos y tiempos. Su objetivo es despertar el interés de los 
                        jóvenes en el baile y el arte, y su dedicación la ha convertido en un modelo a seguir en 
                        la comunidad de la danza. Con tan solo 22 años, Flora promete contribuciones continuas al 
                        mundo del arte.<br></p>
                </div>
            </figure>
            </div>

    </section>
   </section>
</section>   
</section>

@endsection