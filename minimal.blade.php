<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/errors/minimal.css">
    <link rel="icon " href="img/logos/logosolo.png">

    <title>Algo salio mal</title>

</head>

<body>
    <section class="error">
        <img src="img/errors/errors.png" alt="errors">
        <div class="errors">
            <div>
                @yield('code')
            </div>
            <div>
                @yield('message')
            </div>
        </div>
        <div class="info_error">
            @yield('info_error')
        </div>
        <a href="javascript: history.go(-1)">Regresar</a>
    </section>
</body>

</html>
