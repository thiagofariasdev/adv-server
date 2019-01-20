<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Dosis|Varela+Round" rel="stylesheet">
    <title>{{config('app.short')}} | @yield('title')</title>
    <style>
        *{
            margin: 0;
            padding:0;
        }
        .full{
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card-center{
            width: 600px;
            max-height: 90vh;
        }
        .full-bg{
            height:100%; 
            width:100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
        }
        .text{
            font-family: 'Dosis', sans-serif;
            text-align:center;
        }
        .title{
            font-family: 'Varela Round', sans-serif;
            font-size: 9rem;
            text-align:center;
        }
    </style>
</head>
<body class="full">
    <div class="card-center">
        <div style="height:200px;width:100%">
            @yield('image')
        </div>
        <div style="height:300px;width:100%;">
            <h1 class="title">@yield('code')</h1>
            <h3 class="text">@yield('message')</h3>
        </div>
    </div>
</body>
</html>