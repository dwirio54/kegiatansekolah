<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'laravel')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

         <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div id="app">
            @include('layouts.nav')
            <main class="">
                <div class="jumbotron">
                    <div class="container">
                        <h2>Management App</h2>
                        <h1>SMK Al-Bahri</h1>
                        <h5>Jl. Yon Armed 7 No.143, RT.003/RW.006, Cikiwul, Bantargebang, Kota Bks, Jawa Barat 17152</h5>
                    </div>
                </div>
                @yield('content')
            </main>
        </div>
    </body>
</html>
