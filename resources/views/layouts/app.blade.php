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
            <nav>
                <div class="contenido-nav">   
                    <div>
                        <a href="" class="brand">KPT</a>
                    </div>             
                    <div class="menu">
                        <a href="">Inicio</a>
                        <a href="">Sorteo</a>
                        <a href="">Criterios</a>
                        <a href="">Listar</a>
                        <a href="">Añadir</a>
                        <a href="">Salir</a>
                    </div>
                    <div class="boton-menu">
                        <button onclick="menu()">
                            <span class="linea-superior"></span>
                            <span class="linea-media"></span>
                            <span class="linea-inferior"></span>
                        </button>
                    </div>                   
                </div>
                <div class="enlaces-menu">
                    <a href="#">Inicio</a>
                    <a href="#">Sorteo</a>
                    <a href="#">Criterios</a>
                    <a href="#">Listar</a>
                    <a href="#">Añadir</a>
                    <a href="#">Salir</a>
                </div>
            </nav>
            {{-- NAV --}}
            <section>
                <div>texto</div>
                <div>boton</div>
            </section>
            <footer>
                <div>enlaces adicionales</div>
                <div>año correo</div>
            </footer>
        </div>

        @include('includes.js_mdb')
        <script src="{{ asset('js/boton_menu.js') }}" defer></script>
        <script src="{{ asset('js/boton_menu_funcionalidad.js') }}" defer></script>
    </body>
</html>

