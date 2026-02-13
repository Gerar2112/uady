@extends('layouts.app')

@section('title', 'Compromiso Social')

@section('content')
<div class="container py-5">

    <div class="row align-items-center mb-5">

        <div class="col-md-6">
            <h1 class="fw-bold mb-4"> Compromiso Social</h1>

            <p class="lead">
                Trabajamos de la mano con la comunidad mediante cultura, deporte
                y proyectos de responsabilidad social.
            </p>

            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary mt-3">
                ← Volver
            </a>
        </div>

        <div class="col-md-6 text-center">
           <img src="{{ asset('img/compromiso.jpg') }}">
        </div>

    </div>

</div>
@endsection

