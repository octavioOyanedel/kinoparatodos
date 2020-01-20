<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        @include('includes.css_mdb')
    </head>
    <body>
        <div id="app" class="grid-container">

            <div>
                @include('includes.nav')
            </div>

            <div>
                @yield('content')
            </div>   

            <div class="fondo-footer">
                @include('includes.footer')
            </div>

        </div>
        @include('includes.js_mdb')
    </body>
</html>

