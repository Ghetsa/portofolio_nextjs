@props([
    'eyebrow' => null,
    'title' => null,
    'description' => null,
])

<div class="max-w-3xl">
    @if ($eyebrow)
        <span class="section-kicker">{{ $eyebrow }}</span>
    @endif

    @if ($title)
        <h2 class="section-title mt-5">{{ $title }}</h2>
    @endif

    @if ($description)
        <p class="section-subtitle mt-4">{{ $description }}</p>
    @endif
</div>
