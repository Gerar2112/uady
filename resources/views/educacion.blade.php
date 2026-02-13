@extends('layouts.app')

@section('title', 'Educación')

@section('content')
<div class="container py-5">

    <div class="row align-items-center mb-5">

        {{-- TEXTO --}}
        <div class="col-md-6">
            <h1 class="fw-bold mb-4"> Educación</h1>

            <p class="lead">
                Ofrecemos formación académica integral en licenciaturas y posgrados,
                desarrollando competencias profesionales con responsabilidad social.
            </p>

            <a href="{{ route('home') ?? url()->previous() }}" class="btn btn-outline-secondary mt-3">
                ← Volver
            </a>
        </div>

        {{-- IMAGEN --}}
        <div class="col-md-6 text-center">
           <img src="{{ asset('img/educacion.jpg') }}">
        </div>

    </div>

</div>
@endsection
