@extends('layouts.app')

@section('title', 'Investigación')

@section('content')
<div class="container py-5">

    <div class="row align-items-center mb-5">

        <div class="col-md-6">
            <h1 class="fw-bold mb-4"> Investigación</h1>

            <p class="lead">
                Impulsamos proyectos científicos y tecnológicos que generan innovación
                y soluciones para la sociedad.
            </p>

            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary mt-3">
                ← Volver
            </a>
        </div>

        <div class="col-md-6 text-center">
          <img src="{{ asset('img/investigacion.jpg') }}">
        </div>

    </div>

</div>
@endsection

