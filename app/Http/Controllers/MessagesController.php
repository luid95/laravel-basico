<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //creamos el metodo store
    public function store(Request $request){
        //Precesar el formulario de contacto

        $msg = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ],[
            //modificar los mensaje del formulario contacto
            'name.required' => __('I need your name')
        ]);


        //Enviar email
        Mail::to("morfek_david@hotmail.com")->queue(new MessageReceived($msg));

        return "Mensaje enviado";
    }
}
