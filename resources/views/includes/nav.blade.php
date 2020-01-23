<nav class="z-depth-1-half">
    <div class="contenido-nav">   
        <div>
            <a href="" class="brand">KPT</a>
        </div>             
        <div class="menu">
            <a class="activar" href="{{ route('welcome') }}">Inicio</a>
            <a href="">Sorteo</a>
            <a href="{{ route('criterios') }}">Criterios</a>
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