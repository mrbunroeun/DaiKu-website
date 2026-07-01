{{-- components/navbar.blade.php --}}
<div class=" hidden min-[1210px]:block max-w-screen-2xl mx-auto px-6 xl:px-12 2xl:px-20 pt-3 pb-3">
    <p class="text-white text-[11px]  leading-snug text-right ">
        #99, Street 76CC, Trapiang Thleoung 1 Village,
        Chom Chao 1 Commune,<br>
        Pur Senchey District,
        Phnom Penh 098 954 328
        daikumep@gmail.com
    </p>
</div>
<section class="relative bg-[#2b3d4f] hidden min-[1210px]:block">
    <div class="relative flex items-center h-[80px] px-6 xl:px-12 2xl:px-20 max-w-screen-2xl mx-auto">

        {{-- ── DESKTOP LOGO (absolute left) ── --}}
        <a href="{{ route('home') }}" aria-label="Daiku MEP Home"
            class="absolute left-6 xl:left-12 2xl:left-20 flex items-center flex-shrink-0">
            <img src="{{ asset('assets/images/logo-daiku.svg') }}" alt="Daiku MEP"
                class="block w-auto object-contain flex-shrink-0" style="height: 52px; min-width: 48px;">
        </a>

        {{-- ── NAV LINKS (true center) ── --}}
        <ul
            class="flex items-center justify-center w-full nav-menu relative nav gap-x-[12px] xl:gap-x-[18px] 2xl:gap-x-[24px] xl:text-[15px]">

            {{-- Home --}}
            <li class="relative nav-item group">
                <a href="{{ route('home') }}"
                    class="text-[#ffffff] hover:text-[#f26b27] group-hover:text-[#f26b27] px-2 py-4 w-full nav_link tracking-[1px] {{ Route::is('home') ? 'active' : '' }}">Home</a>
                <div class="absolute -left-[10px] top-full hidden group-hover:block z-20">
                    <div class="py-1 relative text-[14px] grid grid-cols-2 gap-2 w-[24rem] bg-[#ffffff] px-4 space-x-4">
                        <div>
                            <div>
                                <a href="{{ route('home') }}#company_background"
                                    class="block px-4 py-2 w-[14rem] duration-500 text-[#f26b27] hover:text-[#deb266]">Company's
                                    Background</a>
                                <hr class="border-b-[1px] border-[#d6d6d6]">
                            </div>
                            <a href="{{ route('home') }}#project"
                                class="block px-4 py-2 w-[14rem] duration-500 text-[#f26b27] hover:text-[#deb266]">Project
                                Credentials</a>
                        </div>
                        <div>
                            <div>
                                <a href="{{ route('home') }}#ceo_background"
                                    class="block px-4 py-2 w-[14rem] duration-500 text-[#f26b27] hover:text-[#deb266]">CEO's
                                    Background</a>
                                <hr class="border-b-[1px] border-[#d6d6d6]">
                            </div>
                            <a href="{{ route('home') }}#notable_clients"
                                class="block px-4 py-2 w-[14rem] duration-500 text-[#f26b27] hover:text-[#deb266]">Notable
                                Clients</a>
                        </div>
                    </div>
                </div>
            </li>

            {{-- About Us --}}
            <li class="relative nav-item group">
                <a href="{{ route('about') }}"
                    class="text-[#ffffff] hover:text-[#f26b27] group-hover:text-[#f26b27] px-2 py-4 w-full nav_link tracking-[1px] {{ Route::is('about') ? 'active' : '' }}">About
                    Us</a>
                <div class="absolute -left-[10px] top-full hidden group-hover:block z-20">
                    <div
                        class="py-1 relative text-[14px] grid grid-cols-2 gap-10 w-[24rem] bg-[#ffffff] px-4 space-x-4">
                        <div>
                            <div>
                                <a href="{{ route('about') }}#mission"
                                    class="block px-4 py-2 w-[14rem] duration-500 text-[#f26b27] hover:text-[#deb266]">Mission</a>
                                <hr class="border-b-[1px] border-[#d6d6d6]">
                            </div>
                            <a href="{{ route('about') }}#vision"
                                class="block px-4 py-2 w-[14rem] duration-500 text-[#f26b27] hover:text-[#deb266]">Vision</a>
                        </div>
                        <div>
                            <div>
                                <a href="{{ route('about') }}#value"
                                    class="block px-4 py-2 w-[14rem] duration-500 text-[#f26b27] hover:text-[#deb266]">Core
                                    value</a>
                                <hr class="border-b-[1px] border-[#d6d6d6]">
                            </div>
                            <a href="{{ route('about') }}#business_registration"
                                class="block px-4 py-2 w-[14rem] duration-500 text-[#f26b27] hover:text-[#deb266]">Business
                                Registration</a>
                            <a href="{{ route('about') }}#team"
                                class="block px-4 py-2 w-[14rem] duration-500 text-[#f26b27] hover:text-[#deb266]">Our
                                Team</a>
                        </div>
                    </div>
                </div>
            </li>

            {{-- Services --}}
            <li class="relative nav-item" id="services-nav-item">
                <a href="{{ route('services.mechanical') }}"
                    class="text-[#ffffff] hover:text-[#f26b27] px-2 py-4 w-full nav_link tracking-[1px] {{ Route::is('service', 'services.*') ? 'active' : '' }}"
                    id="services-trigger" onmouseenter="showServicesDropdown()">Services</a>

                <div id="services-dropdown" class="absolute left-0 top-full z-20 hidden"
                    onmouseenter="keepServicesDropdown()" onmouseleave="hideServicesDropdown()">
                    <div class="py-2 text-[14px] flex flex-col w-[14rem] bg-[#ffffff] shadow-lg rounded-b">
                        <a href="{{ route('services.mechanical') }}" onclick="closeServicesDropdown()"
                            class="block px-4 py-3 duration-300 {{ Route::is('services.mechanical') ? 'font-[600] text-[#f26b27]' : 'text-[#2b3d4f]' }} hover:text-[#f26b27] hover:bg-gray-50">
                            Mechanical Systems
                        </a>
                        <a href="{{ route('services.electrical') }}" onclick="closeServicesDropdown()"
                            class="block px-4 py-3 duration-300 {{ Route::is('services.electrical') ? 'font-[600] text-[#f26b27]' : 'text-[#2b3d4f]' }} hover:text-[#f26b27] hover:bg-gray-50">
                            Electrical Systems
                        </a>
                        <a href="{{ route('services.plumbing') }}" onclick="closeServicesDropdown()"
                            class="block px-4 py-3 duration-300 {{ Route::is('services.plumbing') ? 'font-[600] text-[#f26b27]' : 'text-[#2b3d4f]' }} hover:text-[#f26b27] hover:bg-gray-50">
                            Plumbing & Fire Systems
                        </a>
                        <a href="{{ route('services.mep') }}" onclick="closeServicesDropdown()"
                            class="block px-4 py-3 duration-300 {{ Route::is('services.mep') ? 'font-[600] text-[#f26b27]' : 'text-[#2b3d4f]' }} hover:text-[#f26b27] hover:bg-gray-50">
                            MEP Design & Consultancy
                        </a>
                    </div>
                </div>
            </li>

            {{-- AC Maintenance --}}
            <li class="relative nav-item">
                <a href="{{ route('maintenance') }}"
                    class="text-[#ffffff] hover:text-[#f26b27] px-2 py-4 w-full nav_link tracking-[1px] {{ Route::is('maintenance') ? 'active' : '' }}">AC
                    Maintenance</a>
            </li>

            {{-- Projects --}}
            <li class="relative nav-item">
                <a href="{{ route('project') }}"
                    class="text-[#ffffff] hover:text-[#f26b27] px-2 py-4 w-full nav_link tracking-[1px] {{ Route::is('project') ? 'active' : '' }}">Projects</a>
            </li>

            {{-- Insights --}}
            <li class="relative nav-item">
                <a href="{{ route('insights') }}"
                    class="text-[#ffffff] hover:text-[#f26b27] px-2 py-4 w-full nav_link tracking-[1px] {{ Route::is('insights') ? 'active' : '' }}">Insights</a>
            </li>

            {{-- Career --}}
            <li class="relative nav-item">
                <a href="{{ route('career') }}"
                    class="text-[#ffffff] hover:text-[#f26b27] px-2 py-4 w-full nav_link tracking-[1px] {{ Route::is('career') ? 'active' : '' }}">Career</a>
            </li>

            {{-- Contact --}}
            <li class="relative nav-item">
                <a href="{{ route('contact') }}"
                    class="text-[#ffffff] hover:text-[#f26b27] px-2 py-4 w-full nav_link tracking-[1px] {{ Route::is('contact') ? 'active' : '' }}">Contact
                    Us</a>
            </li>

        </ul>
    </div>
