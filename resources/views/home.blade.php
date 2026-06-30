@extends('layouts.app')

@section('css')
    <style>
        @keyframes scrollleft {
            from {
                left: 100%;
            }

            to {
                left: calc((var(--item-width) + var(--item-gap)) * -1 * var(--total-items));
            }
        }

        :root {
            --item-width: 160px;
            --total-items: 8;
            --item-gap: 60px;
            --duration: 40s;
        }

        .item {
            width: var(--item-width);
            height: 120px;
            position: absolute;
            left: calc(100% + ((var(--item-width) + var(--item-gap)) * var(--total-items)));
            animation: scrollleft var(--duration) linear infinite;
        }

        .item1 {
            animation-delay: calc(var(--duration) / var(--total-items) * -7);
        }

        .item2 {
            animation-delay: calc(var(--duration) / var(--total-items) * -6);
        }

        .item3 {
            animation-delay: calc(var(--duration) / var(--total-items) * -5);
        }

        .item4 {
            animation-delay: calc(var(--duration) / var(--total-items) * -4);
        }

        .item5 {
            animation-delay: calc(var(--duration) / var(--total-items) * -3);
        }

        .item6 {
            animation-delay: calc(var(--duration) / var(--total-items) * -2);
        }

        .item7 {
            animation-delay: calc(var(--duration) / var(--total-items) * -1);
        }

        .item8 {
            animation-delay: 0s;
        }

        .wrapper:hover .item {
            animation-play-state: paused;
        }

        @media (max-width: 640px) {
            :root {
                --item-width: 100px;
                --item-gap: 30px;
                --duration: 25s;
            }

            .item {
                height: 80px;
            }
        }
    </style>
@endsection

