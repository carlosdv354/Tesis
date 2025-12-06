<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactoMailable;

class mailController extends Controller
{
    public function enviar(Request $request)
    {
        $request->validate([
            'nombre'  => 'required|string|max:50',
            'correo'  => 'required|email',
            'asunto'  => 'required|string|max:100',
            'mensaje' => 'required|string|max:1000',
        ]);

        $data = $request->only('nombre', 'correo', 'asunto', 'mensaje');

        Mail::to('cdestefano5@gmail.com')->send(new contactoMailable($data));

        return back()->with('success', 'Tu mensaje fue enviado correctamente.');
    }
}
