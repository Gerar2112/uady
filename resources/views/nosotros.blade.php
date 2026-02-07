@extends('layouts.app')

@section('title', 'Nosotros | UADY')

@section('content')

{{-- Hero --}}
<div class="bg-light p-5 rounded mb-5 text-center">
    <h1 class="fw-bold">Sobre Nosotros</h1>
    <p class="lead mt-3">
        La Universidad Autónoma de Yucatán es una institución pública comprometida
        con la educación, la investigación y la cultura, formando profesionales
        con alto sentido social.
    </p>
</div>

{{-- Misión / Visión / Valores --}}
<div class="row g-4">
    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body text-center">
                <h5 class="card-title fw-bold mb-3">🎯 Misión</h5>
                <p class="card-text">
                    Formar profesionales competentes con responsabilidad social
                    y compromiso con el desarrollo sustentable.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body text-center">
                <h5 class="card-title fw-bold mb-3">🌎 Visión</h5>
                <p class="card-text">
                    Ser una universidad reconocida nacional e internacionalmente
                    por su calidad académica y aportes científicos.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body text-center">
                <h5 class="card-title fw-bold mb-3">🤝 Valores</h5>
                <p class="card-text">
                    Ética, responsabilidad, respeto, innovación y trabajo en equipo.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
    