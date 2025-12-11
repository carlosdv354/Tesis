<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H Producciones Chile</title>
</head>
<body>
    @include('layout.header')
    <h1>contactos</h1>
        <form action="{{ route('enviar') }}" method="POST">
        @csrf

        <div>
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre">
        </div>

        <br>

        <div>
            <label for="correo">Correo electrónico:</label><br>
            <input type="email" id="correo" name="correo" placeholder="tucorreo@ejemplo.com">
        </div>

        <br>

        <div>
            <label for="asunto">Asunto:</label><br>
            <input type="text" id="asunto" name="asunto" placeholder="Asunto del mensaje">
        </div>

        <br>

        <div>
            <label for="mensaje">Mensaje:</label><br>
            <textarea id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje aquí..."></textarea>
        </div>

        <br>

        <button type="submit">Enviar</button>
    </form>
    @include('layout.footer')
</body>
</html>