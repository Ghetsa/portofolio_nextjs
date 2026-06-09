@props(['item'])

<article class="relative pl-8">
    <span class="absolute left-0 top-2 h-full w-px timeline-line"></span>
    <span class="absolute left-[-6px] top-2 h-3 w-3 rounded-full bg-portfolio-lemon shadow-[0_0_0_6px_rgba(255,228,1,0.12)]"></span>
    <div class="flex flex-wrap items-center justify-between gap-3">
        <div>
            <h4 class="font-display text-xl font-bold text-white">{{ $item['institution'] ?? $item['title'] }}</h4>
            <p class="mt-1 text-sm text-slate-400">
                {{ $item['program'] ?? $item['company'] }}
            </p>
        </div>
        <span class="badge-chip">{{ $item['period'] }}</span>
    </div>
    <p class="mt-3 text-sm uppercase tracking-[0.24em] text-slate-500">
        {{ $item['meta'] ?? ($item['type'] ?? '') }}
    </p>
    @if (! empty($item['description']))
        <p class="mt-3 text-sm leading-7 text-slate-300">{{ $item['description'] }}</p>
    @endif
</article>
