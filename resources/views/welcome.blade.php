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
            <div class="col-md-4">             
                <div class="row d-flex justify-content-center">
                    <div class="col z-depth-1-half seleccionado">1</div>
                    <div class="col z-depth-1-half no-seleccionado">2</div>
                    <div class="col z-depth-1-half seleccionado">3</div>
                    <div class="col z-depth-1-half no-seleccionado">4</div>
                    <div class="col z-depth-1-half seleccionado">5</div>
                </div> 
                <div class="row d-flex justify-content-center">
                    <div class="col z-depth-1-half seleccionado">6</div>
                    <div class="col z-depth-1-half no-seleccionado">7</div>
                    <div class="col z-depth-1-half no-seleccionado">8</div>
                    <div class="col z-depth-1-half seleccionado">9</div>
                    <div class="col z-depth-1-half no-seleccionado">10</div>
                </div> 
                <div class="row d-flex justify-content-center">
                    <div class="col z-depth-1-half seleccionado">11</div>
                    <div class="col z-depth-1-half seleccionado">12</div>
                    <div class="col z-depth-1-half no-seleccionado">13</div>
                    <div class="col z-depth-1-half no-seleccionado">14</div>
                    <div class="col z-depth-1-half seleccionado">15</div>
                </div> 
                <div class="row d-flex justify-content-center">
                    <div class="col z-depth-1-half no-seleccionado">16</div>
                    <div class="col z-depth-1-half seleccionado">17</div>
                    <div class="col z-depth-1-half seleccionado">18</div>
                    <div class="col z-depth-1-half seleccionado">19</div>
                    <div class="col z-depth-1-half no-seleccionado">20</div>
                </div> 
                <div class="row d-flex justify-content-center">
                    <div class="col z-depth-1-half no-seleccionado">21</div>
                    <div class="col z-depth-1-half seleccionado">22</div>
                    <div class="col z-depth-1-half seleccionado">23</div>
                    <div class="col z-depth-1-half seleccionado">24</div>
                    <div class="col z-depth-1-half no-seleccionado">25</div>
                </div>                                 
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

<div class="alert alert-warning" role="alert">
  A simple warning alert—check it out!
</div>
@endsection

@include('includes.modal_info')