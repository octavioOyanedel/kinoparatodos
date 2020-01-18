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
    <body class="fondo">
        <div id="app">
            @include('includes.nav')
            <main class="p-4 container">
                @yield('content')
            </main>
        </div>
        @include('includes.js_mdb')
    </body>
</html>

