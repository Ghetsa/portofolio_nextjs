@props(['certification'])

<article data-stagger-child class="glass-panel hover-lift group overflow-hidden rounded-[2rem]">
    <div class="relative aspect-[4/3] overflow-hidden border-b border-white/10 bg-gradient-to-br from-slate-900 via-slate-900 to-slate-800">
        <img src="{{ asset($certification['image']) }}" alt="{{ $certification['title'] }}" class="h-full w-full object-cover transition duration-700 group-hover:scale-105">
        <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(0,0,0,0)_0%,rgba(3,7,18,0.18)_44%,rgba(3,7,18,0.78)_100%)]"></div>
        <div class="absolute left-4 top-4 rounded-full border border-white/10 bg-slate-950/70 px-3 py-1 text-xs font-semibold text-white backdrop-blur-xl">
            {{ $certification['year'] }}
        </div>
    </div>

    <div class="p-5">
        <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Certification</p>
        <h3 class="mt-2 font-display text-xl font-bold text-white">{{ $certification['title'] }}</h3>
        <p class="mt-2 text-sm text-slate-400">{{ $certification['issuer'] }}</p>
    </div>
</article>
