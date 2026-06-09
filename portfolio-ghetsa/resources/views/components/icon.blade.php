@props([
    'name' => 'sparkles',
    'class' => 'h-5 w-5',
])

@php
    $paths = [
        'sparkles' => [
            'M10 3v4',
            'M6.5 6.5l2.1 2.1',
            'M3 10h4',
            'M17 14v4',
            'M13.5 17.5l2.1-2.1',
            'M14 3l.8 2.4L17.2 6 14.8 6.8 14 9.2 13.2 6.8 10.8 6 13.2 5.2 14 3Z',
        ],
        'github' => [
            'M9 19c-4.2 1.4-4.2-2.3-6-2.8',
            'M15 22v-3.2c0-.9.3-1.7.8-2.4',
            'M3 12a9 9 0 1 1 18 0',
            'M12 12v8',
        ],
        'linkedin' => [
            'M16 8a6 6 0 0 1 6 6v7',
            'M8 22v-8',
            'M2 22v-8',
            'M2 9h6v13H2z',
            'M8 10c0-1.5 1.5-3 4-3s4 1.5 4 3v4',
        ],
        'mail' => [
            'M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z',
            'm22 6-10 7L2 6',
        ],
        'download' => [
            'M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4',
            'M7 10l5 5 5-5',
            'M12 15V3',
        ],
        'arrow-up-right' => [
            'M7 17L17 7',
            'M7 7h10v10',
        ],
        'menu' => [
            'M4 6h16',
            'M4 12h16',
            'M4 18h16',
        ],
        'map-pin' => [
            'M12 21s6-4.3 6-10a6 6 0 0 0-12 0c0 5.7 6 10 6 10Z',
            'M12 11a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z',
        ],
        'graduation-cap' => [
            'M2 8l10-5 10 5-10 5-10-5Z',
            'M6 10v4c0 1.1 2.7 3 6 3s6-1.9 6-3v-4',
            'M22 10v5',
        ],
        'layers-3' => [
            'M12 2 2 7l10 5 10-5-10-5Z',
            'M2 17l10 5 10-5',
            'M2 12l10 5 10-5',
        ],
        'code-2' => [
            'M16 18 22 12 16 6',
            'M8 6 2 12 8 18',
        ],
        'monitor-smartphone' => [
            'M8 19H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v4',
            'M12 17v4',
            'M10 20h4',
            'M14 13h8v8h-8z',
        ],
        'database' => [
            'M12 8c4.4 0 8-1.8 8-4s-3.6-4-8-4-8 1.8-8 4 3.6 4 8 4Z',
            'M4 4v8c0 2.2 3.6 4 8 4s8-1.8 8-4V4',
            'M4 12v8c0 2.2 3.6 4 8 4s8-1.8 8-4v-8',
        ],
        'smartphone' => [
            'M10 20h4',
            'M7 4h10a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z',
        ],
        'workflow' => [
            'M3 7h6',
            'M3 17h6',
            'M15 7h6',
            'M15 17h6',
            'M9 7a2 2 0 1 1 0 4H6a2 2 0 0 1 0-4Z',
            'M15 13a2 2 0 1 1 0 4h-6a2 2 0 0 1 0-4Z',
            'M15 7a2 2 0 1 1 0 4h-3a2 2 0 0 1 0-4Z',
        ],
        'briefcase' => [
            'M10 6V5a2 2 0 0 1 2-2h0a2 2 0 0 1 2 2v1',
            'M3 7h18a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2Z',
            'M3 13h18',
        ],
        'external-link' => [
            'M15 3h6v6',
            'M10 14 21 3',
            'M21 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h6',
        ],
    ];

    $segments = $paths[$name] ?? $paths['sparkles'];
@endphp

<svg {{ $attributes->merge(['class' => $class . ' shrink-0']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    @foreach ($segments as $segment)
        <path d="{{ $segment }}" />
    @endforeach
</svg>
