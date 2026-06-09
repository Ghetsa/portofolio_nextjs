@extends('layouts.app')

@php
    $portfolio = [
        'seo' => [
            'title' => 'Ghetsa Ramadhani | Fullstack Developer Portfolio',
            'description' => 'Ghetsa Ramadhani Riska Arryanti is an Informatics Engineering student and software engineer focused on fullstack web apps, mobile apps, and AI-powered solutions.',
            'keywords' => [
                'Ghetsa Ramadhani',
                'Fullstack Developer',
                'Laravel Developer',
                'Next.js Developer',
                'Flutter Developer',
                'AI Enthusiast',
            ],
        ],
        'profile' => [
            'name' => 'Ghetsa Ramadhani Riska Arryanti',
            'role' => 'Fullstack Developer',
            'secondary_roles' => ['Software Developer', 'AI Enthusiast'],
            'tagline' => 'Informatics Engineering student passionate about building modern web applications, mobile applications, and AI-powered solutions.',
            'summary' => 'I design and build thoughtful digital products with a strong focus on clean architecture, delightful UI, and practical engineering. My work spans Laravel, Next.js, Flutter, and AI-assisted product experiences.',
            'location' => 'Malang, Jawa Timur',
            'education' => 'D4 Teknik Informatika · Politeknik Negeri Malang',
            'focus' => ['Software Engineering', 'Product UI Engineering', 'AI Integration', 'Mobile Development'],
            'tech_stack' => ['Laravel', 'Next.js', 'Flutter', 'TypeScript', 'MySQL', 'Python', 'Figma'],
            'availability' => 'Open to internship, freelance, and collaborative product work.',
        ],
        'socials' => [
            [
                'label' => 'Github',
                'href' => 'https://github.com/Ghetsa',
                'icon' => 'github',
            ],
            [
                'label' => 'LinkedIn',
                'href' => 'https://linkedin.com/in/ghetsa',
                'icon' => 'linkedin',
            ],
            [
                'label' => 'Email',
                'href' => 'mailto:ghetsa.arryanti@gmail.com',
                'icon' => 'mail',
            ],
        ],
        'highlights' => [
            ['label' => 'Projects Delivered', 'value' => '10+'],
            ['label' => 'Preferred Stack', 'value' => 'Laravel · Next.js · Flutter'],
            ['label' => 'Focus', 'value' => 'Engineering + Product Thinking'],
            ['label' => 'Design Mindset', 'value' => 'Premium, Clean, Fast'],
        ],
        'skills' => [
            [
                'category' => 'Frontend',
                'icon' => 'monitor-smartphone',
                'items' => ['HTML', 'CSS', 'JavaScript', 'TypeScript', 'React', 'Next.js'],
            ],
            [
                'category' => 'Backend',
                'icon' => 'database',
                'items' => ['PHP', 'Laravel', 'REST API', 'MySQL'],
            ],
            [
                'category' => 'Mobile',
                'icon' => 'smartphone',
                'items' => ['Flutter', 'Dart'],
            ],
            [
                'category' => 'Programming',
                'icon' => 'code-2',
                'items' => ['Python', 'Java'],
            ],
            [
                'category' => 'Tools',
                'icon' => 'workflow',
                'items' => ['Git', 'Github', 'VS Code', 'Figma', 'Android Studio'],
            ],
        ],
        'education' => [
            [
                'institution' => 'Politeknik Negeri Malang',
                'program' => 'D4 Teknik Informatika',
                'meta' => 'GPA 3.80',
                'period' => '2022 — Present',
                'type' => 'Higher Education',
            ],
            [
                'institution' => 'SMKN 3 Tuban',
                'program' => 'Rekayasa Perangkat Lunak',
                'meta' => 'Software Engineering Track',
                'period' => '2019 — 2022',
                'type' => 'Vocational School',
            ],
        ],
        'experience' => [
            [
                'title' => 'Fullstack Product Developer',
                'company' => 'Independent Projects',
                'period' => '2023 — Present',
                'description' => 'Builds responsive web and mobile experiences with Laravel, Next.js, Flutter, and AI-enhanced workflows.',
            ],
            [
                'title' => 'Software Engineering Student',
                'company' => 'Politeknik Negeri Malang',
                'period' => '2022 — Present',
                'description' => 'Focuses on clean software design, web system development, mobile engineering, and applied AI learning.',
            ],
        ],
        'certifications' => [
            [
                'title' => 'AI Ignition Training',
                'issuer' => 'Internal Training Program',
                'year' => '2025',
                'image' => 'images/cert-ai-ignition.svg',
            ],
            [
                'title' => 'Junior Web Developer',
                'issuer' => 'Certification Track',
                'year' => '2024',
                'image' => 'images/cert-web-dev.svg',
            ],
            [
                'title' => 'Troubleshooting & Debugging',
                'issuer' => 'Developer Skills Program',
                'year' => '2024',
                'image' => 'images/cert-debugging.svg',
            ],
            [
                'title' => 'Belajar Dasar AI',
                'issuer' => 'Dicoding / AI Learning Path',
                'year' => '2023',
                'image' => 'images/cert-ai-basic.svg',
            ],
        ],
        'projects' => [
            [
                'title' => 'SafeBand',
                'category' => 'IoT + Web Development',
                'filter' => ['iot', 'web'],
                'description' => 'Real-time elderly fall detection monitoring system using Next.js and IoT for actionable health alerts.',
                'tech' => ['Next.js', 'IoT', 'Cloud', 'Realtime'],
                'image' => 'images/project-safeband.svg',
                'github' => 'https://github.com/Ghetsa/safeband',
                'live' => 'https://ghetsa.dev/safeband',
            ],
            [
                'title' => 'AKSARA',
                'category' => 'Laravel Web Application',
                'filter' => ['web'],
                'description' => 'Student competency and achievement management platform designed for streamlined academic workflows.',
                'tech' => ['Laravel', 'MySQL', 'Bootstrap'],
                'image' => 'images/project-aksara.svg',
                'github' => 'https://github.com/Ghetsa/aksara',
                'live' => 'https://ghetsa.dev/aksara',
            ],
            [
                'title' => 'Housing Administration App',
                'category' => 'Flutter Mobile App',
                'filter' => ['mobile'],
                'description' => 'Mobile-first housing administration application for residents and administrators with fast access patterns.',
                'tech' => ['Flutter', 'Firebase'],
                'image' => 'images/project-housing.svg',
                'github' => 'https://github.com/Ghetsa/housing-administration-app',
                'live' => 'https://ghetsa.dev/housing',
            ],
            [
                'title' => 'Marketplace Website',
                'category' => 'Next.js',
                'filter' => ['web'],
                'description' => 'Modern marketplace platform built with Next.js and Tailwind for a polished commerce experience.',
                'tech' => ['Next.js', 'Tailwind'],
                'image' => 'images/project-marketplace.svg',
                'github' => 'https://github.com/Ghetsa/marketplace-website',
                'live' => 'https://ghetsa.dev/marketplace',
            ],
        ],
        'contact' => [
            'location' => 'Malang, Jawa Timur',
            'email' => 'ghetsa.arryanti@gmail.com',
            'github' => 'https://github.com/Ghetsa',
            'linkedin' => 'https://linkedin.com/in/ghetsa',
            'status' => 'Available for selective projects and opportunities',
        ],
    ];
