<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Cambiar al lenguaje que querramos tener nuestra pagina dinamicamente

App::setlocale('es');
/*
Route::get('/', function () {
    //return view('welcome');
    return "Hola desde la pagina de inicio";
});

Route::any('contacto', function () {
    return "Hola desde la pagina de contacto";
});
//definir parametro obligatorios
Route::get('saludo/{nombre}', function ($nombre) {
    return "Saludos " . $nombre;
});

//parametros opcionales
Route::get('saludo/{nombre?}', function ($nombre = 'Invitado') {
    return "Saludos " . $nombre;
});

//RUTAS CON NOMBRE

Route::get('contactanos', function () {
    return "Seccion de contactos";
})->name('contactos');

Route::get('page2', function () {
    echo " <a href= '" . route('contactos') . "' > Contactos 1 </a><br> ";
    echo " <a href= '" . route('contactos') . "' > Contactos 2 </a><br> ";
    echo " <a href= '" . route('contactos') . "' > Contactos 3 </a><br> ";
    echo " <a href= '" . route('contactos') . "' > Contactos 4 </a><br> ";
    echo " <a href= '" . route('contactos') . "' > Contactos 5 </a><br> ";
});

//MOSTRAR HTML CON VISTAS

Route::get('inicio', function () {
    return view('welcome');
})->name('home');
*/

//DIFERENTES MANERAS DE DECLARAR LAS VISTAS

//Route :: view('/', 'home')->name('home'); //Politicas de privacidad, terminos y condiciones //// paginas que no requieren de mucha logica
/*
Route::get('/', function () {
    $nombre = "Jorge";

    //return view('home')->with('nombre', $nombre); //!er forma de declarar una vista con paso de variable php
    //return view('home')->with(['nombre' => $nombre]); //2da forma de declarar una vista con paso de variable php
    //return view('home',['nombre' => $nombre]); //3er forma de declarar una vista con paso de variable php 
    //return view('home', compact('nombre')); //
})->name('home');
*/

/* $portfolio = [
    ['title' => 'Proyecto #1'],
    ['title' => 'Proyecto #2'],
    ['title' => 'Proyecto #3'],
    ['title' => 'Proyecto #4'],
]; */
//Route :: view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio');

//url como primer parametro
//nombre del controlador como segundo parametro
//para utilizarlo en el metodo invoke del controlador de protfolioController
//tambien podemos hacer uso especificando que metodo queremos que se ejecute agregando un @ y el nombre del metodo que se desea ejecutar
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route :: view('/', 'home')->name('home');
Route :: view('/about', 'about')->name('about');
Route :: view('/contact', 'contact')->name('contact');

//con el metodo route-resource 
//Route::resource('projects', 'PortfolioController');

// Crear nueva ruta para procesar los mensajes del controlador

Route::post('contact', 'MessagesController@store');