</section>
<div class="min-[1210px]:hidden px-4 pt-2 pb-1">
    <p class="text-white text-[9px] leading-snug text-right">
        #99, Street 76CC, Trapiang Thleoung 1 Village,
        Chom Chao 1 Commune,<br>
        Pur Senchey District,
        Phnom Penh 098 954 328
        daikumep@gmail.com
    </p>
</div>
{{-- ── MOBILE NAVBAR ── --}}
<nav class="min-[1210px]:hidden relative z-50" style="background:var(--navy-light);">


    <div class="max-w-screen-2xl mx-auto px-6 xl:px-12 2xl:px-20">

        {{-- Mobile top bar --}}
        <div class="flex items-center justify-between py-3">
            <a href="{{ route('home') }}" aria-label="Daiku MEP Home">
                <img src="{{ asset('assets/images/logo-daiku.svg') }}" alt="Daiku MEP" class="h-10 w-auto">
            </a>

            <button id="hamburger"
                class="flex flex-col justify-center items-center gap-[6px] p-2 focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-400 rounded"
                onclick="toggleMobileMenu()" aria-label="Toggle navigation" aria-expanded="false"
                aria-controls="mobile-menu">
                <span class="ham-line"></span>
                <span class="ham-line"></span>
                <span class="ham-line"></span>
            </button>
        </div>

        {{-- Mobile dropdown --}}
        <div id="mobile-menu" role="navigation" aria-label="Mobile menu">
            <ul class="flex flex-col pb-3 pt-1 space-y-[2px] text-[14px]">

                <li>
                    <a href="{{ route('home') }}"
                        class="flex items-center gap-3 px-3 py-3 rounded-lg text-white hover:text-[#F26B27] hover:bg-white/8 transition-all duration-200 {{ Route::is('home') ? 'mobile-active' : '' }}">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Home
                    </a>
                </li>

                <li>
                    <a href="{{ route('about') }}"
                        class="flex items-center gap-3 px-3 py-3 rounded-lg text-white hover:text-[#F26B27] hover:bg-white/8 transition-all duration-200 {{ Route::is('about') ? 'mobile-active' : '' }}">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        About Us
                    </a>
                </li>

                {{-- Services w/ accordion --}}
                <li>
                    <button onclick="toggleMobileSubmenu('services-sub', 'services-arrow')"
                        class="w-full flex items-center justify-between gap-3 px-3 py-3 rounded-lg text-white hover:text-[#F26B27] hover:bg-white/8 transition-all duration-200 {{ Route::is('service', 'services.*') ? 'mobile-active' : '' }}"
                        aria-expanded="false" aria-controls="services-sub">
                        <span class="flex items-center gap-3">
                            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Services
                        </span>
                        <svg id="services-arrow" class="w-4 h-4 transition-transform duration-300 flex-shrink-0"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div id="services-sub" class="mobile-submenu">
                        <ul class="pl-4 py-1 ml-3 space-y-[2px] border-l-2 border-orange-500/30">
                            @php
                                $svcLinks = [
                                    ['route' => 'services.mechanical', 'label' => 'Mechanical Systems'],
                                    ['route' => 'services.electrical', 'label' => 'Electrical Systems'],
                                    ['route' => 'services.plumbing', 'label' => 'Plumbing & Fire Systems'],
                                    ['route' => 'services.mep', 'label' => 'MEP Design & Consultancy'],
                                ];
                            @endphp
                            @foreach ($svcLinks as $svc)
                                <li>
                                    <a href="{{ route($svc['route']) }}" onclick="closeMobileMenu()"
                                        class="block px-3 py-2 rounded text-white/80 hover:text-[#F26B27] transition-colors text-[13px] {{ Route::is($svc['route']) ? 'text-[#F26B27] font-semibold' : '' }}">
                                        {{ $svc['label'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>

                @php
                    $mobileLinks = [
                        ['route' => 'maintenance', 'label' => 'AC Maintenance'],
                        ['route' => 'project', 'label' => 'Projects'],
                        ['route' => 'insights', 'label' => 'Insights'],
                        ['route' => 'career', 'label' => 'Career'],
                        ['route' => 'contact', 'label' => 'Contact Us'],
                    ];
                @endphp

                @foreach ($mobileLinks as $link)
                    <li>
                        <a href="{{ route($link['route']) }}"
                            class="block px-3 py-3 rounded-lg text-white hover:text-[#F26B27] hover:bg-white/8 transition-all duration-200 {{ Route::is($link['route']) ? 'mobile-active' : '' }}">
                            {{ $link['label'] }}
                        </a>
                    </li>
                @endforeach

            </ul>

            {{-- Mobile contact strip --}}
            <div class="py-4 border-t border-white/10 text-white/55 text-[12px] safe-bottom space-y-1">
                <p>📱 098 954 328</p>
                <p>✉️ daikumep@gmail.com</p>
            </div>
        </div>
    </div>
</nav>

@section('js')
    <script>
        function scrollToCenter(target) {
            event.preventDefault();
            var element = document.querySelector(target);
            var elementTop = element.getBoundingClientRect().top + window.pageYOffset;
            var elementHeight = element.offsetHeight;
            var viewportHeight = window.innerHeight;
            var scrollPosition = elementTop - (viewportHeight / 2) + (elementHeight / 2);
            window.scrollTo({
                top: scrollPosition,
                behavior: 'smooth'
            });
        }

        let hideTimeout = null;

        function showServicesDropdown() {
            clearTimeout(hideTimeout);
            document.getElementById('services-dropdown').classList.remove('hidden');
            document.getElementById('services-dropdown').classList.add('block');
        }

        function keepServicesDropdown() {
            clearTimeout(hideTimeout);
        }

        function hideServicesDropdown() {
            hideTimeout = setTimeout(() => {
                document.getElementById('services-dropdown').classList.add('hidden');
                document.getElementById('services-dropdown').classList.remove('block');
            }, 150);
        }

        function closeServicesDropdown() {
            document.getElementById('services-dropdown').classList.add('hidden');
            document.getElementById('services-dropdown').classList.remove('block');
        }

        document.addEventListener('DOMContentLoaded', () => {
            const navItem = document.getElementById('services-nav-item');
            if (navItem) {
                navItem.addEventListener('mouseleave', hideServicesDropdown);
                navItem.addEventListener('mouseenter', showServicesDropdown);
            }
        });

        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const btn = document.getElementById('hamburger');
            if (!menu) return;
            const isOpen = menu.classList.toggle('open');
            btn?.classList.toggle('active', isOpen);
            btn?.setAttribute('aria-expanded', isOpen);
            document.body.style.overflow = isOpen ? 'hidden' : '';
        }

        function closeMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const btn = document.getElementById('hamburger');
            if (!menu) return;
            menu.classList.remove('open');
            btn?.classList.remove('active');
            btn?.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        }

        function toggleMobileSubmenu(id, arrowId) {
            const sub = document.getElementById(id);
            const arrow = document.getElementById(arrowId);
            if (!sub) return;
            const isOpen = sub.classList.toggle('open');
            arrow?.classList.toggle('rotate-180', isOpen);
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeMobileMenu();
        });

        document.addEventListener('click', function(e) {
            const menu = document.getElementById('mobile-menu');
            const btn = document.getElementById('hamburger');
            const nav = btn?.closest('nav');
            if (menu?.classList.contains('open') && nav && !nav.contains(e.target)) {
                closeMobileMenu();
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            @if (Route::is('service', 'services.*'))
                const sub = document.getElementById('services-sub');
                const arrow = document.getElementById('services-arrow');
                sub?.classList.add('open');
                arrow?.classList.add('rotate-180');
            @endif
        });
    </script>
@endsection
