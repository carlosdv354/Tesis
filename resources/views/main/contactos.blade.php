@extends('layouts.app')

@section('content')
<div class="row justify-content-center my-4">
    <!-- MAPA -->
    <div class="col-md-6 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-body p-0">
                <iframe
                    src="https://www.google.com/maps?q=SOFOParque,+Temuco,Chile&hl=es&z=14&output=embed"
                    width="100%"
                    height="100%"
                    style="border:0; min-height:450px;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
    <!-- FORMULARIO -->
    <div class="col-md-6 col-lg-5">

        <form action="{{ route('enviar') }}" method="POST" class="card p-4 shadow-sm">
            @csrf

            <div class="mb-3">
                  <div class="card-body">
                <h3>¿Tienes alguna pregunta o comentario? ¡Nos encantaría saber de ti! Completa el formulario a continuación y nos pondremos en contacto contigo lo antes posible.</h3>
            </div>
            <label for="nombre" class="form-label">Nombre</label>
                <input 
                    type="text" 
                    id="nombre" 
                    name="nombre" 
                    class="form-control"
                    placeholder="Tu nombre">
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo electrónico</label>
                <input 
                    type="email" 
                    id="correo" 
                    name="correo" 
                    class="form-control"
                    placeholder="tucorreo@ejemplo.com">
            </div>

            <div class="mb-3">
                <label for="asunto" class="form-label">Asunto</label>
                <input 
                    type="text" 
                    id="asunto" 
                    name="asunto" 
                    class="form-control"
                    placeholder="Asunto del mensaje">
            </div>

            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea 
                    id="mensaje" 
                    name="mensaje" 
                    class="form-control"
                    rows="4"
                    placeholder="Escribe tu mensaje aquí..."></textarea>
            </div>

            <button type="submit" class="btn btn-gold">
                Enviar mensaje
            </button>
        </form>
    </div>
</div>

<div class="row justify-content-center mt-4">
    <!-- INSTAGRAM -->
    <div class="col-md-2 mb-3">
        <a href="https://www.instagram.com/carlangas645/"
           target="_blank"
           class="text-decoration-none">
            <div class="card shadow-sm text-center h-100">
                <div class="card-body">
                    <i class="bi bi-instagram fs-1 text-danger"></i>
                    <h5 class="mt-2">Instagram</h5>
                    <p class="mb-0">H producciones Chile</p>
                </div>
            </div>
        </a>
    </div>

    <!-- WHATSAPP -->
    <div class="col-md-2 mb-3">
        <a href="https://wa.me/56983185824?text=Hola%20quisiera%20cotizar%20un%20catering"
           target="_blank"
           class="text-decoration-none">
            <div class="card shadow-sm text-center h-100">
                <div class="card-body">
                    <i class="bi bi-whatsapp fs-1 text-success"></i>
                    <h5 class="mt-2">WhatsApp</h5>
                    <p class="mb-0">+56 9 8318 5824</p>
                </div>
            </div>
        </a>
    </div>

</div>
@endsection