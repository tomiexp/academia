<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon " href="img/logos/logosolo.png">
    <link rel="stylesheet" href="styles/header/header.css">
    <link rel="stylesheet" href="styles/header/footer.css">
    <script src="https://kit.fontawesome.com/0bd1d8ecc3.js" crossorigin="anonymous"></script>
</head>

<body>

    <header class="header">
        <div class="contenedor">
            <div class="logo">
                <a href="#"><img src="img/logos/letrasinfondo.png" alt=""></a>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="asignacioncursos">Programar</a></li>
                        <li><a href="inscripciones">Inscripciones</a></li>
                        <li><a href="vestuario">Alquiler</a></li>
                    </ul>
                </nav>
            </div>
            <div class="botones">
                <a href="micuenta" class="registro">Mi cuenta</a>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                <a href="#x" onclick="this.closest('form').submit()" class="registro">Salir</a>
                </form>
            </div>
        </div>
    </header>

    @yield('contenido')

    <footer class="fut">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="">
                        <img src="img/logos/logosolobn.png" alt="Logo">
                    </a>
                </figure>
            </div>
            <div class="box">
                <small>&copy; 2023 <b>Express Yourself Academy </b>- todos los derechos reservados.</small>
            </div>
            <div class="box">
                <h2>SIGUENOS & CONTACTANOS</h2>
                <div class="redes-sociales">
                    <a href="https://www.tiktok.com/@expressyourselfacademy" class="fa-brands fa-tiktok"></a>
                    <a href="https://www.instagram.com/expressyourselfacademy/" class="fa fa-instagram"></a>
                    <a href="https://api.whatsapp.com/send?phone=573238137184" class="fa fa-whatsapp"></a>
                    <a href="mailto: express.yourself.academia@gmail.com" class="fa-solid fa-envelope"></a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
