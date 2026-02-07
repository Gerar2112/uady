@extends('layouts.app')

@section('title', 'Inicio | UADY')
@section('content')
<div class="mb-4">
    <img src="{{ asset('img/logo-uady.png') }}"
         alt="Logo UADY"
         style="max-width: 90px;">
</div>
{{-- Hero principal --}}
<div class="bg-light p-5 rounded mb-5 text-center">
    <h1 class="fw-bold display-5">Bienvenidos a la UADY</h1>
    <p class="lead mt-3">
        Proyecto de Tecnología Web 
    </p>
</div>
{{-- Sección informativa --}}
<div class="row text-center mb-5">
    <div class="col-md-4">
        <h5 class="fw-bold">Educación</h5>
        <p>
            Formación académica de calidad en licenciaturas y posgrados.
        </p>
    </div>
    <div class="col-md-4">
        <h5 class="fw-bold">Investigación</h5>
        <p>
            Desarrollo de proyectos científicos y tecnológicos con impacto social.
        </p>
    </div>
    <div class="col-md-4">
        <h5 class="fw-bold">Compromiso Social</h5>
        <p>
            Vinculación con la sociedad a través de cultura, deporte y extensión.
        </p>
    </div>
</div>
{{-- Llamada a la acción --}}
<div class="text-center">
    <a href="/nosotros" class="btn btn-primary btn-lg">
        Conoce más sobre nosotros
    </a>
</div>
@endsection
