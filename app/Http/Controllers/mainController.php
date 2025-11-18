<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function home(){
        return view('main.home');
    }

    public function contact(){
        return view('main.contactos');
    }
}
