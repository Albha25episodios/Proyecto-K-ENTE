<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $metaTitle ?? 'Default title' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default description' }}" />

    {{-- ============================== google fonts  ============================== --}}
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    {{-- ============================== bootstrap styles  ============================== --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- ============================== bootstrap icons  ============================== --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Recursos propios --}}
    @vite(['resources/css/style2.css', 'resources/css/style.css', 'resources/js/main.js', 'resources/js/app.js'])
</head>

<body>
    <x-partials.navigation />

    <div class="container my-5">
        <div class="alphabet-nav text-center">
            <ul class="alphabet-list list-inline">
                <li class="list-inline-item">A</li>
                <li class="list-inline-item">B</li>
                <li class="list-inline-item">C</li>
                <li class="list-inline-item">D</li>
                <li class="list-inline-item">E</li>
                <li class="list-inline-item">F</li>
                <li class="list-inline-item">G</li>
                <li class="list-inline-item">H</li>
                <li class="list-inline-item">I</li>
                <li class="list-inline-item">J</li>
                <li class="list-inline-item">K</li>
                <li class="list-inline-item">L</li>
                <li class="list-inline-item">M</li>
                <li class="list-inline-item">N</li>
                <li class="list-inline-item">O</li>
                <li class="list-inline-item">P</li>
                <li class="list-inline-item">Q</li>
                <li class="list-inline-item">R</li>
                <li class="list-inline-item">S</li>
                <li class="list-inline-item">T</li>
                <li class="list-inline-item">U</li>
                <li class="list-inline-item">V</li>
                <li class="list-inline-item">W</li>
                <li class="list-inline-item">X</li>
                <li class="list-inline-item">Y</li>
                <li class="list-inline-item">Z</li>
            </ul>
        </div>
        <h2 class="text-center">Busca aquí una palabra</h2>
        <div class="search-container d-flex justify-content-center my-4">
            <input type="text" class="form-control search-input" placeholder="Escribe aquí...">
            <button class="btn btn-success search-button">BUSCAR</button>
        </div>
    </div>

    <div>
        <p>'Contenedor variable'</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    {{-- <script src="{{ asset('resources/js/app.js') }}"></script> --}}
</body>

</html>
