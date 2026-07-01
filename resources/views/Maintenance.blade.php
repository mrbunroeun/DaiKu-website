@extends('layouts.app')

@section('title', 'AC Maintenance Plans - Daiku MEP Cambodia')

@section('content')
    {{-- =========================================================
     HERO SECTION
     - Uses home_clip CSS clip-path for diagonal shape
     - Background image: lg:block (desktop only)
     - Desktop height: lg:min-h-[780px]
     - Title/paragraph button: edit lines below
========================================================= --}}
    <div
        class="relative mt-[-15rem]  sm-:mt-[-20rem] lg:mt-[-25rem] home_clip
        min-h-[420px] sm:min-h-[500px] lg:min-h-[780px] max-[490px]:mt-[-25rem] overflow-hidden">

        {{-- Background Color (mobile only, sits behind the shape image, shorter height) --}}
        <div class="absolute top-[9rem] left-0 w-full h-[200px] bg-[#F26A27] block lg:hidden -z-10"></div>

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
     SECTION: FREE Inspection
     Desktop: lg:flex-row (side by side)
     Mobile: flex-col (stacked)
     - Text column: line ~85
     - Image column: line ~99
========================================================= --}}
    <div class="relative z-50  pt-6 pb-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col lg:flex-row lg:justify-between lg:items-start gap-10">

                <!-- Text -->
                <div class="w-full lg:w-1/2 order-1" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="text-2xl font-bold text-[#F26522] mb-4">
                        FREE Air Conditioner Inspection
                    </h2>

                    <p class="text-[#2B3D4F] text-sm mb-4">
                        For a limited time, receive a FREE on-site air conditioning inspection and
                        system assessment by our experienced technicians.
                    </p>

                    <ul class="space-y-2 mb-6">
                        @foreach (['System Performance Check', 'Cooling Efficiency Assessment', 'Air Filter Inspection', 'Equipment Condition Evaluation', 'Maintenance Recommendations'] as $item)
                            <li class="flex items-center gap-2 text-sm text-gray-700">
                                <svg class="w-4 h-4 text-[#F26522] shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>

                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center bg-[#F26522] hover:bg-[#d9551a] text-white text-sm font-semibold px-6 py-3 rounded transition">
                        Book Your Free Inspection
                    </a>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-1/2 order-2 overflow-hidden rounded" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-delay="200">
                    <img src="{{ asset('assets/images/maintenance/image.jpg') }}" alt="Free Air Conditioner Inspection"
                        class="w-full max-w-sm mx-auto object-contain rounded">
                </div>

            </div>
        </div>
    </div>

    {{-- =========================================================
     SECTION: Why Annual Maintenance Matters
     Desktop: lg:flex-row (side by side)
     Mobile: flex-col (stacked)
     - Image column: line ~135
     - Text column: line ~148
========================================================= --}}
    <div class="relative z-50 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col lg:flex-row lg:justify-between lg:items-start gap-10">

                <!-- Image -->
                <div class="w-full lg:w-1/2 order-1 overflow-hidden rounded-2xl" data-aos="fade-right"
                    data-aos-duration="1000">
                    <img src="{{ asset('assets/images/maintenance/image02.jpg') }}" alt="Annual Maintenance"
                        class="w-full max-w-sm mx-auto object-contain">
                </div>

                <!-- Text -->
                <div class="w-full lg:w-1/2 order-2" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <h2 class="text-2xl font-bold text-[#F26522] mb-4">
                        Why Annual Maintenance Matters
                    </h2>

                    <p class="text-[#2B3D4F] font-semibold text-sm mb-3">
                        Without regular maintenance, air conditioning systems can experience:
                    </p>

                    <ul class="space-y-2 mb-4">
                        @foreach (['Reduced cooling performance', 'Increased electricity consumption', 'Poor indoor air quality', 'Unexpected breakdowns', 'Shortened equipment lifespan'] as $item)
                            <li class="flex items-center gap-2 text-sm text-gray-700">
                                <svg class="w-4 h-4 text-red-500 shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>

                    <p class="text-sm text-gray-600 leading-relaxed">
                        Regular maintenance helps improve efficiency, reliability, and long-term operating performance.
                    </p>
                </div>

            </div>
        </div>
    </div>

    {{-- =========================================================
     SECTION: Benefits of Daiku AMC
     Desktop: lg:flex-row (side by side)
     Mobile: flex-col (stacked)
     - Image column: line ~191
     - Text column: line ~201
========================================================= --}}
    <div class="relative z-50 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col lg:flex-row lg:justify-between lg:items-start gap-10">

                <!-- Image -->
                <div class="w-full lg:w-1/2 order-1" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('assets/images/maintenance/image2.jpg') }}" alt="Benefits of Daiku AMC"
                        class="w-full max-w-sm mx-auto object-contain rounded-2xl">
                </div>

                <!-- Text -->
                <div class="w-full lg:w-1/2 order-2" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <h2 class="text-2xl font-bold text-[#F26522] mb-5">
                        Benefits of Daiku AMC
                    </h2>

                    <div class="space-y-4">
                        <div>
                            <h4 class="text-[#2B3D4F] font-bold text-sm mb-1">Improve Energy Efficiency</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Well-maintained systems consume less energy and operate more efficiently.
                            </p>
                        </div>

                        <div>
                            <h4 class="text-[#2B3D4F] font-bold text-sm mb-1">Reduce Unexpected Breakdowns</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Preventive maintenance helps identify issues before they become costly repairs.
                            </p>
                        </div>

                        <div>
                            <h4 class="text-[#2B3D4F] font-bold text-sm mb-1">Extend Equipment Lifespan</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Regular servicing protects critical components and increases system longevity.
                            </p>
                        </div>

                        <div>
                            <h4 class="text-[#2B3D4F] font-bold text-sm mb-1">Priority Technical Support</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Contract customers receive priority service support and maintenance scheduling.
                            </p>
                        </div>

                        <div>
                            <h4 class="text-[#2B3D4F] font-bold text-sm mb-1">Better Indoor Air Quality</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Clean filters and properly maintained systems help create healthier indoor environments.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- =========================================================
     SECTION: Exclusive Annual Contract - Residential
     Desktop: lg:flex-row (side by side)
     Mobile: flex-col (stacked)
     - Text column: line ~252
     - Image column: line ~268
