@props([
    'title',
    'text' => null,
])

<div class="col-md-4">
    <div {{ $attributes->merge(['class' => 'card h-100 shadow-sm border-0']) }}>
        <div class="card-body text-center">
            <h5 class="card-title fw-bold mb-3">
                {{ $title }}
            </h5>

            <p class="card-text">
                {{ $text ?? $slot }}
            </p>
        </div>
    </div>
</div>
