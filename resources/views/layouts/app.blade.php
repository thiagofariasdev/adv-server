<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'My ADV | Error') }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
    <link rel="stylesheet" href="{{URL::to('/font/ti.css')}}"/>
    @if($_SERVER['REQUEST_URI'] == '/auth' || $_SERVER['REQUEST_URI'] == '/login' || $_SERVER['REQUEST_URI'] == '/register')
    <link rel="stylesheet" href="{{URL::to('/css/form.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('/css/input.css')}}"/>
    @endif
    <link rel="stylesheet" href="{{URL::to('/css/app.css')}}"/>
</head>
<body class="bg-light">
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    @if($_SERVER['REQUEST_URI'] == '/auth' || $_SERVER['REQUEST_URI'] == '/login' || $_SERVER['REQUEST_URI'] == '/register')
    <script src="{{URL::to('/js/form.js')}}"></script>
    @endif
</body>
</html>
