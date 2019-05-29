<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">x
        
    </head>
    <body>
        @include('layouts.components.navbar')
            <div class="content">
                <div class="title m-b-md">
                    Um mini curso Laravel 5.7
                </div>


                <div class="links">
                    
                    <a href="https://github.com/JVBicalho/minicursolaravel57">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
