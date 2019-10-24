<nav>
    <!--    archivos parciales
            para agregar la navegacion -->
    <ul>
        <li class=" {{ setActive('home') }} "><a href=../public/ >@lang('Home')</a></li>
        <li class=" {{ setActive('about') }} "><a href=../public/about>@lang('About')</a></li>
        <li class=" {{ setActive('portfolio') }} "><a href=../public/portfolio>@lang('Portfolio')</a></li>
        <li class=" {{ setActive('contact') }} "><a href=../public/contact>@lang('Contact')</a></li>
    </ul>
</nav>