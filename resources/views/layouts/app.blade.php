<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1f3347">
    <title>@yield('title', 'Daiku MEP Solution')</title>

    <link rel="icon" sizes="32x32" href="{{ asset('assets/images/logo-daiku.png') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&family=Kantumruy+Pro:wght@100..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
      integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Libraries --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    @yield('css')

    <style>
    /* ══════════════════════════════════════════
       DESIGN TOKENS
    ══════════════════════════════════════════ */
    :root {
        --orange:        #F26B27;
        --orange-dark:   #d85c1e;
        --orange-light:  #fff1ea;
        --navy:          #1f3347;
        --navy-light:    #2b3d4f;
        --white:         #ffffff;
        --gray-bg:       #f4f4f4;
        --gray-text:     #6b7280;
        --body-text:     #374151;
        --font-main:     'Inter', sans-serif;
        --font-display:  'Poppins', sans-serif;
        --ease-out:      cubic-bezier(0.16, 1, 0.3, 1);
        --shadow-sm:     0 2px 8px rgba(0,0,0,.08);
        --shadow-md:     0 8px 32px rgba(0,0,0,.12);
        --shadow-lg:     0 20px 60px rgba(0,0,0,.18);
        --radius:        10px;
    }

    /* ══════════════════════════════════════════
       BASE RESET
    ══════════════════════════════════════════ */
    *, *::before, *::after { box-sizing: border-box; }

    html { scroll-behavior: smooth; }

    body {
        font-family: var(--font-main);
        color: var(--body-text);
        line-height: 1.7;
        overflow-x: hidden;
        background: var(--white);
    }

    video {
        object-fit: cover;
        width: 100%;
        height: 100%;
        display: block;
    }

    img { display: block; max-width: 100%; }
    a   { text-decoration: none; color: inherit; }
    ul  { list-style: none; margin: 0; padding: 0; }

    /* ══════════════════════════════════════════
       NAVBAR — DESKTOP ACTIVE STATE
    ══════════════════════════════════════════ */
    .nav-item .active {
        font-weight: 700;
        color: var(--orange);
        position: relative;
    }
    .nav-item .active::before {
        content: "";
        position: absolute;
        bottom: -14px;
        left: -10px;
        width: calc(100% + 20px);
        height: 5px;
        background: var(--orange);
        border-radius: 3px 3px 0 0;
    }

    /* ══════════════════════════════════════════
       MOBILE MENU TRANSITIONS
    ══════════════════════════════════════════ */
    #mobile-menu {
        max-height: 0;
        opacity: 0;
        overflow: hidden;
        transition: max-height 0.42s var(--ease-out), opacity 0.3s ease;
        background: var(--navy-light);
    }
    #mobile-menu.open {
        max-height: 100svh;
        opacity: 1;
    }

    .mobile-submenu {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.32s ease;
    }
    .mobile-submenu.open { max-height: 500px; }

    .mobile-active {
        color: var(--orange) !important;
        font-weight: 700;
    }

    /* ══════════════════════════════════════════
       HAMBURGER → X ANIMATION
    ══════════════════════════════════════════ */
    .ham-line {
        display: block;
        width: 22px;
        height: 2px;
        background: white;
        border-radius: 2px;
        transition: transform 0.32s var(--ease-out), opacity 0.25s ease;
        transform-origin: center;
    }
    #hamburger.active .ham-line:nth-child(1) { transform: translateY(8px) rotate(45deg); }
    #hamburger.active .ham-line:nth-child(2) { opacity: 0; transform: scaleX(0); }
    #hamburger.active .ham-line:nth-child(3) { transform: translateY(-8px) rotate(-45deg); }

    /* ══════════════════════════════════════════
       HERO / VIDEO CONTAINER
    ══════════════════════════════════════════ */
    .hero-wrap {
        position: relative;
        width: 100%;
        overflow: hidden;

        /* Fluid height: 45vh on phone → 100vh on desktop */
        height: clamp(320px, 70svh, 100svh);
    }
    @media (min-width: 1024px) {
        .hero-wrap { height: 135.8vh; }
    }
    .hero-wrap video {
        position: absolute;
        inset: 0;
        z-index: -1;
    }

    /* ══════════════════════════════════════════
       HERO TEXT ENTRANCE
       (text layers inside welcome component)
    ══════════════════════════════════════════ */
    @keyframes heroFadeUp {
        from { opacity: 0; transform: translateY(28px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .hero-animate {
        animation: heroFadeUp 0.9s var(--ease-out) both;
    }
    .hero-animate:nth-child(2) { animation-delay: 0.15s; }
    .hero-animate:nth-child(3) { animation-delay: 0.30s; }
    .hero-animate:nth-child(4) { animation-delay: 0.45s; }

    /* ══════════════════════════════════════════
       PAGE LOADER
    ══════════════════════════════════════════ */
    #page-loader {
        position: fixed;
        inset: 0;
        z-index: 9999;
        background: var(--navy);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: opacity 0.5s ease, visibility 0.5s ease;
    }
    #page-loader.hidden-loader {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
    }
    .loader-ring {
        width: 52px;
        height: 52px;
        border: 4px solid rgba(255,255,255,0.15);
        border-top-color: var(--orange);
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
    }
    .loader-logo {
        position: absolute;
        width: 28px;
        height: 28px;
        object-fit: contain;
    }
    @keyframes spin { to { transform: rotate(360deg); } }

    /* ══════════════════════════════════════════
       SCROLL PROGRESS BAR
    ══════════════════════════════════════════ */
    #scroll-progress {
        position: fixed;
        top: 0; left: 0;
        height: 3px;
        width: 0%;
        background: linear-gradient(90deg, var(--orange), #ff9a56);
        z-index: 10000;
        transition: width 0.1s linear;
        border-radius: 0 2px 2px 0;
    }

    /* ══════════════════════════════════════════
       BACK TO TOP BUTTON
    ══════════════════════════════════════════ */
    #back-to-top {
        position: fixed;
        bottom: 28px;
        right: 20px;
        z-index: 999;
        width: 46px;
        height: 46px;
        border-radius: 50%;
        background: var(--orange);
        color: white;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 20px rgba(242,107,39,.5);
        opacity: 0;
        transform: translateY(16px) scale(0.85);
        transition: opacity 0.3s ease, transform 0.3s ease, background 0.2s;
        pointer-events: none;
    }
    #back-to-top.visible {
        opacity: 1;
        transform: translateY(0) scale(1);
        pointer-events: auto;
    }
    #back-to-top:hover { background: var(--orange-dark); transform: translateY(-3px) scale(1.05); }
    #back-to-top svg { width: 18px; height: 18px; stroke: white; }

    /* ══════════════════════════════════════════
       SWIPER — PROJECT PAGE (mySwiper)
    ══════════════════════════════════════════ */
    .new_swiper .swiper {
        width: 100%;
        padding-top: 40px !important;
        padding-bottom: 70px !important;
        overflow: visible;
    }
    .new_swiper .swiper-slide {
        width: 700px;
        max-width: 92vw;
        opacity: 0.4;
        filter: blur(2px);
        transform: scale(0.93);
        transition: opacity 0.45s ease, filter 0.45s ease, transform 0.45s ease;
        border-radius: var(--radius);
        overflow: hidden;
        box-shadow: var(--shadow-md);
        background: white;
    }
    .new_swiper .swiper-slide-active {
        opacity: 1;
        filter: blur(0);
        transform: scale(1);
        box-shadow: var(--shadow-lg);
    }
    .new_swiper .swiper-slide img { display: block; width: 100%; }
    .new_swiper .swiper-pagination { bottom: 18px !important; }
    .new_swiper .swiper-pagination-bullet {
        background: #ccc !important;
        width: 8px !important;
        height: 8px !important;
        opacity: 1 !important;
        transition: background 0.3s, width 0.3s;
    }
    .new_swiper .swiper-pagination-bullet-active {
        background: var(--orange) !important;
        width: 22px !important;
        border-radius: 4px !important;
    }
    .new_swiper .swiper-button-prev,
    .new_swiper .swiper-button-next {
        width: 42px; height: 42px;
        border-radius: 50%;
        background: var(--orange);
        top: 46%;
        transition: background 0.2s, transform 0.2s;
        z-index: 20;
    }
    .new_swiper .swiper-button-prev:hover,
    .new_swiper .swiper-button-next:hover {
        background: var(--orange-dark);
        transform: scale(1.08);
    }
    .new_swiper .swiper-button-prev::after,
    .new_swiper .swiper-button-next::after {
        font-size: 15px !important;
        font-weight: 800;
        color: white;
    }
    @media (min-width: 900px) {
        .new_swiper .swiper-button-prev { left: calc(50% - 390px); }
        .new_swiper .swiper-button-next { right: calc(50% - 390px); }
    }
    @media (max-width: 899px) {
        .new_swiper .swiper-button-prev { left: 6px; }
        .new_swiper .swiper-button-next { right: 6px; }
    }
    @media (max-width: 1280px) { .new_swiper .swiper-slide { width: 640px; } }
    @media (max-width: 768px)  { .new_swiper .swiper-slide { width: 90vw; } }
    @media (max-width: 480px)  { .new_swiper .swiper-slide { width: 95vw; } }

    /* Slide body fade-up when active */
    .new_swiper .slide-body {
        opacity: 0;
        transform: translateY(10px);
        transition: opacity 0.4s ease 0.15s, transform 0.4s ease 0.15s;
    }
    .new_swiper .swiper-slide-active .slide-body {
        opacity: 1;
        transform: translateY(0);
    }

    /* ══════════════════════════════════════════
       SWIPER — ABOUT / SERVICE (mySwiper1, mySwiper2)
    ══════════════════════════════════════════ */
    .mySwiper1 .swiper-slide,
    .mySwiper2 .swiper-slide {
        width: clamp(260px, 80vw, 700px);
    }

    /* ══════════════════════════════════════════
       FAQ SECTION
    ══════════════════════════════════════════ */
    .faq-section { background: var(--gray-bg); }
    .faq-title   { color: var(--orange); font-weight: 700; }
    .faq-item {
        background: var(--white);
        border: 2px solid rgba(242,107,39,.35);
        border-radius: var(--radius);
        transition: border-color .25s ease, box-shadow .25s ease;
    }
    .faq-item:hover { border-color: var(--orange); box-shadow: var(--shadow-sm); }

    details summary::-webkit-details-marker { display: none; }
    details summary { list-style: none; cursor: pointer; color: #444; font-weight: 600; }
    .arrow { color: var(--orange); transition: transform .3s ease; flex-shrink: 0; }
    details[open] .arrow { transform: rotate(90deg); }
    details[open] .faq-content { background: var(--navy); color: var(--orange); font-weight: 600; border-radius: 0 0 8px 8px; }
    .faq-content { transition: all .3s ease; }

    /* ══════════════════════════════════════════
       WHYUS CLIP PATH
    ══════════════════════════════════════════ */
    .whyus_clip {
        clip-path: polygon(35% 12%, 100% 0, 100% 100%, 0 100%, 0 0);
    }
    @media (max-width: 1023px) {
        .whyus_clip { clip-path: polygon(0 2%, 100% 0, 100% 98%, 0% 100%); }
    }
    .clip {
        clip-path: polygon(82% 0, 100% 40%, 100% 100%, 0 100%, 0 0);
    }

    /* ══════════════════════════════════════════
       SERVICE BG
    ══════════════════════════════════════════ */
    .service_bg {
        background-image: url('assets/images/services/service-bg.png');
    }
    @media (max-width: 768px) {
        .service_bg {
            background: #1c408a;
            clip-path: polygon(0 10%, 100% 0, 100% 90%, 0% 100%);
        }
    }

    /* ══════════════════════════════════════════
       MOBILE-FIRST UTILITY: safe area for notched phones
    ══════════════════════════════════════════ */
    .safe-bottom {
        padding-bottom: env(safe-area-inset-bottom, 12px);
    }

    /* ══════════════════════════════════════════
       TOUCH DEVICE: larger tap targets
    ══════════════════════════════════════════ */
    @media (hover: none) and (pointer: coarse) {
        button, a, summary { min-height: 44px; }
    }

    /* ══════════════════════════════════════════
       REDUCED MOTION
    ══════════════════════════════════════════ */
    @media (prefers-reduced-motion: reduce) {
        *, *::before, *::after {
            animation-duration: 0.01ms !important;
            transition-duration: 0.01ms !important;
        }
        #page-loader { display: none !important; }
    }

    /* ══════════════════════════════════════════
       TABLET BREAKPOINT HELPERS (768–1023px)
    ══════════════════════════════════════════ */
    @media (min-width: 768px) and (max-width: 1023px) {
        .new_swiper .swiper-slide { width: 82vw; }
    }

    /* ══════════════════════════════════════════
       PRINT
    ══════════════════════════════════════════ */
    @media print {
        #page-loader, #scroll-progress, #back-to-top,
        #hamburger, #mobile-menu, video { display: none !important; }
    }
    </style>
     @yield('styles') 
</head>
<body class="w-full antialiased">

    {{-- ── PAGE LOADER ── --}}
    <div id="page-loader" role="status" aria-label="Loading">
        <div style="position:relative; display:flex; align-items:center; justify-content:center;">
            <div class="loader-ring"></div>
            <img src="{{ asset('assets/images/logo-daiku.png') }}" alt="" class="loader-logo">
        </div>
    </div>

    {{-- ── SCROLL PROGRESS BAR ── --}}
    <div id="scroll-progress" aria-hidden="true"></div>

    {{-- ══════════════════════════════════════════
         HERO + VIDEO + HEADER + NAVBAR
    ══════════════════════════════════════════ --}}
    <div class="hero-wrap">

        {{-- Background video --}}
        <video autoplay muted loop playsinline preload="none" aria-hidden="true">
            <source src="{{ url('assets/images/video.mp4') }}"  type="video/mp4">
            <source src="{{ url('assets/images/video.webm') }}" type="video/webm">
        </video>

        {{-- Desktop Header (logo + contact bar) --}}
        @include('components.header')

        {{-- Desktop Navbar --}}
        @include('components.navbar')

        {{-- Hero welcome / text overlay --}}
        @include('components.welcome')
    </div>

   @unless (request()->routeIs('home', 'about', 'career', 'project', 'maintenance', 'contact'))
<div class="hidden lg:block absolute bottom-[-600px] xl:bottom-[-850px] left-1/2 -translate-x-1/2 z-30 pointer-events-none">
    <img src="{{ asset('assets/images/shapes/Frame2.png') }}" alt="" aria-hidden="true"
         class="w-screen max-w-none h-auto">
</div>
@endunless

    {{-- ══ MAIN CONTENT ══ --}}
    @yield('content')

    {{-- ══ FOOTER ══ --}}
    @include('components.footer')

    {{-- ══ BACK TO TOP BUTTON ══ --}}
    <button id="back-to-top" aria-label="Back to top" onclick="window.scrollTo({top:0,behavior:'smooth'})">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>
        </svg>
    </button>

    {{-- ══ SCRIPTS ══ --}}
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
    /* ═══════════════════════════════════════════
       PAGE LOADER
    ═══════════════════════════════════════════ */
    window.addEventListener('load', function () {
        const loader = document.getElementById('page-loader');
        if (loader) {
            loader.classList.add('hidden-loader');
            // Remove from DOM after transition
            setTimeout(() => loader.remove(), 600);
        }
    });

    /* ═══════════════════════════════════════════
       SCROLL PROGRESS BAR
    ═══════════════════════════════════════════ */
    (function () {
        const bar = document.getElementById('scroll-progress');
        const btn = document.getElementById('back-to-top');
        if (!bar && !btn) return;
        function onScroll() {
            const scrolled = window.scrollY;
            const total    = document.documentElement.scrollHeight - window.innerHeight;
            if (bar) bar.style.width = total > 0 ? (scrolled / total * 100) + '%' : '0%';
            if (btn) btn.classList.toggle('visible', scrolled > 400);
        }
        window.addEventListener('scroll', onScroll, { passive: true });
    })();

    /* ═══════════════════════════════════════════
       SWIPER — HOME ABOUT (mySwiper1)
    ═══════════════════════════════════════════ */
    if (document.querySelector('.mySwiper1')) {
        var swiper = new Swiper('.mySwiper1', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            spaceBetween: 40,
            slidesPerView: 'auto',
            loop: true,
            speed: 600,
            coverflowEffect: { rotate: 0, stretch: 0, depth: 300, modifier: 1.5, slideShadows: false },
            pagination: { el: '.mySwiper1 .swiper-pagination', clickable: true, dynamicBullets: true },
            navigation: { nextEl: '.mySwiper1 .swiper-button-next', prevEl: '.mySwiper1 .swiper-button-prev' },
            keyboard: { enabled: true },
            on: {
                slideChange: function () {
                    const content = [
                        `<div class="w-full max-w-5xl mx-auto"><div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 sm:gap-12 px-4"><div><h1 class="text-[40px] sm:text-[50px] text-[#2b3d4f] font-bold leading-none">01</h1><hr class="border-[#2b3d4f] border-b-2 my-2"><h2 class="text-[#f26b27] font-semibold text-[16px] sm:text-[18px] mt-2">Technical Excellence</h2><p class="mt-2 text-[13px] sm:text-[15px] text-[#374151]">Striving for unparalleled proficiency in the fields of Mechanical, Electrical, and Plumbing design and implementation.</p></div><div><h1 class="text-[40px] sm:text-[50px] text-[#2b3d4f] font-bold leading-none">02</h1><hr class="border-[#2b3d4f] border-b-2 my-2"><h2 class="text-[#f26b27] font-semibold text-[16px] sm:text-[18px] mt-2">Innovation + Adaptability</h2><p class="mt-2 text-[13px] sm:text-[15px]">Embracing a culture of innovation, continuous learning, and adaptability to stay at the forefront of industry advancements.</p></div><div><h1 class="text-[40px] sm:text-[50px] text-[#2b3d4f] font-bold leading-none">03</h1><hr class="border-[#2b3d4f] border-b-2 my-2"><h2 class="text-[#f26b27] font-semibold text-[16px] sm:text-[18px] mt-2">Environmental Stewardship</h2><p class="mt-2 text-[13px] sm:text-[15px]">Demonstrating a strong commitment to environmental sustainability by integrating eco-friendly practices.</p></div><div><h1 class="text-[40px] sm:text-[50px] text-[#2b3d4f] font-bold leading-none">04</h1><hr class="border-[#2b3d4f] border-b-2 my-2"><h2 class="text-[#f26b27] font-semibold text-[16px] sm:text-[18px] mt-2">Accountability</h2><p class="mt-2 text-[13px] sm:text-[15px]">Taking responsibility for our actions and outcomes, and learning from both successes and challenges.</p></div><div><h1 class="text-[40px] sm:text-[50px] text-[#2b3d4f] font-bold leading-none">05</h1><hr class="border-[#2b3d4f] border-b-2 my-2"><h2 class="text-[#f26b27] font-semibold text-[16px] sm:text-[18px] mt-2">Client Satisfaction</h2><p class="mt-2 text-[13px] sm:text-[15px]">Dedication to understanding and exceeding the needs and expectations of our clients through exceptional service.</p></div></div></div>`,
                        `<div class="w-full max-w-4xl mx-auto text-[14px] md:text-[16px] text-left space-y-3 px-4"><p>Our mission is to lead in Mechanical, Electrical, Plumbing, and Firefighting design, delivering international standard services.</p><p>We actively engage with our customers, understand their challenges, and provide responsible, cost-effective solutions with environmental care.</p></div>`,
                        `<div class="w-full max-w-2xl mx-auto text-[14px] md:text-[16px] text-left px-4">To emerge as the forefront design firm in Mechanical, Electrical, Plumbing, and Firefighting, delivering services that adhere to international standards.</div>`,
                    ];
                    const el = document.getElementById('dynamic-content1');
                    if (el) el.innerHTML = content[this.realIndex] || '';
                }
            }
        });
    }

    /* ═══════════════════════════════════════════
       SWIPER — HOME SERVICE (mySwiper2)
    ═══════════════════════════════════════════ */
    if (document.querySelector('.mySwiper2')) {
        var swiper2 = new Swiper('.mySwiper2', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            spaceBetween: 40,
            slidesPerView: 'auto',
            loop: true,
            speed: 600,
            coverflowEffect: { rotate: 0, stretch: 0, depth: 300, modifier: 1.5, slideShadows: false },
            pagination: { el: '.mySwiper2 .swiper-pagination', clickable: true, dynamicBullets: true },
            navigation: { nextEl: '.mySwiper2 .swiper-button-next', prevEl: '.mySwiper2 .swiper-button-prev' },
            keyboard: { enabled: true },
            on: {
                slideChange: function () {
                    const content = [
                        `<div class="w-full max-w-3xl mx-auto"><div class="grid grid-cols-1 sm:grid-cols-2 gap-2 px-4"><div class="flex items-center justify-center"><img src="{{ asset('assets/images/services/image-1.jpg') }}" alt="LV System" class="w-full h-full object-cover"></div><div class="bg-[#F26A27] p-6 flex flex-col justify-center"><p class="text-white font-bold text-[18px] sm:text-[20px] mb-3">Low Voltage System</p><ul class="list-disc list-inside space-y-1 text-[11px] md:text-[12px] text-white"><li>Main Feeder MV &amp; LV Distribution</li><li>General Lighting System</li><li>Emergency Lighting System</li><li>Power Supply System</li><li>LV &amp; ELV Cable Containment</li><li>Lightning Protection and Earthing System</li></ul></div><div class="bg-[#F26A27] p-6 flex flex-col justify-center"><p class="text-white font-bold text-[18px] sm:text-[20px] mb-3">Extra Low Voltage System</p><ul class="list-disc list-inside space-y-[2px] text-[11px] md:text-[12px] text-white"><li>Data and Telephone System</li><li>Building Management System</li><li>Public Addressable System</li><li>Automatic Fire Alarm System</li><li>Guard Tour System</li><li>CCTV System</li><li>Card Access Control System</li></ul></div><div class="flex items-center justify-center"><img src="{{ asset('assets/images/services/image-2.jpg') }}" alt="" class="w-full h-full object-cover"></div></div></div>`,
                        `<div class="w-full max-w-3xl mx-auto"><div class="grid grid-cols-1 sm:grid-cols-2 gap-2 px-4"><div class="flex items-center justify-center"><img src="{{ asset('assets/images/services/image-3.jpg') }}" alt="" class="w-full h-full object-cover"></div><div class="bg-[#F26A27] p-6 flex items-center justify-center"><ul class="list-disc list-inside space-y-2 text-[12px] md:text-[14px] text-white"><li>Fire Detection System</li><li>Fire Hose System</li><li>Fire Sprinkler System</li><li>Fm200</li><li>Fire Extinguisher</li><li>Cold &amp; Hot Water Supply</li></ul></div><div class="bg-[#F26A27] p-6 flex items-center justify-center"><ul class="list-disc list-inside space-y-2 text-[12px] md:text-[14px] text-white"><li>Boiler System</li><li>Sanitary Drainage</li><li>Storm Drainage</li><li>Irrigation</li><li>Water Treatment Plant</li></ul></div><div class="flex items-center justify-center"><img src="{{ asset('assets/images/services/image-4.jpg') }}" alt="" class="w-full h-full object-cover"></div></div></div>`,
                        `<div class="w-full max-w-3xl mx-auto"><div class="grid grid-cols-1 sm:grid-cols-2 gap-2 px-4"><div class="flex items-center justify-center"><img src="{{ asset('assets/images/services/image-5.jpg') }}" alt="" class="w-full h-full object-cover"></div><div class="bg-[#F26A27] p-6 flex flex-col justify-center"><p class="text-white font-bold text-[18px] sm:text-[20px] mb-3">Air-Conditioning System</p><ul class="list-disc list-inside space-y-2 text-[12px] md:text-[14px] text-white"><li>Cool Room</li><li>Clean Room</li><li>Ventilation System</li><li>Air-Curtain</li><li>Kitchen Hood</li><li>Central Gas System (LPG)</li></ul></div><div class="bg-[#F26A27] p-6 flex items-center justify-center"><ul class="list-disc list-inside space-y-2 text-[12px] md:text-[14px] text-white"><li>Fire Detection System</li><li>Fire Hose System</li><li>Fire Sprinkler System</li><li>Fm 200</li><li>Fire Extinguisher</li><li>Cold &amp; Hot Water Supply</li></ul></div><div class="flex items-center justify-center"><img src="{{ asset('assets/images/services/image-6.jpg') }}" alt="" class="w-full h-full object-cover"></div></div></div>`,
                    ];
                    const el = document.getElementById('dynamic-content2');
                    if (el) el.innerHTML = content[this.realIndex] || '';
                }
            }
        });
    }

    /* ═══════════════════════════════════════════
       SWIPER — PROJECTS (mySwiper — coverflow)
       Note: project.blade.php also inits this
       via @push('scripts'), so we guard here.
    ═══════════════════════════════════════════ */
    if (document.querySelector('.mySwiper') && !window.__projectSwiperInit) {
        var swiperMain = new Swiper('.mySwiper', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            speed: 520,
            coverflowEffect: { rotate: 0, stretch: 0, depth: 200, modifier: 2, slideShadows: false },
            loop: true,
            pagination: { el: '.swiper-pagination', clickable: true, dynamicBullets: true },
            navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
            keyboard: { enabled: true },
            on: {
                init: function () { jumpToSlideFromURL(this); }
            }
        });

        function jumpToSlideFromURL(swiperInstance) {
            const params  = new URLSearchParams(window.location.search);
            const slideId = params.get('slide');
            if (!slideId) return;
            const target = document.getElementById(slideId);
            if (!target) return;
            const realIndex = Number(target.dataset.swiperSlideIndex);
            if (isNaN(realIndex)) return;
            swiperInstance.slideToLoop(realIndex, 0, false);
            document.getElementById('our_experience')?.scrollIntoView({ behavior: 'smooth' });
        }
    }

    /* ═══════════════════════════════════════════
       AOS ANIMATIONS
    ═══════════════════════════════════════════ */
    AOS.init({
        duration: 750,
        easing:   'ease-out-cubic',
        once:     true,
        offset:   50,
        disable:  window.matchMedia('(prefers-reduced-motion: reduce)').matches,
    });

    /* ═══════════════════════════════════════════
       YIELD JS SLOT
    ═══════════════════════════════════════════ */

    /* ═══════════════════════════════════════════
   SCROLL TO HASH TARGET ON PAGE LOAD
═══════════════════════════════════════════ */
document.addEventListener('DOMContentLoaded', () => {
    if (window.location.hash) {
        const target = document.querySelector(window.location.hash);
        if (target) {
            setTimeout(() => target.scrollIntoView({ behavior: 'smooth', block: 'start' }), 250);
        }
    }
});
    </script>

    @yield('js')
    @stack('scripts')

</body>
</html>