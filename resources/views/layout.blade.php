<!DOCTYPE html>
<html>
    <head>

        <title>@yield('title', 'Aprendible')</title> <!-- colocar el titulo de cada vista, con un nombre predeterminado en el caso de no tener nombre -->
        <style>

            .active a{
                color: red;
                text-decoration: none;
            }
        </style>

    </head>
    <body>
        @include('partials/nav')
        <!-- para agregar contenido dinamicamente a mi html-->

        @yield('content')
    </body>
</html>