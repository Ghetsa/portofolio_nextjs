@props([
    'label',
    'value',
    'href' => null,
    'icon' => 'sparkles',
])

<a href="{{ $href ?? '#' }}" class="glass-panel hover-lift rounded-3xl p-5" target="{{ $href && str_starts_with($href, 'http') ? '_blank' : '_self' }}" rel="{{ $href && str_starts_with($href, 'http') ? 'noreferrer' : '' }}">
    <div class="flex items-center gap-3">
        <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-white/8 text-portfolio-sky">
            <x-icon :name="$icon" class="h-5 w-5" />
        </span>
        <div class="min-w-0">
            <p class="text-xs uppercase tracking-[0.24em] text-slate-400">{{ $label }}</p>
            <p class="mt-1 truncate text-sm font-semibold text-white">{{ $value }}</p>
        </div>
    </div>
</a>
