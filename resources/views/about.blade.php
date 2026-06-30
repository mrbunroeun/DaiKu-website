@extends('layouts.app')

@section('css')
    <style>
        .card1,
        .card2 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            clip-path: polygon(0 28%, 100% 15%, 100% 94.6%, 0 58%);
        }

        .content {
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
            z-index: 3;
            color: white;
        }

        .home_clip {
            clip-path: polygon(35% 12%, 100% 0, 100% 78%, 0 100%, 0 0);
        }

        .bg_clip {
            clip-path: polygon(0 0, 100% 20%, 100% 100%, 0 83%);
        }

        @keyframes scrollleft {
            from {
                left: 100%;
            }

            to {
                left: calc((var(--item-width) + var(--item-gap)) * -1);
            }
        }

        :root {
            --item-width: 200px;
            --total-items: 9;
            --item-gap: 550px;
            --duration: 45s;
        }

        .item {
            width: var(--item-width);
            height: 150px;
            position: absolute;
            left: calc(100% + ((var(--item-width) + var(--item-gap)) * var(--total-items)));
            animation: scrollleft var(--duration) linear infinite;
        }

        .item1 {
            animation-delay: calc(var(--duration) / 9 * -8);
        }

        .item2 {
            animation-delay: calc(var(--duration) / 9 * -7);
        }

        .item3 {
            animation-delay: calc(var(--duration) / 9 * -6);
        }

        .item4 {
            animation-delay: calc(var(--duration) / 9 * -5);
        }

        .item5 {
            animation-delay: calc(var(--duration) / 9 * -4);
        }

        .item6 {
            animation-delay: calc(var(--duration) / 9 * -3);
        }

        .item7 {
            animation-delay: calc(var(--duration) / 9 * -2);
        }

        .item8 {
            animation-delay: calc(var(--duration) / 9 * -1);
        }

        .item9 {
            animation-delay: 0s;
        }

        @media (max-width:640px) {
            :root {
                --item-width: 100px;
                --item-gap: 600px;
                --duration: 20s;
            }

            .item {
                height: 100px;
            }
        }

        .wrapper:hover .item {
            animation-play-state: paused;
        }

        @media screen and (max-width:1023px) {
            .home_clip {
                clip-path: polygon(0 4%, 100% 0, 100% 94%, 0% 100%);
            }

            .bg_clip {
                clip-path: polygon(0 0, 100% 20%, 100% 100%, 0 80%);
            }
        }

        .card:target {
            transform: scale(1) !important;
            opacity: 1 !important;
            box-shadow: 0 20px 50px rgba(242, 106, 39, 0.45);
            border: 2px solid #F26A27;
        }

        .mission-section {
            text-align: center;
            padding: 100px 20px;
        }

        .circle-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 70px;
        }

        .circle {
            background: #24364b;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            cursor: pointer;
            transition: all .6s ease;
        }

        .circle i {
            font-size: 45px;
        }

        .small {
            width: 120px;
            height: 120px;
        }

        .main {
            width: 230px;
            height: 230px;
            transform: scale(1);
        }

        .main.active {
            transform: scale(1.15) rotate(360deg);
        }

        .content-box {
            margin-top: 40px;
        }

        .content-box h2 {
            color: #f36c21;
            font-size: 34px;
        }

        .content-box p {
            max-width: 650px;
            margin: auto;
            color: #333;
            font-size: 17px;
        }

        .fade {
            animation: fade .5s;
        }

        @keyframes fade {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endsection

@section('content')
    {{-- desktop and mobile responsive  --}}
    <div
        class="relative top-[-260px] sm:top-[-100px] lg:-top-[400px] home_clip
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
        z-1000
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
                    About Daiku
                </h1>

                <p class="mt-6 max-w-3xl mx-auto text-center text-xs sm:text-sm md:text-base leading-7" data-aos="fade-up"
                    data-aos-duration="900" data-aos-delay="100">
                    Providing HVAC, Electrical, Plumbing, Fire Protection, and Air Conditioning Maintenance Services for
                    commercial, industrial, hospitality, healthcare, and residential projects across Cambodia.
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








    <div class="relative w-full  mt-[-20rem]  sm:mt-[-24rem] lg:mt-[-30rem]">

        {{-- Text Section --}}
        <div class="text-start max-w-7xl mx-auto px-4 py-8">
            <h1 class="text-xl sm:text-2xl md:text-3xl font-bold leading-none mb-4" style="color:#F26A27;"
                data-aos="fade-down" data-aos-duration="800">
                Company Overview
            </h1>
            <p class="text-xs sm:text-sm max-w-3xl mb-6" style="color:#2b3d4f;">
                Daiku MEP Solution Co., Ltd is a professional Mechanical, Electrical, and Plumbing (MEP)
                engineering company based in Phnom Penh, Cambodia. Established in 2020, we specialize in
                delivering comprehensive engineering solutions including HVAC systems, electrical systems,
                plumbing systems, fire protection systems, MEP design & consultancy, and air conditioning
                annual maintenance services.
            </p>
            <p class="text-xs sm:text-sm max-w-3xl" style="color:#2b3d4f;">
                Our experienced engineering team supports clients throughout every stage of a project—from
                planning and design to installation, testing, commissioning, and long-term maintenance. We
                serve a wide range of industries including hospitality, healthcare, commercial, retail,
                industrial, and residential developments throughout Cambodia.
            </p>
        </div>

        {{-- Service Cards --}}
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

        <div class="py-4 px-4 max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($services as $index => $service)
                <div class="rounded-md overflow-hidden flex flex-col shadow-md" style="background-color:#2C3E50;"
                    data-aos="fade-up" data-aos-duration="700" data-aos-delay="{{ $index * 100 }}">

                    <div class="w-full aspect-[4/3] overflow-hidden shrink-0 bg-[#1c2733]">
                        <img src="{{ asset($service['img']) }}" alt="{{ $service['title'] }}"
                            class="w-full h-full object-cover {{ $service['pos'] }}">
                    </div>

                    <div class="p-5 flex flex-col flex-1">
                        <h3 class="text-sm font-bold mb-2" style="color:#F26A27;">{{ $service['title'] }}</h3>
                        <hr style="border-color:#F26A27; opacity:.5;" class="mb-3">
                        <p class="text-xs leading-relaxed mb-5 flex-1" style="color:#CBD5E1;">{{ $service['desc'] }}</p>
                        <a href="{{ $service['route'] }}"
                            class="self-start text-xs font-semibold px-5 py-2 rounded transition hover:opacity-80"
                            style="background-color:#F26A27; color:#fff;">
                            Explore Services
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>


    {{-- ===== INDUSTRIES WE SERVE ===== --}}
    <div class="w-full max-w-5xl mx-auto px-4 mt-10 mb-16 text-center">
        <h2 class="text-[20px] md:text-[26px] font-[700] mb-10" style="color:#F26A27;" data-aos="fade-down"
            data-aos-duration="800">
            Industries We Serve
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-5">
            @php
                $industries = [
                    [
                        'title' => 'Hospitality',
                        'desc' => 'Hotels, resorts, Serviced Apartments',
                        'icon' => 'assets/images/Serve/Frame3.png',
                    ],
                    [
                        'title' => 'Healthcare',
                        'desc' => 'Hospitals, clinics, Laboratories',
                        'icon' => 'assets/images/Serve/Frame3.png',
                    ],
                    [
                        'title' => 'Commercial',
                        'desc' => 'Hotels, Resorts, Serviced Apartments',
                        'icon' => 'assets/images/Serve/Frame2.png',
                    ],
                    [
                        'title' => 'Residential',
                        'desc' => 'Villas, Condominiums, Boreys',
                        'icon' => 'assets/images/Serve/Frame5.png',
                    ],
                    [
                        'title' => 'Food & Beverage',
                        'desc' => 'Restaurants, Cafes, Kitchens',
                        'icon' => 'assets/images/Serve/Frame1.png',
                    ],
                    [
                        'title' => 'Industrial',
                        'desc' => 'Factories, Warehouses',
                        'icon' => 'assets/images/Serve/Frame6.png',
                    ],
                ];
            @endphp

            @foreach ($industries as $index => $industry)
                <div class="rounded-md p-6 flex flex-col items-center justify-center" style="border:1px solid #F26A27;"
                    data-aos="zoom-in" data-aos-duration="600" data-aos-delay="{{ $index * 100 }}">
                    <img src="{{ asset($industry['icon']) }}" alt="{{ $industry['title'] }}" class="w-10 h-10 mb-3">
                    <h3 class="text-[14px] font-[700] mb-1" style="color:#F26A27;">{{ $industry['title'] }}</h3>
                    <p class="text-[12px] leading-snug" style="color:#374151;">{{ $industry['desc'] }}</p>
                </div>
            @endforeach
        </div>

    </div>
    {{-- Why Choose Daiku --}}
    <div class="relative w-full mt-46 md:mt-[120px]">

        {{-- ── ORANGE BACKGROUND (diagonal) ── --}}


        <div class="absolute inset-x-0 top-0 h-[100%] z-0 bg-[#F26A27]"
            style="-webkit-clip-path: polygon(0 0, 100% 0, 100% 88%, 0% 100%);
            clip-path: polygon(0 0, 100% 0, 100% 77%, 0% 100%);">
        </div>

        {{-- ── HUMAN PHOTO (desktop only) ── --}}
        <img src="{{ asset('assets/images/whychoos-us/Mask1.png') }}" alt="Daiku Engineer"
            class="absolute left-0 bottom-[-1%]
           h-[120%] lg:h-[130%] xl:h-[140%]
           w-auto max-w-[50%] lg:max-w-[52%] xl:max-w-[55%]
           object-contain object-left-bottom
           rotate-4
           md:block hidden" />

        {{-- ── HUMAN PHOTO (mobile: left side) ── --}}
        {{-- ── HUMAN PHOTO (mobile: left side) ── --}}
        <div
            class="absolute inset-0 w-full h-full flex items-center md:hidden z-[1] pointer-events-none overflow-hidden bg-[#F26A27]">
            <img src="{{ asset('assets/images/whychoos-us/mask2.png') }}" alt="Daiku Engineer"
                class="absolute h-[100%] w-auto max-w-[90%] left-[-20px] top-3 " />
        </div>

        {{-- ── CONTENT ── --}}
        <div
            class="relative z-10 w-full
                px-4 sm:px-6 md:px-10 lg:px-16 xl:px-20
                pt-8 sm:pt-10 md:pt-14 lg:pt-16 xl:pt-20
                pb-16 sm:pb-20 md:pb-24 lg:pb-28 xl:pb-32">

            {{-- Title --}}
            <h2
                class="font-bold leading-tight text-[#1F2D3D]
           mb-5 md:mb-8 lg:mb-10
           text-[17px] sm:text-[20px] md:text-[24px] lg:text-[30px] xl:text-[36px]
           text-center
            ">
                Why Choose Daiku MEP Solution?
            </h2>

            {{-- 2-col layout: spacer left + grid right --}}
            <div class="flex flex-row w-full gap-2 md:gap-6">

                {{-- Left spacer for human photo (all screens) --}}
                <div class="flex-shrink-0
                        w-[45%] md:w-[30%] lg:w-[35%] xl:w-[38%]">
                </div>

                {{-- Reasons Grid --}}
                <div class="w-full md:w-[70%] lg:w-[65%] xl:w-[62%]">

                    @php
                        $reasons = [
                            [
                                'num' => '01',
                                'title' => 'Experienced Engineering Team',
                                'desc' =>
                                    'Skilled engineers and technicians with expertise in MEP design, installation, and maintenance.',
                            ],
                            [
                                'num' => '02',
                                'title' => 'Quality & Safety Commitment',
                                'desc' =>
                                    'Delivering engineering solutions that prioritize performance, reliability, and compliance with industry standards.',
                            ],
                            [
                                'num' => '03',
                                'title' => 'End-to-End Solutions',
                                'desc' =>
                                    'From consultation and design to installation, commissioning, and maintenance support.',
                            ],
                            [
                                'num' => '04',
                                'title' => 'Reliable Maintenance Services',
                                'desc' =>
                                    'Providing preventive maintenance programs that improve system efficiency and extend equipment lifespan.',
                            ],
                            [
                                'num' => '05',
                                'title' => 'Proven Project Experience',
                                'desc' =>
                                    'Successfully delivering projects across hospitality, healthcare, commercial, retail, industrial, and residential sectors.',
                            ],
                            [
                                'num' => '06',
                                'title' => 'Project Experience',
                                'desc' =>
                                    'Trusted across hotels, resorts, clinics, malls, restaurants, retail stores, residences, and villas across Cambodia.',
                            ],
                        ];
                    @endphp

                    <div
                        class="grid grid-cols-2 md:grid-cols-3
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
    <section class="bg-white py-20 px-4 md:px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-center text-2xl md:text-3xl font-extrabold mb-16" style="color:#F26A27;" data-aos="fade-down"
                data-aos-duration="800">
                Our Team
            </h2>

            @php
                $teamMembers = [
                    [
                        'name' => ' 1. Mr. PHAN Tola',
                        'position' => 'Managing Director',
                        'image' => 'assets/images/photo/',
                    ],
                    [
                        'name' => 'Mr. THY Somphon',
                        'position' => 'MVAC Designer',
                        'image' => 'assets/images/photo/Somphon.png',
                    ],
                    [
                        'name' => 'Mr. YON Sarout',
                        'position' => 'Electrical Designer',
                        'image' => 'assets/images/photo/Sarout.png',
                    ],
                    [
                        'name' => 'Ms. Sreymech',
                        'position' => 'Accountant',
                        'image' => 'assets/images/photo/sreymech.png',
                    ],
                    [
                        'name' => ' Mr. Theng Tith',
                        'position' => 'MEP Design Manager',
                        'image' => 'assets/images/photo/manager.jpg',
                    ],
                    [
                        'name' => 'Mr. MON Bunna',
                        'position' => 'MEP Designer',
                        'image' => 'assets/images/photo/Bunna1.png',
                    ],
                    ['name' => 'Ms. THORN Sal', 'position' => 'HR & Admin ', 'image' => 'assets/images/photo/Sal.png'],
                    [
                        'name' => 'Mr. NAO Chanrithy',
                        'position' => 'MEP Site Engineer',
                        'image' => 'assets/images/photo/',
                    ],
                ];
            @endphp

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-x-8 gap-y-14">
                @foreach ($teamMembers as $index => $member)
                    <div class="flex flex-col items-center text-center" data-aos="fade-up" data-aos-duration="700"
                        data-aos-delay="{{ $index * 80 }}">
                        <div class="w-40 h-40 rounded-full overflow-hidden bg-white shadow-md mb-4 border-4 border-white">
                            <img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }}"
                                class="w-full h-full object-cover object-top" onerror="this.style.display='none'">
                        </div>
                        <h3 class="font-bold text-sm md:text-base" style="color:#F26A27;">{{ $member['name'] }}</h3>
                        <p class="text-slate-500 text-xs md:text-sm mt-1">{{ $member['position'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div id="business_registration" class="w-full max-w-7xl mx-auto overflow-hidden px-4 mt-10">
        <h1 class="text-start text-[20px] md:text-[30px] text-[#2C3E50] leading-none font-[700]">Business Registration
            Certifications</h1>
        <div class="flex justify-center items-center py-12">
            <div class="flex md:flex-row flex-col justify-center items-center md:space-x-4 md:space-y-0 space-y-10">
                <div>
                    <img src="{{ asset('assets/images/catificate/3.png') }}" class="md:h-[300px] w-full object-cover" />
                </div>
                <div>
                    <img src="{{ asset('assets/images/catificate/2.png') }}" class="md:h-[300px] w-full object-cover" />
                </div>
                <div>
                    <img src="{{ asset('assets/images/catificate/1.png') }}" class="md:h-[300px] w-full object-cover" />
                </div>
            </div>
        </div>
    </div>

    {{-- ===== PROJECT EXPERIENCES ===== --}}
    <div class="relative w-full bg-gray-50 py-16 px-4" id="project">
        <h1 class="text-center text-[20px] md:text-[30px] text-[#2b3d4f] font-[700] py-10 max-w-7xl mx-auto px-4 leading-none"
            data-aos="fade-down" data-aos-duration="800">
            Project Experiences
        </h1>

        <div class="max-w-5xl mx-auto grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 gap-y-10 gap-x-6 text-center">
            @php
                $projectTypes = [
                    ['title' => 'Hotels & Resorts', 'image' => asset('assets/images/Serve/Frame1.png')],
                    ['title' => 'Healthcare Facilities', 'image' => asset('assets/images/Serve/Frame2.png')],
                    ['title' => 'Shopping Malls', 'image' => asset('assets/images/Serve/Frame3.png')],
                    ['title' => 'Restaurants', 'image' => asset('assets/images/Serve/Frame4.png')],
                    ['title' => 'Retail Stores', 'image' => asset('assets/images/Serve/Frame5.png')],
                    ['title' => 'Residential Projects', 'image' => asset('assets/images/Serve/Frame6.png')],
                ];
            @endphp

            @foreach ($projectTypes as $index => $type)
                <div class="flex flex-col items-center" data-aos="fade-up" data-aos-duration="700"
                    data-aos-delay="{{ $index * 100 }}">
                    <div
                        class="w-20 h-20 rounded-full bg-white border-2 border-[#F26A27] flex items-center justify-center mb-3">
                        <img src="{{ $type['image'] }}" alt="{{ $type['title'] }}" class="w-12 h-12 object-contain">
                    </div>
                    <p class="text-[13px] font-[600] text-[#2b3d4f]">{{ $type['title'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-10" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
            <a href="{{ route('project') }}"
                class="inline-block px-6 py-3 rounded text-[12px] md:text-[13px] font-[700] bg-[#F26A27] text-white">
                View All Projects
            </a>
        </div>
    </div>

    {{-- ===== ORANGE DIVIDER ===== --}}
    <div class="relative w-full" style="margin-top:0;">
        <div class="relative w-full" style="overflow:hidden;">
            <div class="absolute inset-0"
                style="background-color:#F26A27; clip-path:polygon(0 32%,100% 8%,100% 100%,0 100%); z-index:0;"></div>
            <div class="absolute top-0 left-0 w-full"
                style="height:100%; background-color:#1F2D3D; clip-path:polygon(0 28%,100% 4%,100% 8%,0 32%); z-index:1;">
            </div>
        </div>
    </div>

    {{-- ===== MISSION / VISION ===== --}}
    <section class="mission-section">
        <div class="circle-wrapper">
            <div class="circle small"><img src="" alt=""></div>
            <div class="circle main"><img src="" alt=""></div>
            <div class="circle small"><img src="" alt=""></div>
        </div>
        <div class="content-box">
            <h2 id="title"></h2>
            <p id="description"></p>
        </div>
    </section>


    {{-- ===== NOTABLE CLIENTS ===== --}}


    <style>
        .mission-section {
            text-align: center;
            padding: 120px 20px 60px;
        }

        .circle-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 80px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .circle {
            border-radius: 50%;
            cursor: pointer;
            transition: all .3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .circle:hover {
            transform: scale(1.05);
        }

        .circle.small {
            width: 140px;
            height: 140px;
        }

        @media (max-width:640px) {
            .circle.small {
                width: 90px;
                height: 90px;
            }

            .circle.main {
                width: 160px;
                height: 160px;
            }
        }

        .circle.main {
            width: 240px;
            height: 240px;
        }

        .circle img {
            width: 80%;
            height: 80%;
        }

        .content-box {
            max-width: 800px;
            margin: auto;
            padding: 0 16px;
        }

        .content-box h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .content-box p {
            font-size: 15px;
            line-height: 1.8;
        }
    </style>

    <script>
        const contents = [{
                title: "Mission",
                image: "{{ asset('assets/images/icone/image-18.png') }}",
                description: "Our mission is to lead in Mechanical, Electrical, Plumbing, and Firefighting design, delivering international standard services."
            },
            {
                title: "Vision",
                image: "{{ asset('assets/images/icone/image-19.png') }}",
                description: "Our vision is to become the most trusted MEP engineering consultancy in Cambodia and the region."
            },
            {
                title: "Core Value",
                image: "{{ asset('assets/images/icone/image-20.png') }}",
                description: "Integrity, Quality, Innovation, Teamwork and Customer Satisfaction are the foundation of our success."
            }
        ];
        let current = 0;
        const circles = document.querySelectorAll('.circle img');
        const circleBoxes = document.querySelectorAll('.circle');

        function render() {
            const left = (current - 1 + contents.length) % contents.length;
            const right = (current + 1) % contents.length;
            circles[0].src = contents[left].image;
            circles[1].src = contents[current].image;
            circles[2].src = contents[right].image;
            document.getElementById('title').innerText = contents[current].title;
            document.getElementById('description').innerText = contents[current].description;
        }
        circleBoxes[0].addEventListener('click', () => {
            current = (current - 1 + contents.length) % contents.length;
            render();
        });
        circleBoxes[1].addEventListener('click', () => {
            render();
        });
        circleBoxes[2].addEventListener('click', () => {
            current = (current + 1) % contents.length;
            render();
        });
        setInterval(() => {
            current = (current + 1) % contents.length;
            render();
        }, 3000);
        render();
    </script>

    {{-- ===== FAQ ===== --}}
    <section class="bg-white py-20 px-4 md:px-6 border-b border-slate-200" id="faqs-section">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-down" data-aos-duration="800">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Frequently Asked Questions
                </h2>
                <div class="w-12 h-1 bg-orange-500 mx-auto mt-3 rounded-full"></div>
            </div>

            <div class="flex flex-col md:flex-row gap-4 items-start">
                <div class="flex flex-col gap-4 w-full md:w-1/2">
                    @foreach ([[1, 'What services does Daiku provide?', 'Daiku provides HVAC, Electrical, Plumbing, Fire Protection, MEP Design & Consultancy, and Air Conditioning Maintenance Services throughout Cambodia.'], [3, 'Does Daiku provide annual maintenance contracts?', 'Yes. We offer Air Conditioning Annual Maintenance Service (AMS) programs for residential, commercial, and industrial facilities.']] as $index => [$id, $q, $a])
                        <div class="border border-orange-400 rounded-xl overflow-hidden" data-aos="fade-right"
                            data-aos-duration="700" data-aos-delay="{{ $index * 100 }}">
                            <button type="button" onclick="toggleFaq({{ $id }})"
                                id="faq-btn-{{ $id }}"
                                class="w-full flex justify-between items-center text-left px-5 py-4 bg-white font-semibold text-slate-800 text-sm cursor-pointer hover:bg-orange-50 transition-colors">
                                <span class="pr-4">{{ $q }}</span>
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
                                    {!! $a !!}</div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="flex flex-col gap-4 w-full md:w-1/2">
                    @foreach ([[2, 'Which industries do you serve?', 'We serve hospitality, healthcare, commercial, retail, residential, and industrial sectors.'], [4, 'Where is Daiku located?', 'Daiku MEP Solution is headquartered in Phnom Penh, Cambodia.']] as $index => [$id, $q, $a])
                        <div class="border border-orange-400 rounded-xl overflow-hidden" data-aos="fade-left"
                            data-aos-duration="700" data-aos-delay="{{ $index * 100 }}">
                            <button type="button" onclick="toggleFaq({{ $id }})"
                                id="faq-btn-{{ $id }}"
                                class="w-full flex justify-between items-center text-left px-5 py-4 bg-white font-semibold text-slate-800 text-sm cursor-pointer hover:bg-orange-50 transition-colors">
                                <span class="pr-4">{{ $q }}</span>
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
                                    {{ $a }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

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

    {{-- ===== READY TO HELP BANNER ===== --}}
    <div class="relative w-full bg-[#f8f7f7] my-16 overflow-hidden">
        <div class="relative w-full h-[400px] md:h-[460px] bg-cover bg-center"
            style="background-image:url({{ asset('assets/images/whychoos-us/image.png') }}); clip-path:polygon(0 15%,100% 0,100% 85%,0 100%)">
            <div class="absolute inset-0 bg-[#44678a]/50 z-0"></div>
            <div
                class="relative z-20 w-full h-full max-w-5xl mx-auto px-6 flex flex-col items-center justify-center text-center space-y-6">
                <h2 class="text-white text-[16px] sm:text-[22px] md:text-[27px] font-normal leading-relaxed max-w-4xl"
                    data-aos="fade-up" data-aos-duration="1000">
                    Whether you need a new installation, maintenance support, or engineering consultancy, our team is ready
                    to help.
                </h2>
                <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" class="pt-2">
                    <a href="{{ route('contact') }}"
                        class="inline-block bg-[#F26A27] hover:bg-[#d85c20] text-white font-medium px-7 py-3 rounded transition shadow-md text-[13px]">
                        Request Quotation
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
