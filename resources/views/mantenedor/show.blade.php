@extends('layouts.app')

@section('content')
    <div class="grid-container-welcome">
        <div class="fondo-principal centrar-div">
            <div class="texto-info text-center">
                <h1 class="siglas espacio-siglas">KPT</h1>
                <p class="descripcion">Kino para todos te permite seleccionar de forma inteligente sorteos Kino Chile.</p> 
                <small>Mas info <a href="" class="mas-info" data-toggle="modal" data-target="#basicExampleModal">acá</a></small>         
            </div>            
        </div>

        <div class="text-center">
            <button type="button" class="btn btn-deep-orange btn-lg boton-obtener">Obtener Sorteo</button>
        </div>
    </div>
@endsection