@endphp

@section('title', $portfolio['seo']['title'])
@section('description', $portfolio['seo']['description'])

@push('head')
    @php
        $structuredData = [
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            'name' => $portfolio['profile']['name'],
            'jobTitle' => $portfolio['profile']['role'],
            'description' => $portfolio['profile']['summary'],
            'url' => url('/'),
            'sameAs' => array_values(array_column($portfolio['socials'], 'href')),
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Malang',
                'addressRegion' => 'Jawa Timur',
                'addressCountry' => 'ID',
            ],
            'knowsAbout' => $portfolio['profile']['tech_stack'],
        ];
    @endphp
    <script type="application/ld+json">
        {!! json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <header class="sticky top-0 z-50 border-b border-white/8 bg-slate-950/65 backdrop-blur-2xl">
        <div class="section-wrap flex items-center justify-between py-4">
            <a href="#hero" data-scroll-to data-nav-brand class="group inline-flex items-center gap-3">
                <span class="flex h-11 w-11 items-center justify-center rounded-2xl border border-white/10 bg-white/8 shadow-[0_18px_40px_-18px_rgba(56,159,225,0.6)]">
                    <span class="font-display text-lg font-bold text-white">GR</span>
                </span>
                <span class="hidden sm:block">
                    <span class="block text-sm font-semibold text-white">{{ $portfolio['profile']['name'] }}</span>
                    <span class="block text-xs uppercase tracking-[0.25em] text-slate-400">Portfolio</span>
                </span>
            </a>

            <nav class="hidden items-center gap-2 lg:flex">
                @foreach ([
                    ['label' => 'About', 'href' => '#about'],
                    ['label' => 'Skills', 'href' => '#skills'],
                    ['label' => 'Resume', 'href' => '#resume'],
                    ['label' => 'Projects', 'href' => '#projects'],
                    ['label' => 'Contact', 'href' => '#contact'],
                ] as $link)
                    <a href="{{ $link['href'] }}" data-scroll-to data-nav-link class="rounded-full px-4 py-2 text-sm font-medium text-slate-300 hover:bg-white/6 hover:text-white">
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </nav>

            <div class="hidden items-center gap-3 lg:flex">
                <a href="{{ route('cv.download') }}" class="button-secondary">
                    <x-icon name="download" class="h-4 w-4" />
                    Download CV
                </a>
                <a href="#contact" data-scroll-to class="button-primary">
                    Let’s Talk
                    <x-icon name="arrow-up-right" class="h-4 w-4" />
                </a>
            </div>

            <button type="button" data-menu-toggle aria-expanded="false" class="inline-flex h-11 w-11 items-center justify-center rounded-2xl border border-white/10 bg-white/6 text-white lg:hidden">
                <x-icon name="menu" class="h-5 w-5" />
            </button>
        </div>

        <div data-menu-panel class="section-wrap hidden pb-4 lg:hidden">
            <div class="glass-panel rounded-3xl p-4">
                <div class="grid gap-2">
                    @foreach ([
                        ['label' => 'About', 'href' => '#about'],
                        ['label' => 'Skills', 'href' => '#skills'],
                        ['label' => 'Resume', 'href' => '#resume'],
                        ['label' => 'Certifications', 'href' => '#certifications'],
                        ['label' => 'Projects', 'href' => '#projects'],
                        ['label' => 'Contact', 'href' => '#contact'],
                    ] as $link)
                        <a href="{{ $link['href'] }}" data-scroll-to class="rounded-2xl px-4 py-3 text-sm font-medium text-slate-200 hover:bg-white/6">
                            {{ $link['label'] }}
                        </a>
                    @endforeach
                </div>
                <div class="mt-4 grid grid-cols-2 gap-3">
                    <a href="{{ route('cv.download') }}" class="button-secondary w-full">
                        <x-icon name="download" class="h-4 w-4" />
                        Download CV
                    </a>
                    <a href="#projects" data-scroll-to class="button-primary w-full">
                        View Work
                        <x-icon name="arrow-up-right" class="h-4 w-4" />
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class="relative">
        <section id="hero" data-hero class="section-wrap relative overflow-hidden pb-20 pt-10 sm:pb-24 sm:pt-14 lg:pb-28 lg:pt-20">
            <div class="absolute inset-0 overflow-hidden rounded-[2rem] border border-white/8 bg-white/4 backdrop-blur-3xl">
                <div data-hero-blob class="absolute left-10 top-20 h-40 w-40 rounded-full bg-portfolio-lemon/20 blur-[90px]"></div>
                <div data-hero-orbit class="absolute right-12 top-12 h-32 w-32 rounded-full border border-white/15"></div>
                <div class="absolute left-1/2 top-[-4rem] h-[28rem] w-[28rem] -translate-x-1/2 rounded-full bg-portfolio-sky/20 blur-[140px]"></div>
            </div>

            <div class="relative grid items-center gap-10 lg:grid-cols-[1.15fr_0.85fr] lg:gap-14">
                <div data-hero-copy class="relative z-10">
                    <span class="section-kicker mb-5">Portfolio</span>
                    <h1 class="font-display text-5xl font-bold tracking-tight text-white text-balance sm:text-6xl lg:text-7xl xl:text-8xl">
                        {{ $portfolio['profile']['name'] }}
                    </h1>
                    <div class="mt-5 flex flex-wrap gap-3">
                        <span class="badge-chip"><x-icon name="sparkles" class="h-4 w-4 text-portfolio-lemon" />{{ $portfolio['profile']['role'] }}</span>
                        @foreach ($portfolio['profile']['secondary_roles'] as $role)
                            <span class="badge-chip">{{ $role }}</span>
                        @endforeach
                    </div>
                    <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300 sm:text-xl">
                        {{ $portfolio['profile']['tagline'] }}
                    </p>
                    <p class="mt-5 max-w-2xl text-base leading-7 text-slate-400 sm:text-lg">
                        {{ $portfolio['profile']['summary'] }}
                    </p>

                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="#projects" data-scroll-to class="button-primary">
                            View Projects
                            <x-icon name="arrow-up-right" class="h-4 w-4" />
                        </a>
                        <a href="{{ route('cv.download') }}" class="button-secondary">
                            <x-icon name="download" class="h-4 w-4" />
                            Download CV
                        </a>
                    </div>

                    <div class="mt-8 flex flex-wrap items-center gap-3">
                        @foreach ($portfolio['socials'] as $social)
                            <a href="{{ $social['href'] }}" target="_blank" rel="noreferrer" class="glass-panel hover-lift inline-flex items-center gap-2 rounded-full px-4 py-3 text-sm font-medium text-slate-200 hover:text-white">
                                <x-icon :name="$social['icon']" class="h-4 w-4" />
                                {{ $social['label'] }}
                            </a>
                        @endforeach
                    </div>

                    <div class="mt-10 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                        @foreach ($portfolio['highlights'] as $highlight)
                            <article data-stagger-child class="glass-panel hover-lift rounded-3xl p-5">
                                <div class="text-xs uppercase tracking-[0.24em] text-slate-400">{{ $highlight['label'] }}</div>
                                <div class="mt-3 font-display text-2xl font-bold text-white">{{ $highlight['value'] }}</div>
                            </article>
                        @endforeach
                    </div>
                </div>

                <div data-hero-panel class="relative z-10">
                    <div class="glass-panel-strong hover-lift relative overflow-hidden rounded-[2rem] p-4 sm:p-6">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.18),transparent_35%)]"></div>
                        <div class="relative grid gap-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Engineer Profile</p>
                                    <p class="mt-2 font-display text-2xl font-bold text-white">Premium personal brand</p>
                                </div>
                                <span class="badge-chip bg-emerald-500/12 text-emerald-200">
                                    <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                                    Available
                                </span>
                            </div>

                            <div class="relative overflow-hidden rounded-[1.75rem] border border-white/10 bg-gradient-to-br from-slate-900 via-slate-950 to-slate-900 p-5 shadow-[0_30px_80px_-30px_rgba(0,0,0,0.65)]">
                                <img src="{{ asset('images/profile-card.svg') }}" alt="{{ $portfolio['profile']['name'] }}" class="h-full w-full rounded-[1.35rem] object-cover">
                                <div class="absolute inset-x-5 bottom-5 rounded-[1.25rem] border border-white/10 bg-slate-950/75 p-4 backdrop-blur-xl">
                                    <div class="flex items-center justify-between gap-4">
                                        <div>
                                            <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Location</p>
                                            <p class="mt-1 text-sm font-semibold text-white">{{ $portfolio['profile']['location'] }}</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Education</p>
                                            <p class="mt-1 text-sm font-semibold text-white">{{ $portfolio['profile']['education'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid gap-4 sm:grid-cols-2">
                                <div class="glass-panel rounded-3xl p-5">
                                    <div class="flex items-center gap-3">
                                        <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-portfolio-blue/18 text-portfolio-sky">
                                            <x-icon name="layers-3" class="h-5 w-5" />
                                        </span>
                                        <div>
                                            <p class="text-sm font-semibold text-white">Focus Areas</p>
                                            <p class="text-xs text-slate-400">Engineering depth + product polish</p>
                                        </div>
                                    </div>
                                    <div class="mt-4 flex flex-wrap gap-2">
                                        @foreach ($portfolio['profile']['focus'] as $focus)
                                            <span class="badge-chip">{{ $focus }}</span>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="glass-panel rounded-3xl p-5">
                                    <div class="flex items-center gap-3">
                                        <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-portfolio-lemon/15 text-portfolio-lemon">
                                            <x-icon name="code-2" class="h-5 w-5" />
                                        </span>
                                        <div>
                                            <p class="text-sm font-semibold text-white">Tech Stack</p>
                                            <p class="text-xs text-slate-400">Multi-stack, maintainable delivery</p>
                                        </div>
                                    </div>
                                    <div class="mt-4 flex flex-wrap gap-2">
                                        @foreach ($portfolio['profile']['tech_stack'] as $tech)
                                            <span class="badge-chip">{{ $tech }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="section-wrap py-20 sm:py-24">
            <x-section-heading
                eyebrow="About"
                title="A software engineer shaped by modern product thinking."
                description="Built around D4 Teknik Informatika at Politeknik Negeri Malang, the profile combines software engineering discipline with practical experience across Laravel, Next.js, Flutter, and AI-aware development."
            />

            <div data-animate class="reveal mt-12 grid gap-6 lg:grid-cols-[0.98fr_1.02fr]">
                <div class="glass-panel hover-lift rounded-[2rem] p-7 sm:p-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Biography</p>
                            <h3 class="mt-2 font-display text-2xl font-bold text-white">Professional overview</h3>
                        </div>
                        <span class="badge-chip bg-white/8">
                            <x-icon name="sparkles" class="h-4 w-4 text-portfolio-lemon" />
                            Premium builder
                        </span>
                    </div>
                    <p class="mt-5 text-base leading-8 text-slate-300">
                        {{ $portfolio['profile']['summary'] }}
                    </p>

                    <div class="mt-8 grid gap-4 sm:grid-cols-2">
                        <div class="rounded-3xl border border-white/10 bg-white/5 p-5">
                            <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Location</p>
                            <p class="mt-2 text-lg font-semibold text-white">{{ $portfolio['profile']['location'] }}</p>
                        </div>
                        <div class="rounded-3xl border border-white/10 bg-white/5 p-5">
                            <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Education</p>
                            <p class="mt-2 text-lg font-semibold text-white">{{ $portfolio['profile']['education'] }}</p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-6 sm:grid-cols-2">
                    <div class="glass-panel hover-lift rounded-[2rem] p-7">
                        <div class="flex items-center gap-3">
                            <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-portfolio-sky/16 text-portfolio-sky"><x-icon name="map-pin" class="h-5 w-5" /></span>
                            <div>
                                <p class="text-sm font-semibold text-white">Location</p>
                                <p class="text-sm text-slate-400">{{ $portfolio['profile']['location'] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="glass-panel hover-lift rounded-[2rem] p-7">
                        <div class="flex items-center gap-3">
                            <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-portfolio-lemon/16 text-portfolio-lemon"><x-icon name="graduation-cap" class="h-5 w-5" /></span>
                            <div>
                                <p class="text-sm font-semibold text-white">Education</p>
                                <p class="text-sm text-slate-400">D4 Teknik Informatika</p>
                            </div>
                        </div>
                    </div>
                    <div class="glass-panel hover-lift rounded-[2rem] p-7">
                        <div class="flex items-center gap-3">
                            <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-white/10 text-white"><x-icon name="layers-3" class="h-5 w-5" /></span>
                            <div>
                                <p class="text-sm font-semibold text-white">Focus Areas</p>
                                <p class="text-sm text-slate-400">Software Engineering, Laravel, Next.js, Flutter</p>
                            </div>
                        </div>
                    </div>
                    <div class="glass-panel hover-lift rounded-[2rem] p-7">
                        <div class="flex items-center gap-3">
                            <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-portfolio-blue/16 text-portfolio-sky"><x-icon name="cpu" class="h-5 w-5" /></span>
                            <div>
                                <p class="text-sm font-semibold text-white">Tech Stack</p>
                                <p class="text-sm text-slate-400">Laravel, Next.js, Flutter, Python, MySQL</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="section-wrap py-20 sm:py-24">
            <x-section-heading
                eyebrow="Skills"
                title="Animated skill cards with a strong engineering feel."
                description="Built to feel interactive without leaning on progress bars. Each category uses badges, icons, and hover states to communicate depth and versatility."
            />

            <div data-animate class="reveal mt-12 card-grid">
                @foreach ($portfolio['skills'] as $skillGroup)
                    <x-skill-card :group="$skillGroup" />
                @endforeach
            </div>
        </section>

        <section id="resume" class="section-wrap py-20 sm:py-24">
            <x-section-heading
                eyebrow="Resume"
                title="Education and experience in a modern timeline."
                description="A concise timeline that keeps the story readable, premium, and easy to scan across mobile, tablet, and wide desktop layouts."
            />

            <div data-animate class="reveal mt-12 grid gap-8 lg:grid-cols-[1fr_1fr]">
                <div class="glass-panel rounded-[2rem] p-7 sm:p-8">
                    <div class="flex items-center gap-3">
                        <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-portfolio-sky/16 text-portfolio-sky"><x-icon name="graduation-cap" class="h-5 w-5" /></span>
                        <div>
                            <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Education</p>
                            <h3 class="mt-1 font-display text-2xl font-bold text-white">Academic path</h3>
                        </div>
                    </div>

                    <div class="mt-8 space-y-6">
                        @foreach ($portfolio['education'] as $item)
                            <x-timeline-item :item="$item" />
                        @endforeach
                    </div>
                </div>

                <div class="glass-panel rounded-[2rem] p-7 sm:p-8">
                    <div class="flex items-center gap-3">
                        <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-portfolio-lemon/16 text-portfolio-lemon"><x-icon name="briefcase" class="h-5 w-5" /></span>
                        <div>
                            <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Experience</p>
                            <h3 class="mt-1 font-display text-2xl font-bold text-white">Selected work context</h3>
                        </div>
                    </div>

                    <div class="mt-8 space-y-6">
                        @foreach ($portfolio['experience'] as $item)
                            <x-timeline-item :item="$item" />
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section id="certifications" class="section-wrap py-20 sm:py-24">
            <x-section-heading
                eyebrow="Certifications"
                title="Credential cards with polished presentation."
                description="Each card keeps the layout premium with a soft visual placeholder, issuer metadata, and a hover lift that feels deliberate."
            />

            <div data-animate class="reveal mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                @foreach ($portfolio['certifications'] as $certification)
                    <x-cert-card :certification="$certification" />
                @endforeach
            </div>
        </section>

        <section id="projects" class="section-wrap py-20 sm:py-24">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                <x-section-heading
                    eyebrow="Featured Projects"
                    title="Portfolio-defining projects with category filtering."
                    description="Designed as the visual centerpiece of the site. Cards are large, expressive, and organized for fast browsing by web, mobile, and IoT focus."
                />

                <div data-animate class="reveal flex flex-wrap gap-3 lg:justify-end">
                    @foreach ([
                        ['label' => 'All', 'value' => 'all'],
                        ['label' => 'Web', 'value' => 'web'],
                        ['label' => 'Mobile', 'value' => 'mobile'],
                        ['label' => 'IoT', 'value' => 'iot'],
                    ] as $filter)
                        <button type="button" data-project-filter="{{ $filter['value'] }}" aria-pressed="{{ $filter['value'] === 'all' ? 'true' : 'false' }}" class="project-filter {{ $filter['value'] === 'all' ? 'is-active' : '' }}">
                            {{ $filter['label'] }}
                        </button>
                    @endforeach
                </div>
            </div>

            <div data-animate class="reveal mt-12 grid gap-6 lg:grid-cols-2">
                @foreach ($portfolio['projects'] as $project)
                    <x-project-card :project="$project" />
                @endforeach
            </div>
        </section>

        <section id="contact" class="section-wrap py-20 sm:py-24">
            <x-section-heading
                eyebrow="Contact"
                title="A premium closing section with clear next steps."
                description="The contact area keeps the energy high with a polished CTA, availability status, and clean contact cards that feel at home in a premium personal brand."
            />

            <div data-animate class="reveal mt-12 grid gap-6 lg:grid-cols-[1.1fr_0.9fr]">
                <div class="glass-panel-strong rounded-[2rem] p-7 sm:p-8">
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <div>
                            <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Availability</p>
                            <h3 class="mt-2 font-display text-3xl font-bold text-white">{{ $portfolio['contact']['status'] }}</h3>
                        </div>
                        <span class="badge-chip bg-emerald-500/12 text-emerald-200">
                            <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                            Open
                        </span>
                    </div>

                    <p class="mt-5 max-w-2xl text-base leading-8 text-slate-300">
                        For collaborations, internship opportunities, freelance builds, or product design conversations, the best way to reach me is through email or LinkedIn.
                    </p>

                    <div class="mt-8 grid gap-4 sm:grid-cols-2">
                        <x-contact-card label="Location" value="{{ $portfolio['contact']['location'] }}" icon="map-pin" href="https://maps.google.com/?q={{ urlencode($portfolio['contact']['location']) }}" />
                        <x-contact-card label="Email" value="{{ $portfolio['contact']['email'] }}" icon="mail" href="mailto:{{ $portfolio['contact']['email'] }}" />
                        <x-contact-card label="Github" value="{{ $portfolio['contact']['github'] }}" icon="github" href="{{ $portfolio['contact']['github'] }}" />
                        <x-contact-card label="LinkedIn" value="{{ $portfolio['contact']['linkedin'] }}" icon="linkedin" href="{{ $portfolio['contact']['linkedin'] }}" />
                    </div>
                </div>

                <div class="glass-panel hover-lift rounded-[2rem] p-7 sm:p-8">
                    <div class="flex items-center gap-3">
                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-portfolio-lemon/16 text-portfolio-lemon">
                            <x-icon name="sparkles" class="h-5 w-5" />
                        </span>
                        <div>
                            <p class="text-xs uppercase tracking-[0.24em] text-slate-400">CTA</p>
                            <h3 class="mt-1 font-display text-2xl font-bold text-white">Let’s build something polished.</h3>
                        </div>
                    </div>

                    <div class="mt-6 rounded-[1.75rem] border border-white/10 bg-[linear-gradient(135deg,rgba(0,61,167,0.35),rgba(56,159,225,0.18),rgba(255,228,1,0.15))] p-6">
                        <p class="text-sm uppercase tracking-[0.24em] text-slate-200/80">Location</p>
                        <p class="mt-2 font-display text-2xl font-bold text-white">{{ $portfolio['contact']['location'] }}</p>
                        <p class="mt-4 max-w-md text-sm leading-7 text-slate-200/85">
                            Clean interfaces, strong architecture, and fast interactions are the standard. If the brief needs premium execution, this is the right place to start.
                        </p>
                    </div>

                    <div class="mt-6 grid gap-3">
                        <a href="mailto:{{ $portfolio['contact']['email'] }}" class="button-primary w-full">
                            Start a conversation
                            <x-icon name="arrow-up-right" class="h-4 w-4" />
                        </a>
                        <a href="{{ route('cv.download') }}" class="button-secondary w-full">
                            <x-icon name="download" class="h-4 w-4" />
                            Download CV
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <footer class="border-t border-white/8 bg-slate-950/45">
            <div class="section-wrap flex flex-col gap-6 py-8 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="font-display text-xl font-bold text-white">{{ $portfolio['profile']['name'] }}</p>
                    <p class="mt-1 text-sm text-slate-400">Software Engineer · Malang, Indonesia</p>
                </div>
                <div class="flex flex-wrap items-center gap-4 text-sm text-slate-400">
                    <a href="#about" data-scroll-to class="hover:text-white">About</a>
                    <a href="#projects" data-scroll-to class="hover:text-white">Projects</a>
                    <a href="#contact" data-scroll-to class="hover:text-white">Contact</a>
                </div>
            </div>
        </footer>
    </main>
@endsection
