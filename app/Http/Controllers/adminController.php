<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Tiket;

class adminController extends Controller
{
        public function calendar(){
        return view('admin.calendario');
    }
        public function rcv_calendar(Request $request){


            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                return view('admin.formulario_agenda',compact('request'));
                #return view('admin.test_recv_calendar',compact('request'));

                }
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                return view('admin.test_recv_calendar');
                }
        return '<h1> 1 </h1>';
            }

        public function rcv_calendar_2(){

            return '<h1> 1 </h1>';

        }
        public function add_admin_form(){
            return view('admin.form_add_admin');
        }
        public function login(Request $request){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $credenciales = [
                "email" => $request->email,
                "password" => $request->password,
                ];
                $remember = ($request->has('remember') ? true : false);

                if (Auth::attempt($credenciales,$remember)){
                    $request->session()->regenerate();
                    return redirect()->intended(route('calendar'));
                }else{
                    return redirect('login');
                } 
                return view('admin.formulario_agenda',compact('request'));
                }
                if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                    return view('admin.login_form');
                }
            return '<h1> error request Method </h1>';
        }
        public function logout(Request $request){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect(route('home'));
        }
        public function add_admin(Request $request){

            $user = new User();
            $user->name =$request->name;
            $user->email =$request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            return $user;
            #return $request;

        }
        public function add_tiket(Request $request){
            return $request;
            //validar tiket
            //si tiket valido
                // creat tiket
                //redirigir a lista de tikets
            // tike no valido
                //redirigir a crear tiket a crear tiket con mensaje de error

        }

        public function test_tiket(){
            $tiket = Tiket::find(3);
            #$tiket->delete();
            return view('admin.test_tiket', compact('tiket'));
            #return 'd';


        }

        public function rcv_form(Request $request){
            $nTiket = new Tiket();
            $nTiket->cliente = $request->Nombre_Reserva;
            $nTiket->fechaHoraEvento = $request->diaReserva;
            #$nTiket->fechaHoraEvento = $request->diaReserva;
            $nTiket->estado = $request->estado;
            $nTiket->descripcion = $request->descripcion;
            $nTiket->save();
            #return $request;
            return $nTiket;
        }
        public function verTikets(Request $request){
            $tiketsList = Tiket::orderBy('id')->get();
            return $tiketsList;
        }




    
}
