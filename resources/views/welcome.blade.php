@extends('layouts.app')

@section('content')
    <div class="separacion-nav separacion-pie fondo-principal text-light">
        <div class="container">
            <h1 class="siglas text-center">KPT</h1>
            <div class="row">
                <div class="col-md-12">
                <p class="text-center">Kino Para Todos es una aplicación web que te ayudará a seleccionar un sorteo candidato para los sorteos Kino Chile. Este procedimiento se basa en 4 criterios (comparación numérica y proyección estadística) los cuales toman como referencia la totalidad se sorteos ganadores publicados hasta la fecha, permitiendo así, aumentar la probabilidad de éxito para los 14 aciertos.</p>
                </div>
            </div>

        </div>
    </div>
    <div class="container pt-4 text-center">
        <div class="row">
            <div class="col-md-12">             
                <button type="button" class="btn btn-deep-orange btn-lg">Obtener Sorteo</button>
            </div>
        </div>
    </div>
    <div class="container pt-4 text-center">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 contenido">
                <div class="contenedor-spin d-none">
                    <div class="spinner-border text-black-50 mt-4" style="width: 4rem; height: 4rem;" role="status">
                        <span class="sr-only">Cargando...</span>
                    </div>  
                    <p class="text-center mt-4">Cargando...</p>                
                </div>
                @include('includes.sorteo_base')
            <div class="col-md-4"></div>
        </div>
    </div>

@endsection

@include('includes.modal_info')