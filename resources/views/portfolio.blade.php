@extends('layout') <!-- para hacer uso de la plantilla de resources/views/layout -->

@section('title', 'Portfolio')<!-- nombre al titulo de la vista -->

<!-- Recibe el parametro de donde se va a insertar el contenido  -->
@section('content')

    <h1>Portfolio</h1>

    <ul>
        @forelse($portfolio as $portfolioItem)

            <li>{{ $portfolioItem['title'] }} <pre>{{ vardump($loop) }}</pre></li>
        
        @empty
            <li>No hay proyetos para mostrar</li>

        @endforelse
    </ul>
@endsection