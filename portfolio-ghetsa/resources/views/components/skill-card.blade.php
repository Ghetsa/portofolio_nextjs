@props(['group'])

<article data-stagger-child class="glass-panel hover-lift group rounded-[2rem] p-6">
    <div class="flex items-center justify-between gap-4">
        <div class="flex items-center gap-3">
            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/8 text-portfolio-sky transition duration-500 group-hover:scale-105 group-hover:bg-white/12">
                <x-icon :name="$group['icon']" class="h-5 w-5" />
            </span>
            <div>
                <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Category</p>
                <h3 class="mt-1 font-display text-xl font-bold text-white">{{ $group['category'] }}</h3>
            </div>
        </div>
        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs font-semibold text-slate-300">
            {{ count($group['items']) }} skills
        </span>
    </div>

    <div class="mt-6 flex flex-wrap gap-2">
        @foreach ($group['items'] as $item)
            <span class="badge-chip transition duration-300 group-hover:border-white/20 group-hover:bg-white/10">{{ $item }}</span>
        @endforeach
    </div>
</article>
