@extends('layouts.app')
@section('css')
@endsection

@section('content')
    {{-- Section 1: Image Left, Text Right --}}
    <section class="relative z-50 py-10 md:py-16​​​">
        <div class="relative">
            <div
                class="absolute bottom-6 sm:bottom-10 left-1/2 -translate-x-1/2 z-30 px-5 sm:px-8 py-3 sm:py-4 rounded text-center">
                <h1 class="text-xl sm:text-2xl md:text-3xl font-bold text-[#F26A27] whitespace-nowrap">
                    Mechanical Systems
                </h1>
            </div>
        </div>
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-6 md:gap-8">
                <div class="w-full md:w-1/2 relative">
                    <img src="{{ asset('assets/images/service/Frame.png') }}"
                        alt="Mechanical Systems - HVAC, Air Conditioning & Ventilation"
                        class="w-full h-60 sm:h-72 md:h-80 object-cover rounded shadow-lg">
                </div>
                <div class="w-full md:w-1/2">
                    <h2 class="text-base sm:text-lg font-bold text-[#F26A27] mb-3">Mechanical System</h2>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Professional Mechanical Engineering Solutions in Cambodia. Daiku MEP Solution
                        provides comprehensive mechanical engineering services for commercial, industrial,
                        hospitality, healthcare, and residential developments throughout Cambodia.
                        Our expertise includes HVAC systems, ventilation systems, air conditioning
                        installation, ducting works, chilled water systems, and preventive maintenance
                        programs designed to improve building performance, energy efficiency, and
                        occupant comfort.
                    </p>
                </div>
            </div>
        </div>

        {{-- Section 2: Text Left, Image Right --}}
        <div class="max-w-6xl mx-auto px-4 mt-7">
            <div class="flex flex-col md:flex-row gap-6 md:gap-8">
                <div class="w-full md:w-1/2 order-2 md:order-1">
                    <h4 class="text-[#F26A27] text-base sm:text-lg font-bold mt-5 mb-2">Our Mechanical Services</h4>
                    <ul class="list-disc list-inside text-slate-700 text-sm space-y-2">
                        <li>HVAC Systems</li>
                        <li>Air Conditioning Installation</li>
                        <li>VRF & VRV Systems</li>
                        <li>Ventilation Systems</li>
                        <li>Ducting Works</li>
                        <li>Chilled Water Systems</li>
                        <li>Mechanical Equipment Installation</li>
                        <li>Preventive Maintenance Air-Conditioning System</li>
                        <li class="pl-5 list-none">Clean Room</li>
                        <li class="pl-5 list-none">Air-Curtain</li>
                        <li class="pl-5 list-none">Kitchen Hood</li>
                        <li class="pl-5 list-none">Central Gas System (LPG)</li>
                    </ul>
                </div>
                <div class="w-full md:w-1/2 order-1 md:order-2">
                    <img src="{{ asset('assets/images/service/22.png') }}"
                        alt="Air Conditioning & Special Mechanical Systems"
                        class="w-full h-60 sm:h-72 md:h-80 object-cover rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    {{-- Industries We Serve --}}
    <div class="w-full max-w-5xl mx-auto px-4 mt-10 mb-16 text-center" data-aos="fade-up">
        <h2 class="text-[20px] md:text-[26px] font-[700] mb-10" style="color:#F26A27;">
            Industries We Serve
        </h2>

        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-5">
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

            @foreach ($industries as $industry)
                <div class="rounded-md p-4 sm:p-6 flex flex-col items-center justify-center"
                    style="border:1px solid #F26A27;">
                    <img src="{{ asset($industry['icon']) }}" alt="{{ $industry['title'] }}"
                        class="w-8 h-8 sm:w-10 sm:h-10 mb-3">
                    <h3 class="text-[13px] sm:text-[14px] font-[700] mb-1" style="color:#F26A27;">
                        {{ $industry['title'] }}
                    </h3>
                    <p class="text-[11px] sm:text-[12px] leading-snug" style="color:#374151;">
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
           left-[30%] -translate-x-1/2
           h-[120%] lg:h-[100%] xl:h-[90%]
           w-auto max-w-[50%] lg:max-w-[52%] xl:max-w-[55%]
           object-contain object-left-bottom
           rotate-4
           md:block hidden
           mb-10" />

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
                        w-[45%] md:w-[30%] lg:w-[35%] xl:w-[38%]">
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

    {{-- FAQs Section --}}
    <section class="bg-white py-12 sm:py-16 md:py-20 px-4 md:px-6 border-b border-slate-200" id="faqs-section">
        <div class="max-w-4xl mx-auto">

            <div class="text-center mb-10 md:mb-16">
                <span class="text-orange-500 text-xs font-extrabold uppercase tracking-wide block mb-2">Support
                    Center</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Frequently Asked
                    Questions</h2>
                <div class="w-12 h-1 bg-orange-500 mx-auto mt-3 rounded-full"></div>
            </div>

            <div class="flex flex-col md:flex-row gap-4 items-start">

                {{-- Left Column --}}
                <div class="flex flex-col gap-4 w-full md:w-1/2">

                    <div class="border border-orange-400 rounded-xl overflow-hidden">
                        <button type="button" onclick="toggleFaq(1)" id="faq-btn-1"
                            class="w-full flex justify-between items-center text-left px-5 py-4 bg-white font-semibold text-slate-800 text-sm cursor-pointer hover:bg-orange-50 transition-colors">
                            <span class="pr-4">What services does Daiku provide?</span>
                            <span class="flex-shrink-0">
                                <svg id="faq-arrow-1" xmlns="http://www.w3.org/2000/svg"
                                    class="w-3.5 h-3.5 fill-orange-500 transition-transform duration-300"
                                    viewBox="0 0 16 16">
                                    <polygon points="12,8 4,2 4,14" />
                                </svg>
                            </span>
                        </button>
                        <div id="faq-answer-1" class="hidden bg-[#1e2a44] border-t border-orange-300">
                            <div class="px-5 py-4 text-sm leading-relaxed text-orange-400 font-medium">
                                Daiku provides HVAC, Electrical, Plumbing, Fire Protection, MEP Design &amp; Consultancy,
                                and Air Conditioning Annual Maintenance Services.
                            </div>
                        </div>
                    </div>

                    <div class="border border-orange-400 rounded-xl overflow-hidden">
                        <button type="button" onclick="toggleFaq(3)" id="faq-btn-3"
                            class="w-full flex justify-between items-center text-left px-5 py-4 bg-white font-semibold text-slate-800 text-sm cursor-pointer hover:bg-orange-50 transition-colors">
                            <span class="pr-4">Do you provide annual maintenance contracts?</span>
                            <span class="flex-shrink-0">
                                <svg id="faq-arrow-3" xmlns="http://www.w3.org/2000/svg"
                                    class="w-3.5 h-3.5 fill-orange-500 transition-transform duration-300"
                                    viewBox="0 0 16 16">
                                    <polygon points="12,8 4,2 4,14" />
                                </svg>
                            </span>
                        </button>
                        <div id="faq-answer-3" class="hidden bg-[#1e2a44] border-t border-orange-300">
                            <div class="px-5 py-4 text-sm leading-relaxed text-orange-400 font-medium">
                                Yes. We offer customized annual maintenance programs for residential, commercial, and
                                industrial facilities.
                            </div>
                        </div>
                    </div>

                    <div class="border border-orange-400 rounded-xl overflow-hidden">
                        <button type="button" onclick="toggleFaq(5)" id="faq-btn-5"
                            class="w-full flex justify-between items-center text-left px-5 py-4 bg-white font-semibold text-slate-800 text-sm cursor-pointer hover:bg-orange-50 transition-colors">
                            <span class="pr-4">What are Mechanical Systems in a building?</span>
                            <span class="flex-shrink-0">
                                <svg id="faq-arrow-5" xmlns="http://www.w3.org/2000/svg"
                                    class="w-3.5 h-3.5 fill-orange-500 transition-transform duration-300"
                                    viewBox="0 0 16 16">
                                    <polygon points="12,8 4,2 4,14" />
                                </svg>
                            </span>
                        </button>
                        <div id="faq-answer-5" class="hidden bg-[#1e2a44] border-t border-orange-300">
                            <div class="px-5 py-4 text-sm leading-relaxed text-orange-400 font-medium">
                                Mechanical systems refer to the equipment and infrastructure that provide heating,
                                ventilation, air conditioning (HVAC), air circulation, and thermal comfort within a
                                building. These systems help maintain indoor air quality, energy efficiency, and occupant
                                comfort.
                            </div>
                        </div>
                    </div>

                    <div class="border border-orange-400 rounded-xl overflow-hidden">
                        <button type="button" onclick="toggleFaq(6)" id="faq-btn-6"
                            class="w-full flex justify-between items-center text-left px-5 py-4 bg-white font-semibold text-slate-800 text-sm cursor-pointer hover:bg-orange-50 transition-colors">
                            <span class="pr-4">What is the difference between HVAC and ventilation systems?</span>
                            <span class="flex-shrink-0">
                                <svg id="faq-arrow-6" xmlns="http://www.w3.org/2000/svg"
                                    class="w-3.5 h-3.5 fill-orange-500 transition-transform duration-300"
                                    viewBox="0 0 16 16">
                                    <polygon points="12,8 4,2 4,14" />
                                </svg>
                            </span>
                        </button>
                        <div id="faq-answer-6" class="hidden bg-[#1e2a44] border-t border-orange-300">
                            <div class="px-5 py-4 text-sm leading-relaxed text-orange-400 font-medium">
                                HVAC systems control heating, cooling, and air conditioning, while ventilation systems focus
                                on air circulation and indoor air quality. Both systems work together to create a
                                comfortable and healthy indoor environment.
                            </div>
                        </div>
                    </div>

                    <div class="border border-orange-400 rounded-xl overflow-hidden">
                        <button type="button" onclick="toggleFaq(7)" id="faq-btn-7"
                            class="w-full flex justify-between items-center text-left px-5 py-4 bg-white font-semibold text-slate-800 text-sm cursor-pointer hover:bg-orange-50 transition-colors">
                            <span class="pr-4">Does Daiku provide preventive maintenance services?</span>
                            <span class="flex-shrink-0">
                                <svg id="faq-arrow-7" xmlns="http://www.w3.org/2000/svg"
                                    class="w-3.5 h-3.5 fill-orange-500 transition-transform duration-300"
                                    viewBox="0 0 16 16">
                                    <polygon points="12,8 4,2 4,14" />
                                </svg>
                            </span>
                        </button>
                        <div id="faq-answer-7" class="hidden bg-[#1e2a44] border-t border-orange-300">
                            <div class="px-5 py-4 text-sm leading-relaxed text-orange-400 font-medium">
                                Yes. We offer preventive maintenance programs designed to improve equipment performance,
                                reduce unexpected breakdowns, lower operating costs, and extend the lifespan of mechanical
                                systems.
                            </div>
                        </div>
                    </div>

                    <div class="border border-orange-400 rounded-xl overflow-hidden">
                        <button type="button" onclick="toggleFaq(8)" id="faq-btn-8"
                            class="w-full flex justify-between items-center text-left px-5 py-4 bg-white font-semibold text-slate-800 text-sm cursor-pointer hover:bg-orange-50 transition-colors">
                            <span class="pr-4">What are VRF and VRV air conditioning systems?</span>
                            <span class="flex-shrink-0">
                                <svg id="faq-arrow-8" xmlns="http://www.w3.org/2000/svg"
                                    class="w-3.5 h-3.5 fill-orange-500 transition-transform duration-300"
                                    viewBox="0 0 16 16">
                                    <polygon points="12,8 4,2 4,14" />
                                </svg>
                            </span>
                        </button>
                        <div id="faq-answer-8" class="hidden bg-[#1e2a44] border-t border-orange-300">
                            <div class="px-5 py-4 text-sm leading-relaxed text-orange-400 font-medium">
                                VRF (Variable Refrigerant Flow) and VRV (Variable Refrigerant Volume) systems are advanced
                                air conditioning solutions that provide efficient temperature control for multiple zones
                                within a building while reducing energy consumption.
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Right Column --}}
                <div class="flex flex-col gap-4 w-full md:w-1/2">

                    <div class="border border-orange-400 rounded-xl overflow-hidden">
                        <button type="button" onclick="toggleFaq(2)" id="faq-btn-2"
                            class="w-full flex justify-between items-center text-left px-5 py-4 bg-white font-semibold text-slate-800 text-sm cursor-pointer hover:bg-orange-50 transition-colors">
                            <span class="pr-4">Which industries do you serve?</span>
                            <span class="flex-shrink-0">
                                <svg id="faq-arrow-2" xmlns="http://www.w3.org/2000/svg"
                                    class="w-3.5 h-3.5 fill-orange-500 transition-transform duration-300"
                                    viewBox="0 0 16 16">
                                    <polygon points="12,8 4,2 4,14" />
                                </svg>
                            </span>
                        </button>
                        <div id="faq-answer-2" class="hidden bg-[#1e2a44] border-t border-orange-300">
                            <div class="px-5 py-4 text-sm leading-relaxed text-orange-400 font-medium">
                                We support hospitality, healthcare, retail, commercial, residential, and industrial sectors.
                            </div>
                        </div>
                    </div>

                    <div class="border border-orange-400 rounded-xl overflow-hidden">
                        <button type="button" onclick="toggleFaq(4)" id="faq-btn-4"
                            class="w-full flex justify-between items-center text-left px-5 py-4 bg-white font-semibold text-slate-800 text-sm cursor-pointer hover:bg-orange-50 transition-colors">
                            <span class="pr-4">Can Daiku handle both installation and maintenance?</span>
                            <span class="flex-shrink-0">
                                <svg id="faq-arrow-4" xmlns="http://www.w3.org/2000/svg"
                                    class="w-3.5 h-3.5 fill-orange-500 transition-transform duration-300"
                                    viewBox="0 0 16 16">
                                    <polygon points="12,8 4,2 4,14" />
                                </svg>
                            </span>
                        </button>
                        <div id="faq-answer-4" class="hidden bg-[#1e2a44] border-t border-orange-300">
                            <div class="px-5 py-4 text-sm leading-relaxed text-orange-400 font-medium">
                                Yes. We provide complete solutions from design and installation to ongoing maintenance and
                                technical support.
                            </div>
                        </div>
                    </div>

                    <div class="border border-orange-400 rounded-xl overflow-hidden">
                        <button type="button" onclick="toggleFaq(9)" id="faq-btn-9"
                            class="w-full flex justify-between items-center text-left px-5 py-4 bg-white font-semibold text-slate-800 text-sm cursor-pointer hover:bg-orange-50 transition-colors">
                            <span class="pr-4">Why is regular HVAC maintenance important?</span>
                            <span class="flex-shrink-0">
                                <svg id="faq-arrow-9" xmlns="http://www.w3.org/2000/svg"
                                    class="w-3.5 h-3.5 fill-orange-500 transition-transform duration-300"
                                    viewBox="0 0 16 16">
                                    <polygon points="12,8 4,2 4,14" />
                                </svg>
                            </span>
                        </button>
                        <div id="faq-answer-9" class="hidden bg-[#1e2a44] border-t border-orange-300">
                            <div class="px-5 py-4 text-sm leading-relaxed text-orange-400 font-medium">
                                Regular HVAC maintenance helps improve system efficiency, maintain indoor air quality,
                                reduce energy costs, prevent unexpected failures, and extend the lifespan of equipment.
                            </div>
                        </div>
                    </div>

                    <div class="border border-orange-400 rounded-xl overflow-hidden">
                        <button type="button" onclick="toggleFaq(10)" id="faq-btn-10"
                            class="w-full flex justify-between items-center text-left px-5 py-4 bg-white font-semibold text-slate-800 text-sm cursor-pointer hover:bg-orange-50 transition-colors">
                            <span class="pr-4">Can Daiku provide mechanical solutions for large-scale projects?</span>
                            <span class="flex-shrink-0">
                                <svg id="faq-arrow-10" xmlns="http://www.w3.org/2000/svg"
                                    class="w-3.5 h-3.5 fill-orange-500 transition-transform duration-300"
                                    viewBox="0 0 16 16">
                                    <polygon points="12,8 4,2 4,14" />
                                </svg>
                            </span>
                        </button>
                        <div id="faq-answer-10" class="hidden bg-[#1e2a44] border-t border-orange-300">
                            <div class="px-5 py-4 text-sm leading-relaxed text-orange-400 font-medium">
                                Yes. Daiku supports commercial, industrial, hospitality, healthcare, retail, and residential
                                projects of various sizes, from standalone facilities to large-scale developments.
                            </div>
                        </div>
                    </div>

                    <div class="border border-orange-400 rounded-xl overflow-hidden">
                        <button type="button" onclick="toggleFaq(11)" id="faq-btn-11"
                            class="w-full flex justify-between items-center text-left px-5 py-4 bg-white font-semibold text-slate-800 text-sm cursor-pointer hover:bg-orange-50 transition-colors">
                            <span class="pr-4">How can I request a quotation for mechanical engineering services?</span>
                            <span class="flex-shrink-0">
                                <svg id="faq-arrow-11" xmlns="http://www.w3.org/2000/svg"
                                    class="w-3.5 h-3.5 fill-orange-500 transition-transform duration-300"
                                    viewBox="0 0 16 16">
                                    <polygon points="12,8 4,2 4,14" />
                                </svg>
                            </span>
                        </button>
                        <div id="faq-answer-11" class="hidden bg-[#1e2a44] border-t border-orange-300">
                            <div class="px-5 py-4 text-sm leading-relaxed text-orange-400 font-medium">
                                You can contact Daiku MEP Solution through our website, phone, or email to discuss your
                                project requirements and receive a customized proposal.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Ready to Help Banner Section --}}
    <div class="relative w-full bg-[#f8f7f7] my-10 sm:my-16 overflow-hidden">
        <div class="relative w-full h-[320px] sm:h-[400px] md:h-[460px] bg-cover bg-center"
            style="background-image: url({{ asset('assets/images/whychoos-us/image.png') }}); clip-path: polygon(0 15%, 100% 0, 100% 85%, 0 100%);">
            <div class="absolute inset-0 bg-[#44678a]/50 z-0"></div>
            <div
                class="relative z-20 w-full h-full max-w-5xl mx-auto px-6 flex flex-col items-center justify-center text-center space-y-6">
                <h2 class="text-white text-[14px] sm:text-[16px] md:text-[22px] lg:text-[27px] font-normal leading-relaxed max-w-4xl"
                    data-aos="fade-up" data-aos-duration="1000">
                    Whether you need a new installation, maintenance support, or engineering consultancy, our team is ready
                    to help.
                </h2>
                <div data-aos="fade-up" data-aos-duration="1200" class="pt-2">
                    <a href="{{ route('contact') }}"
                        class="inline-block bg-[#F26A27] hover:bg-[#d85c20] text-white font-medium px-6 sm:px-7 py-2.5 sm:py-3 rounded transition shadow-md text-[12px] sm:text-[13px]">
                        Request Quotation
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (window.location.hash) {
                const target = document.querySelector(window.location.hash);
                if (target) {
                    setTimeout(() => {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }, 200);
                }
            }
        });
    </script>

    <script>
        function toggleFaq(id) {
            const answer = document.getElementById('faq-answer-' + id);
            const arrow = document.getElementById('faq-arrow-' + id);
            const btn = document.getElementById('faq-btn-' + id);

            const isOpen = !answer.classList.contains('hidden');

            if (isOpen) {
                answer.classList.add('hidden');
                arrow.style.transform = 'rotate(0deg)';
                btn.classList.remove('text-orange-500');
                btn.classList.add('text-slate-800');
            } else {
                answer.classList.remove('hidden');
                arrow.style.transform = 'rotate(90deg)';
                btn.classList.remove('text-slate-800');
                btn.classList.add('text-orange-500');
            }
        }
    </script>
@endsection
