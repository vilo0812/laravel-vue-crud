<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    @forelse($users as $user)
            @if($user=='gabriel')
            <h1>{{$frontendVue}} {{$user}}</h1>
            @else
            <h1>no eres un usuario</h1>
            @endif
            @if($user=='ramon')
            <h1>{{$backendLaravel}} {{$user}}</h1>
            @else
            <h1>no eres un usuario</h1>
            @endif
            @if($user=='jesus')
            <h1>{{$frontendReact}} {{$user}}</h1>
            @else
            <h1>no eres un usuario</h1>
            @endif
            @if($user=='gean')
            <h1>{{$backendLaravel}} {{$user}}</h1>
            @else
            <h1>no eres un usuario</h1>
            @endif
        @empty
        <h1>no eres un usuario</h1>
    @endforelse
    </body>
</html>
