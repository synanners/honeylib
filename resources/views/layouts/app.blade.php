<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        main{
            background: url("img/feutech_bg.png") left no-repeat;
            background-size: cover;
        }
        .logo {
            width: 200px;
            height: 230px;

            position: center;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;

            padding-top: 20px;

            margin: auto;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: black">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <p style="color: yellow;">
                        <img src = "https://openclipart.org/image/2400px/svg_to_png/147367/1309128948.png"
                             style=" max-height: 40px; max-width: 40px"/>
                        {{ config('app.name', 'Laravel') }}
                    </p>
                </a>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
