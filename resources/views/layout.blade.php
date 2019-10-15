<!DOCTYPE html>
<html>
    <head>

        <title>@yield('title', 'Aprendible')</title> <!-- colocar el titulo de cada vista, con un nombre predeterminado en el caso de no tener nombre -->

    </head>
    <body>
        <nav>
            <ul>
                <li><a href=../public/ >Home</a></li>
                <li><a href=../public/about>About</a></li>
                <li><a href=../public/portfolio>Portfolio</a></li>
                <li><a href=../public/contact>Contact</a></li>
            </ul>
        </nav>
        <!-- para agregar contenido dinamicamente a mi html-->

        @yield('content')
    </body>
</html>