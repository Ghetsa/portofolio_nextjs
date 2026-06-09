@props(['project'])

<article data-stagger-child data-project-card data-categories="{{ implode(' ', $project['filter']) }}" class="glass-panel hover-lift group overflow-hidden rounded-[2rem]">
    <div class="relative aspect-[16/10] overflow-hidden border-b border-white/10">
        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="h-full w-full object-cover transition duration-700 group-hover:scale-105">
        <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(0,0,0,0)_0%,rgba(3,7,18,0.22)_36%,rgba(3,7,18,0.92)_100%)]"></div>
        <div class="absolute left-4 top-4 rounded-full border border-white/10 bg-slate-950/70 px-3 py-1 text-xs font-semibold text-white backdrop-blur-xl">
            {{ $project['category'] }}
        </div>
        <div class="absolute bottom-4 left-4 right-4 flex flex-wrap gap-2">
            @foreach ($project['tech'] as $tech)
                <span class="rounded-full border border-white/10 bg-white/8 px-3 py-1 text-xs font-semibold text-white backdrop-blur-xl">
                    {{ $tech }}
                </span>
            @endforeach
        </div>
    </div>

    <div class="p-6">
        <h3 class="font-display text-2xl font-bold text-white">{{ $project['title'] }}</h3>
        <p class="mt-3 text-sm leading-7 text-slate-300">{{ $project['description'] }}</p>

        <div class="mt-6 flex flex-wrap gap-3">
            <a href="{{ $project['github'] }}" target="_blank" rel="noreferrer" class="button-secondary">
                <x-icon name="github" class="h-4 w-4" />
                Github
            </a>
            <a href="{{ $project['live'] }}" target="_blank" rel="noreferrer" class="button-primary">
                Live Demo
                <x-icon name="external-link" class="h-4 w-4" />
            </a>
        </div>
    </div>
</article>
