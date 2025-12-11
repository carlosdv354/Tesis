<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function home(){
        return view('main.home');
    }

    public function services(){
        return view('main.servicios');
    }

    public function aboutUs(){
        return view('main.Nosotros');
    }

    public function contacts(){
        return view('main.contactos');
    }
    
}
