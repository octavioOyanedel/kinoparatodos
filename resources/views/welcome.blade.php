@extends('layouts.app')

@section('content')
    <div class="grid-container-welcome">
        <div class="fondo-principal">
            <div class="texto-info container">
                <div>
                    <h1 class="siglas text-center espacio-siglas texto-blanco">KPT</h1>
                </div>
                <div class="text-center texto-blanco texto-descriptor">
                    <p>Kino Para Todos es una aplicación web que te ayudará a seleccionar un sorteo candidato para los sorteos Kino Chile. </p>
                    <p>Este procedimiento se basa en 4 criterios (comparación numérica y proyección estadística) los cuales toman como referencia la totalidad se sorteos ganadores publicados hasta la fecha, permitiendo así, aumentar la probabilidad de éxito para los 14 aciertos.</p>
                </div>            
            </div>            
        </div>

        <div class="text-center container">
            <button type="button" class="btn btn-deep-orange btn-lg boton-obtener">Obtener Sorteo</button>
        </div>
    </div>
@endsection

@include('includes.modal_info')