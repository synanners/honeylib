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
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: black">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <p style="color: yellow;">
                        <img src="https://www.w3schools.com/howto/img_avatar2.png" style="border-radius: 50%; max-height: 40px"/>
                        {{ config('app.name', 'Laravel') }}
                    </p>
                </a>
            </div>
        </nav>

        <main class="py-4" style="background-image: url('https://www.w3schools.com/howto/img_avatar2.png');
            background-repeat: no-repeat;
            background-size: cover">
            @yield('content')
        </main>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
