@extends('layouts.app')

@section('content')
    <section class="contenido">
        <div class="texto-welcome">
            <h1 class="brand">KPT</h1>
            <p class="texto-info-welcome">Kino Para Todos es una aplicación web que te ayudará a seleccionar un sorteo candidato para los sorteos Kino Chile.</p>
            <p class="texto-info-welcome">Este procedimiento se basa en 5 criterios (promedios, comparación numérica y proyección estadística) los cuales toman como referencia la totalidad se sorteos ganadores publicados hasta la fecha, permitiendo así, aumentar la probabilidad de éxito para los 14 aciertos.</p>
            <p>Más info <a href="" class="mas-info" data-toggle="modal" data-target="#welcome">acá</a></p>
        </div>
        <div class="boton-welcome">
            <a href="#" class="btn btn-deep-orange btn-lg">Obtener Sorteo</a>
        </div>
    </section>
@endsection

@include('modals.modal_info')