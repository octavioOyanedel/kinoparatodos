@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 separacion-nav">
            <h1 class="p-4 text-center titulos">Kino Para Todos</h1>
            <p class="parrafos text-center">Sigue estos 3 sencillos pasos que se describen continuación para obtener un sorteo "candidato" Kino (Chile).</p>
            <p class="parrafos text-center">Esta combinacion de numeros se genera por medio de <a href="" class="destacar-texto" data-toggle="modal" data-target="#basicExampleModal">proyección estadística</a> utilizando como base la totalidad de sorteos ganadores hasta la fecha.</p>
<!-- Vertical Steppers -->
<div class="row mt-1">
  <div class="col-md-12">

    <!-- Stepers Wrapper -->
    <ul class="stepper stepper-vertical">

      <!-- First Step -->
      <li class="completed">
        <a href="#!">
          <span class="circle">1</span>
          <span class="label">Primer paso</span>
        </a>

            <!-- Section Description -->
        <div class="step-content grey lighten-3">
          <p>Obtener proyeccion para cada uno de los 14 numeros.</p>
            <div class="row mt-1">
              <div class="col-md-12 text-right">
                <button class="btn btn-light-green btn-sm">Obtener</button>
              </div>
            </div>
        </div>
      </li>

      <!-- Second Step -->
      <li class="active">

        <!--Section Title -->
        <a href="#!">
          <span class="circle">2</span>
          <span class="label">Segundo paso</span>
        </a>

        <!-- Section Description -->
        <div class="step-content grey lighten-3">
          <p>Obtener cantidad de aciertos para cada una de las filas.</p>
            <div class="row mt-1">
              <div class="col-md-12 text-right">
                <button class="btn btn-light-green btn-sm">Obtener</button>
              </div>
            </div>
        </div>
      </li>

      <!-- Third Step -->
      <li class="warning">

        <a href="#!">
          <span class="circle">3</span>
          <span class="label">Tercer y último paso</span>
        </a>
        <!-- Section Description -->
        <div class="step-content grey lighten-3">
          <p>Obtener frecuencias para los 25 numeros.</p>
            <div class="row mt-1">
              <div class="col-md-12 text-right">
                <button class="btn btn-light-green btn-sm">Obtener</button>
              </div>
            </div>
        </div>        
      </li>

    </ul>
    <!-- /.Stepers Wrapper -->

  </div>
</div>

<!-- Steppers Navigation -->
<div class="row mt-1">
  <div class="col-md-12 text-right">
    <button class="btn btn-flat btn-sm">Cancel</button>
    <button class="btn btn-primary btn-sm">Next</button>
  </div>
</div>
<!-- /.Vertical Steppers -->
        </div>
    </div>
@endsection

@include('includes.modal_info')