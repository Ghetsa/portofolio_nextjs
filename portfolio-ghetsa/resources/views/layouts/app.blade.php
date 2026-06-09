@php
    $title = trim($__env->yieldContent('title', 'Ghetsa Ramadhani | Fullstack Developer Portfolio'));
    $description = trim($__env->yieldContent('description', 'Ghetsa Ramadhani Riska Arryanti is an Informatics Engineering student and software engineer focused on fullstack web apps, mobile apps, and AI-powered solutions.'));
    $canonical = url('/');
@endphp

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#003DA7">
        <meta name="color-scheme" content="dark">
        <meta name="format-detection" content="telephone=no">
        <link rel="canonical" href="{{ $canonical }}">
        <title>{{ $title }}</title>
        <meta name="description" content="{{ $description }}">
        <meta name="keywords" content="{{ implode(', ', $portfolio['seo']['keywords']) }}">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="en_US">
        <meta property="og:site_name" content="Ghetsa Ramadhani Portfolio">
        <meta property="og:title" content="{{ $title }}">
        <meta property="og:description" content="{{ $description }}">
        <meta property="og:url" content="{{ $canonical }}">
        <meta property="og:image" content="{{ asset('og-image.svg') }}">
        <meta property="og:image:type" content="image/svg+xml">
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:title" content="{{ $title }}">
        <meta property="twitter:description" content="{{ $description }}">
        <meta property="twitter:image" content="{{ asset('og-image.svg') }}">
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('head')
    </head>
    <body class="page-shell min-h-screen overflow-x-hidden">
        <div class="noise-overlay"></div>
        <div class="pointer-events-none absolute left-1/2 top-0 h-[42rem] w-[42rem] -translate-x-1/2 rounded-full bg-portfolio-sky/20 blur-[180px]"></div>
        <div class="pointer-events-none absolute right-[-8rem] top-[16rem] h-[28rem] w-[28rem] rounded-full bg-portfolio-lemon/18 blur-[170px]"></div>
        <div class="pointer-events-none absolute left-[-10rem] top-[42rem] h-[24rem] w-[24rem] rounded-full bg-portfolio-blue/18 blur-[160px]"></div>

        @yield('content')

        @stack('scripts')
    </body>
</html>
