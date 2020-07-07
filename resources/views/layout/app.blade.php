<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    
</head>
<body>
    <nav class="grey darken-3">
        <div class="nav-wrapper  container">
            <a href="/" class="brand-logo">Laravel</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            @if (Route::has('login'))
                @auth
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ route('login') }}">login</a></li>
                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                @endauth
            @endif
                <li><a href="/user/index">Home</a></li>
                <li><a href="/user/about">About</a></li>
                <li><a href="/user/service">Service</a></li>
                <li><a href="/posts/">Story</a></li>

            </ul>
        </div>
    </nav>
    <main class="">
        @yield('content')
    </main>
    <!-- Compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('select').formSelect();
        });
    </script>
</body>
</html>
