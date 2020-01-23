@extends('layouts.app')

@section('content')
    <section class="contenido">
        <div class="texto-welcome">
            <p>parrafo1</p>
            <p>parrafo1</p>
            <p>parrafo1</p>
        </div>
        <div class="boton-welcome">
            <a href="#" class="btn btn-deep-orange btn-lg boton-obtener">Obtener Sorteo</a>
        </div>
    </section>
@endsection

@include('includes.modal_info')