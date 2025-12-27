
<?php 

$fecha = "2025-12-21";

$fe = $request->date;
$var = json_decode($fe);

$e = $var->date;

$fecha = explode('T', $e)[0];

$hora_minima = "09:00";

?>






@extends('admin.layouts.app_admin')

@section('content')

<div>
     <div class ='container'>
        <div class='row'>
            <div class="col">
            </div>

            <div class="col-6">
                <div >

                    <form action={{route('rcv_form')}} method="POST">
                        @csrf


                        <div>
                            <label for="reserve_date"> Fecha de la reserva </label>
                            <input type="date" id="reserve_date" readonly="True" value={{$fecha}} name="diaReserva">
                        </div>

                        <div>
                            <label for="estado"> estado reserva </label>
                            <input type=text id="estado" value="" name="estado">
                        </div>


                        <navbar>
                            <nav>
                                 <div>
                                    <label for="Fecha_Inicio"> Hora de Inicio </label>
                                    <input type="time" id="Fecha_Inicio" value="09:00" min={{$hora_minima }} name="horaInicio">
                            </div>
                            </nav>
                            
                            <nav>
                                <div>
                                    <label for="Fecha_Termino"> Hora de Termino </label>
                            <input type="time" id="Fecha_Termino" value="" name="horaTermino">

                            </div>
                            </nav>
                        </navbar>


                        
                        <nav>
                            
                           
                            
                        </nav>
                            
                        <div>
                            
                        </div>
                        <div>
                            <label for="Nombre_Reserva"> Nombre Reserva </label>
                            <input type="text" id="Nombre_Reserva" value="" name="Nombre_Reserva">
                        </div>
                                                <div>
                            <label for="Apillido_Reserva"> Apillido Reserva </label>
                            <input type="text" id="Apillido_Reserva" value="">
                        </div>
                        <div>
                            <label for="descripcion"> Descripcion de la Reserva </label>
                            <textarea name="descripcion" id="descripcion">
                            </textarea>

                        </div>



                        <button type="submit" class="btn btn-gold">
                        Agendar Evento
                        </button>
                    </form>










                    <h1 >

                        
                       
                    </h1>
                </div>
            </div>
            <div class="col">

             </div>
        </div>
        

    </div>
</div>

@endsection

