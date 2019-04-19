<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         

        <title>@yield('pageTitle')</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Cargo links externos -->
        <link rel='stylesheet' href='/css/primera.css'>
        @section('estilos')
        @show

        <!-- Cargo scripts externos -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @section('javascripts')
        @show        

    </head>
    <body>
        <!-- Codigo de la barra -->
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="/">Inicio</a>
            <form class="form-inline">
                <button class="btn btn-outline-success registrarme" href="/registrarme">Registrarme</button>
                <button class="btn btn-outline-success" href="/inicioSesion">Iniciar Sesion</button>
            </form>
        </nav>

        @section('body')
        @show      

        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>