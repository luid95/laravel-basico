@extends('layout') <!-- para hacer uso de la plantilla de resources/views/layout -->

@section('title', 'Contact')<!-- nombre al titulo de la vista -->

<!-- Recibe el parametro de donde se va a insertar el contenido  -->
@section('content')
    <!-- Para traducir el titulo de la pagina de Contact 
            el archivo se encuentra en la archivo /resources/lang/es.json-->
    <h1>{{ __('Contact') }}</h1>

    <form method="POST" action="{{ route('contact') }}">
        @csrf <!-- verificar el token del usuario para no cerrarle la pagina 
                    siempre agregar en la directiva de los formularios-->

        <input name="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}

        <input type="text" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <input name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}

        <textarea name="content" placeholder="Mensaje...">{{ old('content') }}</textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}

        <button>@lang('Send')</button>
    </form>

@endsection