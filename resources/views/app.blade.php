<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel & Vue</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{asset('css/myapp.css')}}">

    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

        <script src="{{asset('js/myapp.js')}}"></script>
    </body>
</html>
