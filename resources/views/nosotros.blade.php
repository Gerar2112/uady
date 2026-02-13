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

    <x-card
        title="🎯 Misión"
        text="Formar profesionales competentes con responsabilidad social y compromiso con el desarrollo sustentable."
    />

    <x-card
        title="🌎 Visión"
        text="Ser una universidad reconocida nacional e internacionalmente por su calidad académica y aportes científicos."
    />

    <x-card
        title="🤝 Valores"
        text="Ética, responsabilidad, respeto, innovación y trabajo en equipo."
    />

</div>
@endsection
