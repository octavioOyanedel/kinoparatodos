<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'KPT') }}</title>
        @include('includes.css_mdb')
    </head>
    <body>

        <div id="app" class="contenedor">
            {{-- NAV --}}
            @include('includes.nav')
            {{-- NAV --}}
            {{-- SECCION PRINCIPAL --}}
            @yield('content')
            {{-- SECCION PRINCIPAL --}}
            {{-- FOOTER --}}
            @include('includes.footer')
            {{-- FOOTER --}}
        </div>

        @include('includes.js_mdb')
        <script src="{{ asset('js/boton_menu.js') }}" defer></script>
        <script src="{{ asset('js/boton_menu_funcionalidad.js') }}" defer></script>
    </body>
</html>

