@extends('layouts.app')

@section('content')

<div class="container my-5">

    <div class="row justify-content-center align-items-center text-center my-4">
        <h2 class="fw-bold">Échale un vistazo a nuestros clientes satisfechos</h2>
    </div>

    <!-- Grupo 3 arriba -->
    <div class="row justify-content-center mb-3">
        <div class="col-md-4 mb-3">
            <div class="gallery-item">
                <img src="/image/Portafolio1.png">
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="gallery-item">
                <img src="/image/Portafolio2.png">
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="gallery-item">
                <img src="/image/Portafolio3.png">
            </div>
        </div>
    </div>

    <!-- Grupo 2 -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-4 mb-3">
            <div class="gallery-item">
                <img src="/image/Portafolio4.png">
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="gallery-item">
                <img src="/image/Portafolio5.png">
            </div>
        </div>
    </div>

    <!-- Grupo final 2 -->
    <div class="row justify-content-center">
        <div class="col-md-5 mb-3">
            <div class="gallery-item gallery-large">
                <img src="/image/Portafolio11.png">
            </div>
        </div>
        <div class="col-md-5 mb-3">
            <div class="gallery-item gallery-large">
                <img src="/image/Portafolio12.png">
            </div>
        </div>
    </div>

</div>

@endsection