========================================================= --}}
    <div class="relative z-50 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col lg:flex-row lg:justify-between lg:items-start gap-10">

                <!-- Text -->
                <div class="w-full lg:w-1/2 order-1" data-aos="fade-right" data-aos-duration="1000">
                    <h3 class="text-xl font-bold text-[#F26522] mb-3">
                        Exclusive Annual Contract Benefits
                    </h3>

                    <p class="text-sm text-gray-500 mb-2">
                        Residential Customers
                    </p>

                    <h2 class="text-3xl font-bold text-[#2B3D4F] mb-4 leading-snug">
                        Up to 20% Savings on Annual Maintenance Contracts
                    </h2>

                    <p class="text-sm text-gray-700 mb-1">Ideal for:</p>
                    <ul class="space-y-1 mb-4 list-disc list-inside">
                        <li class="text-sm text-gray-600">Villas</li>
                        <li class="text-sm text-gray-600">Boreys</li>
                        <li class="text-sm text-gray-600">Condominiums</li>
                        <li class="text-sm text-gray-600">Homes with Multiple Air Conditioners</li>
                    </ul>

                    <p class="text-sm text-gray-500">
                        Recommended for properties with 3 or more air conditioning units.
                    </p>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-1/2 order-2" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <img src="{{ asset('assets/images/maintenance/imag3.jpg') }}" alt="Exclusive Annual Contract Benefits"
                        class="w-full max-w-sm mx-auto object-contain rounded-2xl">
                </div>

            </div>
        </div>
    </div>

    {{-- Section: Commercial Customers --}}
    <div class="relative z-50 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col lg:flex-row lg:justify-between lg:items-start gap-10">

                <!-- Images -->
                <div class="w-full lg:w-1/2 order-1 flex gap-4" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('assets/images/maintenance/image5.jpg') }}" alt="Referral Reward Program"
                        class="w-1/2 object-contain rounded-2xl">
                    <img src="{{ asset('assets/images/maintenance/image4.jpg') }}" alt="Referral Reward Program"
                        class="w-1/2 object-contain rounded-2xl">
                </div>

                <!-- Text -->
                <div class="w-full lg:w-1/2 order-2" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <h3 class="text-xl font-bold text-[#F26522] mb-3">
                        Commercial Customers
                    </h3>

                    <h2 class="text-3xl font-bold text-[#2B3D4F] mb-4 leading-snug">
                        Up to 20% Savings on Annual Maintenance Contracts
                    </h2>

                    <p class="text-sm text-gray-700 mb-1">Ideal for:</p>
                    <ul class="space-y-1 mb-4 list-disc list-inside">
                        <li class="text-sm text-gray-600">Offices</li>
                        <li class="text-sm text-gray-600">Retail Stores</li>
                        <li class="text-sm text-gray-600">Restaurants</li>
                        <li class="text-sm text-gray-600">Cafés</li>
                        <li class="text-sm text-gray-600">Clinics</li>
                        <li class="text-sm text-gray-600">Commercial Buildings</li>
                    </ul>

                    <p class="text-sm text-gray-500">
                        Customized maintenance schedules available based on operational requirements.
                    </p>
                </div>

            </div>
        </div>
    </div>

    {{-- Section: Referral Reward Program --}}
    <div class="relative z-50 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col lg:flex-row lg:justify-between lg:items-start gap-10">

                <!-- Text -->
                <div class="w-full lg:w-1/2 order-1" data-aos="fade-right" data-aos-duration="1000">
                    <h3 class="text-xl font-bold text-[#F26522] mb-4">
                        Referral Reward Program
                    </h3>

                    <!-- Block 1 -->
                    <div class="mb-6">
                        <p class="text-sm font-semibold text-[#2B3D4F] mb-1">Share & Save</p>
                        <p class="text-sm text-gray-500 mb-3">
                            Existing customers can receive voucher for further self-use
                        </p>
                        <h2 class="text-3xl font-bold text-[#2B3D4F] mb-2 leading-snug">
                            $10 Service Coupon for Self-use
                        </h2>
                        <p class="text-sm text-gray-500">
                            Existed customers referred to the friends, family members or business
                            contact, the voucher will be worth
                        </p>
                    </div>

                    <!-- Block 2 -->
                    <div>
                        <h2 class="text-3xl font-bold text-[#2B3D4F] mb-2 leading-snug">
                            $15 Welcome Service Coupon
                        </h2>
                        <p class="text-sm text-gray-500">
                            A win-win benefit for both existing and new customers.
                        </p>
                    </div>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-1/2 order-2" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <img src="{{ asset('assets/images/maintenance/Daiku.jpg') }}" alt="Annual Maintenance"
                        class="w-full max-w-sm mx-auto object-contain rounded-2xl">
                </div>

            </div>
        </div>
    </div>
    <div class="relative z-50 py-16">
        <div class="max-w-6xl mx-auto px-4">

            {{-- Title Row --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mb-8">
                <h2 class="text-2xl font-bold text-[#F26522]">
                    Who Should Join Our AMC Program?
                </h2>
                <h2 class="text-2xl font-bold text-[#F26522]">
                    What Our AMC Includes
                </h2>
            </div>

            {{-- Content Row --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8" data-aos="fade-up" data-aos-duration="1000">

                {{-- Col 1: Residential + Commercial only --}}
                <div class="space-y-6">

                    {{-- Residential --}}
                    <div>
                        <h4 class="text-[#2B3D4F] font-bold text-sm mb-2">Residential Properties</h4>
                        <ul class="space-y-1">
                            @foreach (['Villas', 'Condominiums', 'Boreys', 'Multi-Unit Homes'] as $item)
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-3.5 h-3.5 text-[#F26522] shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <circle cx="10" cy="10" r="3" />
                                    </svg>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Commercial --}}
                    <div>
                        <h4 class="text-[#2B3D4F] font-bold text-sm mb-2">Commercial Properties</h4>
                        <ul class="space-y-1">
                            @foreach (['Offices', 'Retail Shops', 'Restaurants', 'Clinics', 'Showrooms'] as $item)
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-3.5 h-3.5 text-[#F26522] shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <circle cx="10" cy="10" r="3" />
                                    </svg>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>

                {{-- Col 2: AMC Includes + Corporate --}}
                <div class="space-y-6">

                    {{-- What AMC Includes --}}
                    <div class="space-y-2">
                        @foreach (['Scheduled Maintenance Visits', 'Air Filter Cleaning', 'Indoor Unit Cleaning', 'Outdoor Unit Inspection', 'Performance Testing', 'Refrigerant Level Inspection', 'Electrical Connection Check', 'System Condition Report', 'Preventive Maintenance Recommendations'] as $item)
                            <div class="flex items-center gap-2 text-sm text-gray-700">
                                <svg class="w-4 h-4 text-[#F26522] shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                {{ $item }}
                            </div>
                        @endforeach
                    </div>

                    {{-- Corporate Facilities --}}
                    <div>
                        <h4 class="text-[#2B3D4F] font-bold text-sm mb-2">Corporate Facilities</h4>
                        <ul class="space-y-1">
                            @foreach (['Commercial Buildings', 'Hotels', 'Banks', 'Educational Facilities', 'Industrial Facilities'] as $item)
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-3.5 h-3.5 text-[#F26522] shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <circle cx="10" cy="10" r="3" />
                                    </svg>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>

    {{-- Section: Gallery --}}
    {{-- Section: Gallery --}}
    <div class="bg-[#2B3D4F] pt-10">

        {{-- Title --}}
        <h2 class="text-center text-[#F26A27] text-xl md:text-2xl font-bold mb-8 px-4">
            Gallery
        </h2>

        {{-- White content strip with images --}}
        <div class="bg-white">
            <div class="w-full px-0">
                <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-0">

                    @foreach (['DSC03861.png', 'DSC03872.png', 'DSC03888.png', 'DSC03909.png', 'DSC03920.png', 'DSC03925.webp'] as $i => $img)
                        <div class="relative overflow-hidden aspect-square group" data-aos="fade-up"
                            data-aos-duration="800" data-aos-delay="{{ $i * 80 }}">

                            <!-- Image -->
                            <img src="{{ asset('assets/images/maintenance/' . $img) }}"
                                alt="Gallery {{ $i + 1 }}"
                                class="w-full h-full object-cover object-center transition duration-700 group-hover:scale-110">

                            <!-- Gray Overlay -->
                            <div
                                class="absolute inset-0 bg-gray-900/40 opacity-0 group-hover:opacity-100 transition duration-500">
                            </div>

                            <!-- Optional Icon -->
                            <div
                                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-500">
                                <div
                                    class="w-12 h-12 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center border border-white/40">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10l4.553-4.553a2 2 0 10-2.828-2.828L12.172 7.172M9 14l-4.553 4.553a2 2 0 102.828 2.828L11.828 16.828M8 16l8-8" />
                                    </svg>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        {{-- Bottom navy spacer --}}
        <div class="h-16"></div>
    </div>
    {{-- Section: FAQs --}}
    <section class="bg-white py-20 px-4 md:px-6 border-b border-slate-200" id="faqs-section">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                <span class="text-orange-500 text-xs font-extrabold uppercase tracking-wide block mb-2">Support
                    Center</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Frequently Asked Questions
                </h2>
                <div class="w-12 h-1 bg-orange-500 mx-auto mt-3 rounded-full"></div>
            </div>

            <div class="flex flex-col md:flex-row gap-4 items-start">

                <!-- Left Column -->
                <div class="flex flex-col gap-4 w-full md:w-1/2" data-aos="fade-right" data-aos-duration="900">

                    <!-- FAQ 1 -->
                    <div class="border border-orange-400 rounded-xl overflow-hidden">
                        <button type="button" onclick="toggleFaq(1)" id="faq-btn-1"
                            class="w-full flex justify-between items-center text-left px-5 py-4 bg-white font-semibold text-slate-800 text-sm cursor-pointer hover:bg-orange-50 transition-colors">
                            <span class="pr-4">Is the inspection really free?</span>
                            <span class="flex-shrink-0">
                                <svg id="faq-arrow-1" xmlns="http://www.w3.org/2000/svg"
                                    class="w-3.5 h-3.5 fill-orange-500 transition-transform duration-300"
                                    viewBox="0 0 16 16">
                                    <polygon points="12,8 4,2 4,14" />
                                </svg>
                            </span>
                        </button>
                        <div id="faq-answer-1" class="hidden bg-[#1e2a44] text-white border-t border-orange-300">
                            <div class="px-5 py-4 text-sm leading-relaxed text-slate-200 font-medium">
                                Yes. Daiku provides a complimentary air conditioning inspection and system assessment for
                                qualifying properties until 31st Dec 2026.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="border border-orange-400 rounded-xl overflow-hidden">
                        <button type="button" onclick="toggleFaq(3)" id="faq-btn-3"
                            class="w-full flex justify-between items-center text-left px-5 py-4 bg-white font-semibold text-slate-800 text-sm cursor-pointer hover:bg-orange-50 transition-colors">
                            <span class="pr-4">How much can I save with an annual maintenance contract?</span>
                            <span class="flex-shrink-0">
                                <svg id="faq-arrow-3" xmlns="http://www.w3.org/2000/svg"
                                    class="w-3.5 h-3.5 fill-orange-500 transition-transform duration-300"
                                    viewBox="0 0 16 16">
                                    <polygon points="12,8 4,2 4,14" />
                                </svg>
                            </span>
                        </button>
                        <div id="faq-answer-3" class="hidden bg-[#1e2a44] text-white border-t border-orange-300">
                            <div class="px-5 py-4 text-sm leading-relaxed text-slate-200 font-medium">
                                Residential and commercial customers can receive up to 20% savings, compared to standard
                                maintenance services.
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right Column -->
                <div class="flex flex-col gap-4 w-full md:w-1/2" data-aos="fade-left" data-aos-duration="900"
                    data-aos-delay="100">

                    <!-- FAQ 2 -->
                    <div class="border border-orange-400 rounded-xl overflow-hidden">
                        <button type="button" onclick="toggleFaq(2)" id="faq-btn-2"
                            class="w-full flex justify-between items-center text-left px-5 py-4 bg-white font-semibold text-slate-800 text-sm cursor-pointer hover:bg-orange-50 transition-colors">
                            <span class="pr-4">Who is eligible for the referral program?</span>
                            <span class="flex-shrink-0">
                                <svg id="faq-arrow-2" xmlns="http://www.w3.org/2000/svg"
                                    class="w-3.5 h-3.5 fill-orange-500 transition-transform duration-300"
                                    viewBox="0 0 16 16">
                                    <polygon points="12,8 4,2 4,14" />
                                </svg>
                            </span>
                        </button>
                        <div id="faq-answer-2" class="hidden bg-[#1e2a44] text-white border-t border-orange-300">
                            <div class="px-5 py-4 text-sm leading-relaxed text-slate-200 font-medium">
                                Current customers who successfully refer a new AMC customer receive a $10 service voucher
                                for the further self-use. If they provide the coupon to their friend, the voucher is worth
                                $15.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="border border-orange-400 rounded-xl overflow-hidden">
                        <button type="button" onclick="toggleFaq(4)" id="faq-btn-4"
                            class="w-full flex justify-between items-center text-left px-5 py-4 bg-white font-semibold text-slate-800 text-sm cursor-pointer hover:bg-orange-50 transition-colors">
                            <span class="pr-4">How often should air conditioners be serviced?</span>
                            <span class="flex-shrink-0">
                                <svg id="faq-arrow-4" xmlns="http://www.w3.org/2000/svg"
                                    class="w-3.5 h-3.5 fill-orange-500 transition-transform duration-300"
                                    viewBox="0 0 16 16">
                                    <polygon points="12,8 4,2 4,14" />
                                </svg>
                            </span>
                        </button>
                        <div id="faq-answer-4" class="hidden bg-[#1e2a44] text-white border-t border-orange-300">
                            <div class="px-5 py-4 text-sm leading-relaxed text-slate-200 font-medium">
                                For optimal performance, air conditioning systems should typically be inspected and serviced
                                every 3 to 6 months depending on usage conditions.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Ready to Help Banner Section --}}
    <div class="relative w-full bg-[#f8f7f7] my-16 overflow-hidden">
        <div class="relative w-full h-[400px] md:h-[460px] bg-cover bg-center"
            style="background-image: url({{ asset('assets/images/whychoos-us/image.png') }}); clip-path: polygon(0 15%, 100% 0, 100% 85%, 0 100%);">

            <div class="absolute inset-0 bg-[#44678a]/50 z-0"></div>

            <div
                class="relative z-20 w-full h-full max-w-5xl mx-auto px-6 flex flex-col items-center justify-center text-center space-y-6">

                <h2 class="text-white text-[16px] sm:text-[22px] md:text-[27px] font-normal leading-relaxed max-w-4xl"
                    data-aos="fade-up" data-aos-duration="1000">
                    Whether you need a new installation, maintenance support, or engineering consultancy, our team is ready
                    to help.
                </h2>

                <div data-aos="fade-up" data-aos-duration="1200" class="pt-2">
                    <a href="{{ route('contact') }}"
                        class="inline-block bg-[#F26A27] hover:bg-[#d85c20] text-white font-medium px-7 py-3 rounded transition shadow-md text-[13px]">
                        Request Quotation
                    </a>
                </div>

            </div>
        </div>
    </div>

    <script>
        function scrollToBook(planName) {
            const sect = document.getElementById('ac-booking-section');
            if (sect) {
                sect.scrollIntoView({
                    behavior: 'smooth'
                });
            }
            const selector = document.getElementById('form-care-plan');
            if (selector) {
                selector.value = planName;
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const bookingForm = document.getElementById('ac-booking-form');
            const bookingSuccess = document.getElementById('booking-success-indicator');
            if (bookingForm && bookingSuccess) {
                bookingForm.addEventListener('submit', (e) => {
                    e.preventDefault();
                    bookingSuccess.classList.remove('hidden');
                    bookingForm.querySelectorAll('input[type="text"], textarea').forEach(inp => {
                        inp.value = '';
                    });
                    setTimeout(() => {
                        bookingSuccess.classList.add('hidden');
                    }, 4000);
                });
            }
        });
    </script>

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
