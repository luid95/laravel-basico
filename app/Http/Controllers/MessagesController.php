<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //creamos el metodo store
    public function store(Request $request){
        //Precesar el formulario de contacto

        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);

        return "Datos validados";
    }
}
