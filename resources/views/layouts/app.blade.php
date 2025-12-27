<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H Producciones Chiles</title>
        <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
      rel="stylesheet"
    >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
     rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/css/contactos.css', 'resources/css/servicios.css', 'resources/css/home.css',
    'resources/js/app.js'])
</head>
<body>

    @include('layouts.header')
    @include('layouts.navbar')

    <main class="container">
        @yield('content')
    </main>

    @include('layouts.footer')

</body>
</html>