@section('content')
    {{-- =========================================================
     DESKTOP HERO SECTION (orange background - shown only on lg breakpoint and up)
     ⚠️ EDIT THE TEXT BELOW FOR DESKTOP VIEW HERO
     - Title: lines ~101-108
     - Paragraph: lines ~113-121
     - Button: lines ~124-135
     - Background color: bg-[#F26A27] on line 85
     - Height: h-[750px] xl:h-[800px] on the wrapper div
========================================================= --}}
    <div
        class="relative -top-[260px] max-[500px]:-top-[350px] lg:-top-[400px] home_clip
        min-h-[420px] sm:min-h-[500px] lg:min-h-[780px] overflow-hidden">

        {{-- Background Color (mobile only, sits behind the shape image, shorter height) --}}
        <div class="absolute top-0 left-0 w-full h-[340px] bg-[#F26A27] block lg:hidden -z-10"></div>

        {{-- Background Shape (mobile) --}}
        <img src="{{ asset('assets/images/shapes/style.png') }}" alt=""
            class="absolute top-0 left-0 w-full
        block lg:hidden
        origin-center
        -rotate-2
        scale-150
        z-0
        pointer-events-none"
            data-aos="fade-up" data-aos-duration="1000">

        {{-- Background Shape (desktop) --}}
        <img src="{{ asset('assets/images/shapes/style.png') }}" alt=""
            class="absolute top-0 left-0 w-full
        hidden lg:block
        origin-center
        -rotate-2
        scale-150
        z-0
        pointer-events-none"
            data-aos="fade-up" data-aos-duration="1000">

        {{-- Hero Content --}}
        <div class="absolute inset-0 flex justify-center items-start z-20">

            <div class="w-full max-w-5xl mx-auto px-6 sm:px-8 lg:px-12 text-center text-white lg:pt-[280px]">

                <h1
                    class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl​​ lg:mt-[0rem] sm:mt-[8rem] mt-[5rem] font-bold leading-tight">
                    Professional MEP Engineering & HVAC <br>
                    Solutions in Cambodia
                </h1>

                <p class="mt-6 max-w-3xl mx-auto text-center text-xs sm:text-sm md:text-base leading-7" data-aos="fade-up"
                    data-aos-duration="900" data-aos-delay="100">
                    Design, installation, maintenance, and consultancy services for HVAC, electrical, plumbing, and fire
                    protection systems across commercial, industrial, and residential projects.
                </p>

                <div class="flex justify-center mt-6 sm:mt-8" data-aos="fade-up" data-aos-duration="900"
                    data-aos-delay="300">
                    <a href="{{ route('project') }}"
                        class="w-40 h-10 text-xs
      sm:w-44 sm:h-11 sm:text-sm
      md:w-56 md:h-14 md:text-base
      flex items-center justify-center
      bg-[#2B3D4F] hover:bg-[#243342]
      text-white rounded-lg font-semibold transition">
                        View Our Projects
                    </a>
                </div>
            </div>

        </div>

    </div>








    {{-- =========================================================
     DESKTOP / LAPTOP VERSION (shown from lg breakpoint up)
     ⚠️ DESKTOP SECTIONS BELOW - EDIT HERE:
     - "About Daiku" title: line ~157
     - Description: lines ~159-163
     - Service cards: loop starting around line 171
     - Background container: line 154
========================================================= --}}
    {{-- ══════════════ ABOUT / SERVICES ══════════════ --}}
    <div class="relative w-full mt-[-20rem]  sm-:mt-[-25rem] lg:mt-[-30rem]">

        <p class="text-center text-xs sm:text-sm max-w-3xl mx-auto px-4 -mt-4 mb-10 text-[#2b3d4f]">
            Daiku MEP Solution Co., Ltd provides professional Mechanical, Electrical, and Plumbing (MEP)
            engineering services for commercial, industrial, hospitality, healthcare, and residential
            developments across Cambodia.
        </p>

        @php
            $services = [
                [
                    'title' => 'Mechanical System',
                    'desc' =>
                        'Professional mechanical engineering services including HVAC systems, air conditioning solutions, ventilation systems, ducting works, chilled water systems, and preventive maintenance programs that improve building performance, energy efficiency, and occupant comfort.',
                    'img' => 'assets/images/whychoos-us/image31.png',
                    'route' => route('services.mechanical'),
                    'pos' => 'object-center',
                ],
                [
                    'title' => 'Electrical Systems',
                    'desc' =>
                        'Professional electrical engineering services covering power distribution, lighting systems, electrical installations, testing, commissioning, and maintenance for safe and reliable building operations.',
                    'img' => 'assets/images/service/Frame2.png',
                    'route' => route('services.electrical'),
                    'pos' => 'object-center',
                ],
                [
                    'title' => 'Plumbing & Fire Protection Systems',
                    'desc' =>
                        'Integrated plumbing and fire protection solutions for commercial, industrial, and residential developments, ensuring reliable water management, efficient drainage, and advanced fire safety systems that meet operational and regulatory requirements.',
                    'img' => 'assets/images/service/image3.png',
                    'route' => route('services.plumbing'),
                    'pos' => 'object-center',
                ],
                [
                    'title' => 'MEP Design & Consultancy',
                    'desc' =>
                        'Expert MEP planning, engineering design, technical consultancy, and project management services to optimize building performance, efficiency, and long-term operational reliability.',
                    'img' => 'assets/images/service/mep.png',
                    'route' => route('services.mep'),
                    'pos' => 'object-top',
                ],
                [
                    'title' => 'Air Conditioning Annual Maintenance Service',
                    'desc' =>
                        'Preventive air conditioning maintenance solutions including system inspection, cleaning, performance optimization, and annual service contracts designed to improve efficiency, reduce downtime, and extend equipment lifespan.',
                    'img' => 'assets/images/whychoos-us/Frame.png',
                    'route' => route('maintenance'),
                    'pos' => 'object-top',
                ],
            ];
        @endphp

        <div class="py-4 px-3 max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($services as $index => $service)
                <div class="rounded-md overflow-hidden flex flex-col shadow-md bg-[#2C3E50]" data-aos="fade-up"
                    data-aos-duration="700" data-aos-delay="{{ $index * 100 }}">

                    {{-- Fixed-ratio image box: same width/height ratio on every card --}}
                    <div class="w-full aspect-[4/3] overflow-hidden shrink-0 bg-[#1c2733]">
                        <img src="{{ asset($service['img']) }}" alt="{{ $service['title'] }}"
                            class="w-full h-full object-cover {{ $service['pos'] }}">
                    </div>

                    <div class="p-5 flex flex-col flex-1">
                        <h3 class="text-sm font-bold mb-2 text-[#F26A27]">{{ $service['title'] }}</h3>
                        <hr class="mb-3 border border-[#F26A27] opacity-50">
                        <p class="text-xs leading-relaxed mb-5 flex-1 text-[#CBD5E1]">{{ $service['desc'] }}</p>
                        <a href="{{ $service['route'] }}"
                            class="self-start text-xs font-semibold px-5 py-2 rounded transition hover:opacity-80 bg-[#F26A27] text-white">
                            Explore Services
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Industries We Serve --}}
    <div class="w-full max-w-5xl mx-auto px-4 mt-10 mb-16 text-center">
        <h2 class="text-[20px] md:text-[26px] font-[700] mb-10" style="color:#F26A27;">
            Industries We Serve
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-5">
            @php
                $industries = [
                    [
                        'title' => 'Hospitality',
                        'desc' => 'Hotels, resorts, Serviced Apartments',
                        'icon' => 'assets/images/Serve/Frame1.png',
                    ],
                    [
                        'title' => 'Healthcare',
                        'desc' => 'Hospitals, clinics, Laboratories',
                        'icon' => 'assets/images/Serve/Frame2.png',
                    ],
                    [
                        'title' => 'Commercial',
                        'desc' => 'Hotels, Resorts, Serviced Apartments',
                        'icon' => 'assets/images/Serve/Frame3.png',
                    ],
                    [
                        'title' => 'Residential',
                        'desc' => 'Villas, Condominiums, Boreys',
                        'icon' => 'assets/images/Serve/Frame4.png',
                    ],
                    [
                        'title' => 'Food & Beverage',
                        'desc' => 'Restaurants, Cafes, Kitchens',
                        'icon' => 'assets/images/Serve/Frame5.png',
                    ],
                    [
                        'title' => 'Industrial',
                        'desc' => 'Factories, Warehouses',
                        'icon' => 'assets/images/Serve/Frame6.png',
                    ],
                ];
            @endphp
            @foreach ($industries as $industry)
                <div class="rounded-md p-6 flex flex-col items-center justify-center" style="border:1px solid #F26A27;">
                    <img src="{{ asset($industry['icon']) }}" alt="{{ $industry['title'] }}"
                        class="w-16 h-16 mb-3 object-contain">
                    <h3 class="text-[14px] font-[700] mb-1" style="color:#F26A27;">
                        {{ $industry['title'] }}
                    </h3>
                    <p class="text-[12px] leading-snug" style="color:#374151;">
                        {{ $industry['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>



    <div class="relative w-full mt-6 md:mt-[80px]">

        {{-- ── ORANGE BACKGROUND (diagonal) ── --}}


        <div class="absolute inset-x-0 top-0 h-[100%] z-0 bg-[#F26A27]"
            style="-webkit-clip-path: polygon(0 0, 100% 0, 100% 88%, 0% 100%);
            clip-path: polygon(0 32%, 100% 6%, 100% 74%, 0 91%);">
        </div>

        {{-- ── HUMAN PHOTO (desktop only) ── --}}
        <img src="{{ asset('assets/images/whychoos-us/Mask1.png') }}" alt="Daiku Engineer"
            class="absolute 
           left-[30%]  -translate-x-1/2
           h-[70%] w-[70%] lg:h-[100%] xl:h-[90%]
           w-auto max-w-[50%] lg:max-w-[52%] xl:max-w-[55%]
           object-contain object-left-bottom
           rotate-4 max-[1280px]:mt-[-40px]
           md:block hidden
           mb-20" />

        {{-- ── HUMAN PHOTO (mobile: left side) ── --}}
        {{-- ── HUMAN PHOTO (mobile: left side) ── --}}
        <div
            class="absolute inset-0 w-full h-full flex items-center md:hidden z-[1] pointer-events-none overflow-hidden bg-[#F26A27]">
            <img src="{{ asset('assets/images/whychoos-us/mask2.png') }}" alt="Daiku Engineer"
                class="absolute max-[500px]:max-w-[50%] max-[500px]:max-w-[50%] h-[100%] w-auto max-w-[90%] left-[-20px] top-3 " />
        </div>

        {{-- ── CONTENT ── --}}
        <div
            class="relative z-10 w-full
                px-4 sm:px-6 md:px-10 lg:px-16 xl:px-20
                pt-8 sm:pt-10 md:pt-14 lg:pt-16 xl:pt-20
                pb-16 sm:pb-20 md:pb-24 lg:pb-28 xl:pb-32">

            {{-- Title --}}
            <h2
                class=" text-right font-bold leading-tight text-[#1F2D3D] md:pr-[30%]
           mb-5 md:mb-8 lg:mb-10
           text-[17px] sm:text-[20px] md:text-[24px] lg:text-[30px] xl:text-[36px]
           
           ">
                Why Choose Daiku ?
            </h2>

            {{-- 2-col layout: spacer left + grid right --}}
            <div class="flex flex-row w-full gap-2 md:gap-6">

                {{-- Left spacer for human photo (all screens) --}}
                <div class="flex-shrink-0
                        w-[45%] md:w-[30%] lg:w-[35%] xl:w-[38%] ">
                </div>

                {{-- Reasons Grid --}}
                <div class="w-full md:w-[70%] lg:w-[65%] xl:w-[62%]">

                    @php
                        $reasons = [
                            [
                                'num' => '01',
                                'title' => 'Experienced Engineering Team.',
                                'desc' => 'Professional engineers and technicians with extensive project experience.',
                            ],
                            [
                                'num' => '02',
                                'title' => 'Quality & Safety Standards',
                                'desc' => 'Committed to industry best practices and safety compliance.',
                            ],
                            [
                                'num' => '03',
                                'title' => 'Reliable Project Delivery',
                                'desc' => 'On-time execution and responsive project management.',
                            ],
                            [
                                'num' => '04',
                                'title' => 'Long-Term Maintenance Support',
                                'desc' => 'Comprehensive maintenance services to maximize system performance.',
                            ],
                        ];
                    @endphp

                    <div
                        class="grid grid-cols-2 md:grid-cols-2
                            gap-x-3 sm:gap-x-4 md:gap-x-6 lg:gap-x-8 xl:gap-x-10
                            gap-y-5 sm:gap-y-6 md:gap-y-7 lg:gap-y-9 xl:gap-y-10">
                        @foreach ($reasons as $r)
                            <div>
                                <p
                                    class="font-extrabold leading-none text-[#1F2D3D] mb-1
                                  text-[16px] sm:text-[18px] md:text-[22px] lg:text-[26px] xl:text-[30px]">
                                    {{ $r['num'] }}
                                </p>
                                <p
                                    class="font-bold text-white leading-snug mb-1
                                  text-[10px] sm:text-[11px] md:text-[13px] lg:text-[14px] xl:text-[15px]">
                                    {{ $r['title'] }}
                                </p>
                                <p
                                    class="text-white/85 leading-relaxed
                                  text-[9px] sm:text-[10px] md:text-[11px] lg:text-[12px] xl:text-[13px]">
                                    {{ $r['desc'] }}
                                </p>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- ══════════════ PROJECT CREDENTIALS ══════════════ --}}
    <div class="relative w-full" id="project">
        <h1 class="text-xl sm:text-2xl md:text-3xl text-[#2b3d4f] font-bold py-8 max-w-7xl mx-auto px-4 leading-none">
            Project Credentials
        </h1>

        {{-- Filter buttons --}}
        <div class="flex flex-wrap gap-2 justify-center md:justify-end px-4 md:px-12">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="resort">Resort</button>
            <button class="filter-btn" data-filter="hotel">Hotel</button>
            <button class="filter-btn" data-filter="polyclinic">Polyclinic</button>
            <button class="filter-btn" data-filter="residence">Residence & Villa</button>
            <button class="filter-btn" data-filter="aeon">Stores</button>
            <button class="filter-btn" data-filter="mall">Mall</button>
            <button class="filter-btn" data-filter="restaurant">Restaurant</button>
        </div>

        @php
            $projects = [
                [
                    'slide' => 'item1',
                    'cat' => 'hotel',
                    'img' => 'assets/images/DaikuMEP/01.Sofitel/01.png',
                    'label' => 'Hotel',
                    'title' => 'Sofitel Phnom Penh Phokeethra - 5 Stars Luxury Hotel',
                    'loc' => 'Phnom Penh, Cambodia',
                ],
                [
                    'slide' => 'item2',
                    'cat' => 'resort',
                    'img' => 'assets/images/DaikuMEP/2.SiemPang/01.png',
                    'label' => 'Resort',
                    'title' => 'Siem Pang Resort',
                    'loc' => 'Stung Treng Province, Cambodia',
                ],
                [
                    'slide' => 'item3',
                    'cat' => 'polyclinic',
                    'img' => 'assets/images/DaikuMEP/06.ChendaolyClinic/01.jpg',
                    'label' => 'Polyclinic',
                    'title' => 'Chenda Polyclinic',
                    'loc' => 'Phnom Penh, Cambodia',
                ],
                [
                    'slide' => 'item4',
                    'cat' => 'resort',
                    'img' => 'assets/images/photo/Frame10.png',
                    'label' => 'Resort',
                    'title' => 'Koh Tang Resort',
                    'loc' => 'Sihanoukville, Cambodia',
                ],
                [
                    'slide' => 'item5',
                    'cat' => 'residence',
                    'img' => 'assets/images/DaikuMEP/08.VillaYimsResedence/01.png',
                    'label' => 'Residence',
                    'title' => "Yim's Residence",
                    'loc' => 'Phnom Penh, Cambodia',
                ],
                [
                    'slide' => 'item6',
                    'cat' => 'residence',
                    'img' => 'assets/images/DaikuMEP/09.VillaSiemReap/01.jpg',
                    'label' => 'Villa',
                    'title' => 'Villa Siem Reap',
                    'loc' => 'Siem Reap, Cambodia',
                ],
                [
                    'slide' => 'item7',
                    'cat' => 'aeon',
                    'img' => 'assets/images/DaikuMEP/10.CPS(AEONMALL3)/01.png',
                    'label' => 'Fashion Store',
                    'title' => 'CPS Aeon Mall Mean Chey',
                    'loc' => 'Phnom Penh, Cambodia',
                ],
                [
                    'slide' => 'item8',
                    'cat' => 'resort',
                    'img' => 'assets/images/DaikuMEP/20.OsoumResort/01.png',
                    'label' => 'Resort',
                    'title' => 'Samanea Wellness Resort',
                    'loc' => 'Kep, Cambodia',
                ],
                [
                    'slide' => 'item9',
                    'cat' => 'mall',
                    'img' => 'assets/images/DaikuMEP/AeonMallMeanchey/01.jpg',
                    'label' => 'Aeon Mall',
                    'title' => 'Aeon Mall Mean Chey',
                    'loc' => 'Phnom Penh, Cambodia',
                ],
                [
                    'slide' => 'item10',
                    'cat' => 'restaurant',
                    'img' => 'assets/images/photo/image.png',
                    'label' => 'Restaurant',
                    'title' => 'Kobe Teppanyaki Restaurant Koh Pich',
                    'loc' => 'Phnom Penh, Cambodia',
                ],
            ];
        @endphp

        <div id="homeCardsWrapper"
            class="py-10 px-3 max-w-7xl mx-auto
                grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5
                gap-4 place-items-center">

            @foreach ($projects as $p)
                <div class="project-card relative bg-white shadow-xl w-full max-w-xs h-[340px] overflow-hidden group rounded-lg"
                    data-category="{{ $p['cat'] }}">

                    <div class="w-full h-[180px]">
                        <img src="{{ asset($p['img']) }}" alt="{{ $p['title'] }}" class="w-full h-full object-cover">
                    </div>

                    <div
                        class="absolute inset-0 bg-black/40 flex items-center justify-center
                        opacity-0 group-hover:opacity-100 transition duration-300">
                        <a href="{{ route('project') }}?slide={{ $p['slide'] }}"
                            class="bg-[#F26A27] text-white px-5 py-2 rounded-md font-semibold
                          hover:bg-[#d85c20] transition text-sm">
                            View Details
                        </a>
                    </div>

                    <div class="py-4 px-4 bg-white flex flex-col h-full">
                        <p class="uppercase text-[#F26A27] font-bold text-[10px] mb-1">{{ $p['label'] }}</p>
                        <h3 class="text-[#F26A27] text-sm font-semibold min-h-[48px] line-clamp-2 mb-2">
                            {{ $p['title'] }}
                        </h3>
                        <p class="text-gray-500 text-xs">{{ $p['loc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    {{-- ══════════════ AMS SECTION ══════════════ --}}
    <div class="relative w-full" style="margin-top:0;">
        <div class="relative w-full overflow-hidden">

            <div class="absolute inset-0"
                style="background-color:#F26A27;
                    clip-path:polygon(0 18%,100% 4%,100% 100%,0 100%);z-index:0;">
            </div>
            <div class="absolute top-0 left-0 w-full"
                style="height:100%;background-color:#1F2D3D;
                    clip-path:polygon(0 14%,100% 0%,100% 4%,0 18%);z-index:1;">
            </div>

            <div
                class="relative z-10 w-full max-w-6xl mx-auto
                    flex flex-col md:flex-row items-start gap-8 px-6
                    pt-16 sm:pt-24 md:pt-32 pb-14 md:pb-16">

                {{-- Photo --}}
                <div class="w-full md:w-[40%] flex justify-center md:justify-start">
                    <img src="{{ asset('assets/images/whychoos-us/Frame.png') }}" alt="AC Maintenance Technician"
                        class="w-full max-w-xs md:max-w-none h-auto object-cover rounded-md">
                </div>

                {{-- Text --}}
                <div class="w-full md:w-[60%]">
                    <h2 class="text-xl sm:text-2xl md:text-[26px] font-bold mb-2 text-white">
                        Air Conditioning Annual Maintenance Service (AMS)
                    </h2>
                    <p class="text-sm font-bold mb-3 text-white">Protect Your Cooling Systems Year-Round</p>
                    <p class="text-xs sm:text-sm leading-relaxed mb-6 text-white/90">
                        Preventive maintenance helps reduce energy consumption, minimize unexpected
                        breakdowns, and extend the lifespan of your air conditioning systems.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-6">
                        <div>
                            <h3 class="text-base sm:text-lg font-bold mb-3 text-white">Benefits</h3>
                            <ul class="text-xs sm:text-sm space-y-2 text-white">
                                <li>&bull; Scheduled Inspections</li>
                                <li>&bull; System Cleaning &amp; Servicing</li>
                                <li>&bull; Performance Optimization</li>
                                <li>&bull; Priority Technical Support</li>
                                <li>&bull; Reduced Operating Costs</li>
                            </ul>
                            <a href="{{ route('contact') }}"
                                class="inline-block mt-6 px-5 py-3 text-xs sm:text-sm font-bold rounded"
                                style="background-color:#1F2D3D; color:#fff;">
                                Request AMC Proposal
                            </a>
                        </div>
                        <div>
                            <h3 class="text-base sm:text-lg font-bold mb-3 text-white">Contract Benefits</h3>
                            <p class="text-lg sm:text-xl md:text-[22px] font-extrabold leading-snug mb-3 text-white">
                                Up to 20% Discount for Residential
                            </p>
                            <p class="text-sm font-bold text-white">Commercial Annual Contracts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="relative w-full h-auto min-h-[420px] sm:min-h-[520px] md:h-[600px] overflow-hidden">

        {{-- Background image --}}
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image:url({{ asset('assets/images/whychoos-us/image1.png') }});">
        </div>

        {{-- Two-color gradient overlay mix --}}
        <div class="absolute inset-0"
            style="background: linear-gradient(90deg, rgba(26,45,61,0.92) 0%, rgba(26,45,61,0.75) 45%, rgba(242,106,39,0.25) 100%);">
        </div>

        {{-- Content: positioned between center and left --}}
        <div
            class="relative z-10 h-full flex flex-col justify-center items-center md:items-start text-center md:text-left px-6 md:px-0 py-16">
            <div class="w-full max-w-2xl mx-auto md:mx-0 md:ml-[8%] lg:ml-[12%]">

                <h2 class="text-2xl sm:text-3xl md:text-[36px] font-bold mb-2" style="color:#F26A27;">
                    Insights & Resources
                </h2>
                <p class="text-white text-sm sm:text-base mb-5">Latest Engineering Insights</p>
                <ul class="list-disc list-inside space-y-2 mb-8 text-left inline-block md:block">
                    <li class="text-white text-sm">What is MEP Engineering?</li>
                    <li class="text-white text-sm">Benefits of Annual HVAC Maintenance</li>
                    <li class="text-white text-sm">How to Choose an MEP Contractor in Cambodia</li>
                </ul>
                <a href="{{ route('insights') }}" class="inline-block text-sm font-semibold px-8 py-3 rounded transition"
                    style="background-color:#F26A27; color:#fff;">
                    View All Articles
                </a>

            </div>
        </div>
    </div>

    {{-- ══════════════ NOTABLE CLIENTS ══════════════ --}}
    <section id="notable_clients" class="py-8">
        <h1 class="text-xl sm:text-2xl md:text-3xl text-[#2b3d4f] font-bold py-8 max-w-7xl mx-auto px-4 leading-none">
            Our Notable Clients
        </h1>
        <div class="wrapper w-full max-w-7xl mx-auto relative h-[100px] sm:h-[140px] mt-8 overflow-hidden">
            <div class="item item1 bg-contain bg-center bg-no-repeat"
                style="background-image:url('assets/images/client/client-15new.png')"></div>
            <div class="item item2 bg-contain bg-center bg-no-repeat"
                style="background-image:url('assets/images/client/2.png')"></div>
            <div class="item item3 bg-contain bg-center bg-no-repeat"
                style="background-image:url('assets/images/client/3.png')"></div>
            <div class="item item4 bg-contain bg-center bg-no-repeat"
                style="background-image:url('assets/images/client/4.jpg')"></div>
            <div class="item item5 bg-contain bg-center bg-no-repeat"
                style="background-image:url('https://www.samanea-resort.com/wp-content/uploads/2025/02/Normal.png')"></div>
            <div class="item item6 bg-contain bg-center bg-no-repeat"
                style="background-image:url('assets/images/client/6.jpg')"></div>
            <div class="item item7 bg-contain bg-center bg-no-repeat"
                style="background-image:url('assets/images/client/7.jpg')"></div>
            <div class="item item8 bg-contain bg-center bg-no-repeat"
                style="background-image:url('assets/images/client/8.jpg')"></div>
        </div>
    </section>

    {{-- ══════════════ FAQ ══════════════ --}}
    <section class="bg-white py-16 px-4 md:px-6 border-b border-slate-200" id="faqs-section">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">
                    Frequently Asked Questions
                </h2>
                <div class="w-12 h-1 bg-orange-500 mx-auto mt-3 rounded-full"></div>
            </div>

            @php
                $faqs = [
                    [
                        'q' => 'What services does Daiku provide?',
                        'a' =>
                            'Daiku provides HVAC, Electrical, Plumbing, Fire Protection, MEP Design & Consultancy, and Air Conditioning Annual Maintenance Services.',
                    ],
                    [
                        'q' => 'Which industries do you serve?',
                        'a' =>
                            'We support hospitality, healthcare, retail, commercial, residential, and industrial sectors.',
                    ],
                    [
                        'q' => 'Do you provide annual maintenance contracts?',
                        'a' =>
                            'Yes. We offer customized annual maintenance programs for residential, commercial, and industrial facilities.',
                    ],
                    [
                        'q' => 'Can Daiku handle both installation and maintenance?',
                        'a' =>
                            'Yes. We provide complete solutions from design and installation to ongoing maintenance and technical support.',
                    ],
                ];
            @endphp

            <div class="flex flex-col md:flex-row gap-4 items-start">
                <div class="flex flex-col gap-4 w-full md:w-1/2">
                    @foreach ([$faqs[0], $faqs[2]] as $i => $faq)
                        @php $id = $i*2+1; @endphp
                        <div class="border border-orange-400 rounded-xl overflow-hidden">
                            <button type="button" onclick="toggleFaq({{ $id }})"
                                id="faq-btn-{{ $id }}"
                                class="w-full flex justify-between items-center text-left px-5 py-4
                                   bg-white font-semibold text-slate-800 text-sm cursor-pointer
                                   hover:bg-orange-50 transition-colors">
                                <span class="pr-4">{{ $faq['q'] }}</span>
                                <span class="flex-shrink-0">
                                    <svg id="faq-arrow-{{ $id }}" xmlns="http://www.w3.org/2000/svg"
                                        class="w-3.5 h-3.5 fill-orange-500 transition-transform duration-300"
                                        viewBox="0 0 16 16">
                                        <polygon points="12,8 4,2 4,14" />
                                    </svg>
                                </span>
                            </button>
                            <div id="faq-answer-{{ $id }}"
                                class="hidden bg-[#1e2a44] text-white border-t border-orange-300">
                                <div class="px-5 py-4 text-sm leading-relaxed text-slate-200 font-medium">
                                    {{ $faq['a'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-col gap-4 w-full md:w-1/2">
                    @foreach ([$faqs[1], $faqs[3]] as $i => $faq)
                        @php $id = $i*2+2; @endphp
                        <div class="border border-orange-400 rounded-xl overflow-hidden">
                            <button type="button" onclick="toggleFaq({{ $id }})"
                                id="faq-btn-{{ $id }}"
                                class="w-full flex justify-between items-center text-left px-5 py-4
                                   bg-white font-semibold text-slate-800 text-sm cursor-pointer
                                   hover:bg-orange-50 transition-colors">
                                <span class="pr-4">{{ $faq['q'] }}</span>
                                <span class="flex-shrink-0">
                                    <svg id="faq-arrow-{{ $id }}" xmlns="http://www.w3.org/2000/svg"
                                        class="w-3.5 h-3.5 fill-orange-500 transition-transform duration-300"
                                        viewBox="0 0 16 16">
                                        <polygon points="12,8 4,2 4,14" />
                                    </svg>
                                </span>
                            </button>
                            <div id="faq-answer-{{ $id }}"
                                class="hidden bg-[#1e2a44] text-white border-t border-orange-300">
                                <div class="px-5 py-4 text-sm leading-relaxed text-slate-200 font-medium">
                                    {{ $faq['a'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    {{-- ══════════════ READY TO HELP BANNER ══════════════ --}}
    <div class="relative w-full bg-[#f8f7f7] my-12 sm:my-16 overflow-hidden">
        <div class="relative w-full h-[320px] sm:h-[380px] md:h-[460px] bg-cover bg-center"
            style="background-image:url({{ asset('assets/images/whychoos-us/image.png') }});
                clip-path:polygon(0 12%,100% 0,100% 88%,0 100%);">
            <div class="absolute inset-0 bg-[#44678a]/50 z-0"></div>
            <div
                class="relative z-20 w-full h-full max-w-5xl mx-auto px-6
                    flex flex-col items-center justify-center text-center space-y-5">
                <h2 class="text-white text-base sm:text-xl md:text-[27px] font-normal leading-relaxed max-w-4xl"
                    data-aos="fade-up" data-aos-duration="1000">
                    Whether you need a new installation, maintenance support, or engineering
                    consultancy, our team is ready to help.
                </h2>
                <div data-aos="fade-up" data-aos-duration="1200">
                    <a href="{{ route('contact') }}"
                        class="inline-block bg-[#F26A27] hover:bg-[#d85c20] text-white font-medium
                          px-7 py-3 rounded transition shadow-md text-sm">
                        Request Quotation
                    </a>
                </div>
            </div>
        </div>
    </div>


    {{-- ══════════════ SCRIPTS ══════════════ --}}
    <script>
        function toggleFaq(index) {
            const answer = document.getElementById('faq-answer-' + index);
            const arrow = document.getElementById('faq-arrow-' + index);
            const btn = document.getElementById('faq-btn-' + index);
            if (!answer || !arrow || !btn) return;
            const isHidden = answer.classList.contains('hidden');
            if (isHidden) {
                answer.classList.remove('hidden');
                arrow.classList.add('rotate-90');
                btn.classList.add('bg-orange-50');
                btn.classList.remove('bg-white');
            } else {
                answer.classList.add('hidden');
                arrow.classList.remove('rotate-90');
                btn.classList.remove('bg-orange-50');
                btn.classList.add('bg-white');
            }
        }
    </script>

    <script>
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.dataset.filter;
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                button.classList.add('active');
                document.querySelectorAll('.project-card').forEach(card => {
                    card.classList.toggle('hidden', filter !== 'all' && card.dataset.category !==
                        filter);
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (window.location.hash) {
                const target = document.querySelector(window.location.hash);
                if (target) {
                    setTimeout(() => target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    }), 200);
                }
            }
        });
    </script>
@endsection
