@extends('layouts.app')
@section('css')
@endsection

@section('content')

{{-- Section 1: Image Left, Text Right --}}
<section class="relative z-50 py-16 
max-[1024px]:mt-[9rem] max-[640px]:mt-[-10rem]  max-[620px]:mt-[-7rem] max-[490px]:mt-[-13rem]">
    <div class="relative">
        {{-- Title Box --}}
        <div class="  bottom-10 left-1/2 -translate-x-1/2 z-30 bg-white px-8 py-4 rounded">
            <h1 class="text-3xl font-bold text-[#F26A27]">
                MEP Design & Consultancy
            </h1>
        </div>

    </div>
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-8">
            <div class="md:w-1/2">
                <img src="{{ asset('assets/images/service/mep.png') }}"
                    alt="Plumbing & Fire Systems"
                    class="w-full h-80 object-cover  shadow-lg">

            </div>
            <div class="md:w-1/2">
                <h1 class="text-lg font-bold text-[#F26A27] mb-3">MEP Design & Consultancy</h1>
                <p class="text-lg  text-black mb-3">Engineering Expertise from Concept to Completion</p>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Daiku provides professional MEP design and consultancy services that help clients optimize building performance, system efficiency, and project outcomes. Our experienced engineers support project planning, engineering design, technical evaluation, value engineering, and project management throughout every stage of development.
                </p>
            </div>
        </div>
        {{-- Section 2: Text Left, Image Right --}}
        <div class="max-w-6xl mx-auto px-4 mt-7">
            <div class="flex flex-col md:flex-row gap-8">
                <div class="md:w-1/2">


                    <h4 class="text-[#F26A27] font-bold text-sm mt-5 mb-2">Our Consultancy Services </h4>
                        <ul class="list-disc list-inside text-slate-700 text-sm space-y-1">
                            <li>MEP System Design</li>
                            <li>Technical Consultancy</li>
                            <li>Engineering Evaluation</li>
                            <li>Value Engineering</li>
                            <li>Project Planning</li>
                            <li>Project Management Support</li>
                            <li>System Optimization</li>
                            <li>Engineering Documentation</li>
                            <li>Central Gas System (LPG)</li>

                            </li>
                        </ul>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('assets/images/service/image.png') }}"
                        alt="Electrical Systems"
                        class="w-full h-80 object-cover  shadow-lg">

                </div>
 
            </div>
        </div>
</section>
{{-- Industries We Serve --}}
<div class="w-full max-w-5xl mx-auto px-4 mt-10 mb-16 text-center" data-aos="fade-up">
    <h2 class="text-[20px] md:text-[26px] font-[700] mb-10" style="color:#F26A27; text-decoration:none;">
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

        @foreach ($industries as $industry)
        <div class="rounded-md p-6 flex flex-col items-center justify-center"
            style="border:1px solid #F26A27; text-decoration:none;">
            <img src="{{ asset($industry['icon']) }}" alt="{{ $industry['title'] }}"
                class="w-10 h-10 mb-3" style="text-decoration:none;">
            <h3 class="text-[14px] font-[700] mb-1" style="color:#F26A27; text-decoration:none;">
                {{ $industry['title'] }}
            </h3>
            <p class="text-[12px] leading-snug" style="color:#374151; text-decoration:none;">
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
    <img
        src="{{ asset('assets/images/whychoos-us/Mask1.png') }}"
        alt="Daiku Engineer"
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
    <div class="absolute inset-0 w-full h-full flex items-center md:hidden z-[1] pointer-events-none overflow-hidden bg-[#F26A27]">
        <img
            src="{{ asset('assets/images/whychoos-us/mask2.png') }}"
            alt="Daiku Engineer"
            class="absolute h-[100%] w-auto max-w-[90%] left-[-20px] top-3 " />
    </div>

    {{-- ── CONTENT ── --}}
    <div class="relative z-10 w-full
                px-4 sm:px-6 md:px-10 lg:px-16 xl:px-20
                pt-8 sm:pt-10 md:pt-14 lg:pt-16 xl:pt-20
                pb-16 sm:pb-20 md:pb-24 lg:pb-28 xl:pb-32">

        {{-- Title --}}
        <h2 class=" text-right font-bold leading-tight text-[#1F2D3D] md:pr-[30%]
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
                ['num'=>'01','title'=>'Experienced Engineering Team.',
                'desc'=>'Professional engineers and technicians with extensive project experience.'],
                ['num'=>'02','title'=>'Quality & Safety Standards',
                'desc'=>'Committed to industry best practices and safety compliance.'],
                ['num'=>'03','title'=>'Reliable Project Delivery',
                'desc'=>'On-time execution and responsive project management.'],
                ['num'=>'04','title'=>'Long-Term Maintenance Support',
                'desc'=>'Comprehensive maintenance services to maximize system performance.'],
                ];
                @endphp

                <div class="grid grid-cols-2 md:grid-cols-2
                            gap-x-3 sm:gap-x-4 md:gap-x-6 lg:gap-x-8 xl:gap-x-10
                            gap-y-5 sm:gap-y-6 md:gap-y-7 lg:gap-y-9 xl:gap-y-10">
                    @foreach ($reasons as $r)
                    <div>
                        <p class="font-extrabold leading-none text-[#1F2D3D] mb-1
                                  text-[16px] sm:text-[18px] md:text-[22px] lg:text-[26px] xl:text-[30px]">
                            {{ $r['num'] }}
                        </p>
                        <p class="font-bold text-white leading-snug mb-1
                                  text-[10px] sm:text-[11px] md:text-[13px] lg:text-[14px] xl:text-[15px]">
                            {{ $r['title'] }}
                        </p>
                        <p class="text-white/85 leading-relaxed
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
<section class="bg-white py-10 px-4 md:px-6 border-b border-slate-200" id="faqs-section">
    <div class="max-w-5xl mx-auto">

        <!-- Heading -->
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">
                Frequently Asked Questions
            </h2>

            <div class="w-12 h-1 bg-orange-500 mx-auto mt-3 rounded-full"></div>
        </div>

        <!-- FAQ List -->
        <div class="space-y-3">

            <!-- FAQ 1 -->
            <div class="border border-orange-400 rounded-xl overflow-hidden">
                <button type="button"
                    onclick="toggleFaq(1)"
                    class="w-full flex justify-between items-center text-left px-5 py-3 bg-white font-semibold text-slate-800 text-sm hover:bg-orange-50 transition">

                    <span>When should MEP consultants be involved in a project?</span>

                    <svg id="faq-arrow-1"
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 fill-orange-500 transition-transform duration-300"
                        viewBox="0 0 16 16">
                        <polygon points="12,8 4,2 4,14" />
                    </svg>
                </button>

                <div id="faq-answer-1" class="hidden bg-[#1e2a44]">
                    <div class="px-5 py-4 text-sm leading-relaxed text-white">
                        MEP consultants should be involved during the early planning and design stages of a project. Early coordination helps prevent design conflicts, reduce construction changes, optimize costs, and improve overall project efficiency.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="border border-orange-400 rounded-xl overflow-hidden">
                <button type="button"
                    onclick="toggleFaq(2)"
                    class="w-full flex justify-between items-center text-left px-5 py-3 bg-white font-semibold text-slate-800 text-sm hover:bg-orange-50 transition">

                    <span>What is MEP Design and why is it important?</span>

                    <svg id="faq-arrow-2"
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 fill-orange-500 transition-transform duration-300"
                        viewBox="0 0 16 16">
                        <polygon points="12,8 4,2 4,14" />
                    </svg>
                </button>

                <div id="faq-answer-2" class="hidden bg-[#1e2a44]">
                    <div class="px-5 py-4 text-sm leading-relaxed text-white">
                        MEP Design refers to the planning and engineering of Mechanical, Electrical, and Plumbing systems within a building. Proper MEP design helps ensure safety, energy efficiency, operational performance, and long-term cost savings throughout the building lifecycle.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="border border-orange-400 rounded-xl overflow-hidden">
                <button type="button"
                    onclick="toggleFaq(3)"
                    class="w-full flex justify-between items-center text-left px-5 py-3 bg-white font-semibold text-slate-800 text-sm hover:bg-orange-50 transition">

                    <span>Can Daiku provide MEP design for new construction projects?</span>

                    <svg id="faq-arrow-3"
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 fill-orange-500 transition-transform duration-300"
                        viewBox="0 0 16 16">
                        <polygon points="12,8 4,2 4,14" />
                    </svg>
                </button>

                <div id="faq-answer-3" class="hidden bg-[#1e2a44]">
                    <div class="px-5 py-4 text-sm leading-relaxed text-white">
                        Yes. Daiku provides MEP design and consultancy services for new commercial, industrial, hospitality, healthcare, retail, and residential developments throughout Cambodia.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="border border-orange-400 rounded-xl overflow-hidden">
                <button type="button"
                    onclick="toggleFaq(4)"
                    class="w-full flex justify-between items-center text-left px-5 py-3 bg-white font-semibold text-slate-800 text-sm hover:bg-orange-50 transition">

                    <span>Can Daiku support renovation and retrofit projects?</span>

                    <svg id="faq-arrow-4"
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 fill-orange-500 transition-transform duration-300"
                        viewBox="0 0 16 16">
                        <polygon points="12,8 4,2 4,14" />
                    </svg>
                </button>

                <div id="faq-answer-4" class="hidden bg-[#1e2a44]">
                    <div class="px-5 py-4 text-sm leading-relaxed text-white">
                        Yes. Our team can assess existing building systems, identify improvement opportunities, and develop MEP solutions for renovations, upgrades, and facility expansions.
                    </div>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="border border-orange-400 rounded-xl overflow-hidden">
                <button type="button"
                    onclick="toggleFaq(5)"
                    class="w-full flex justify-between items-center text-left px-5 py-3 bg-white font-semibold text-slate-800 text-sm hover:bg-orange-50 transition">

                    <span>Can Daiku coordinate with architects and structural engineers?</span>

                    <svg id="faq-arrow-5"
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 fill-orange-500 transition-transform duration-300"
                        viewBox="0 0 16 16">
                        <polygon points="12,8 4,2 4,14" />
                    </svg>
                </button>

                <div id="faq-answer-5" class="hidden bg-[#1e2a44]">
                    <div class="px-5 py-4 text-sm leading-relaxed text-white">
                        Yes. We work closely with architects, structural engineers, project managers, and contractors to ensure all building systems are properly integrated and coordinated.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- Ready to Help Banner Section --}}
<div class="relative w-full bg-[#f8f7f7] my-16 overflow-hidden">

    {{-- Slanted Inner Image Container with Corner Cuts --}}
    <div class="relative w-full h-[400px] md:h-[460px] bg-cover bg-center"
        style="background-image: url({{ asset('assets/images/whychoos-us/image.png') }}); clip-path: polygon(0 15%, 100% 0, 100% 85%, 0 100%);">

        {{-- Deep Blue/Teal Atmospheric Overlay --}}
        <div class="absolute inset-0 bg-[#44678a]/50 z-0"></div>

        {{-- Content Elements --}}
        <div class="relative z-20 w-full h-full max-w-5xl mx-auto px-6 flex flex-col items-center justify-center text-center space-y-6">

            {{-- Section Heading from Image --}}
            <h2 class="text-white text-[16px] sm:text-[22px] md:text-[27px] font-normal leading-relaxed max-w-4xl"
                data-aos="fade-up" data-aos-duration="1000">
                Whether you need a new installation, maintenance support, or engineering consultancy, our team is ready to help.
            </h2>

            {{-- Bright Orange Request Button --}}
            <div data-aos="fade-up" data-aos-duration="1200" class="pt-2">
                <a href="{{ route('contact') }}" class="inline-block bg-[#F26A27] hover:bg-[#d85c20] text-white font-medium px-7 py-3 rounded transition shadow-md text-[13px]">
                    Request Quotation
                </a>
            </div>

        </div>
    </div>
</div>

</div>
<script>
    const filterButtons = document.querySelectorAll(".filter-btn");
    const cards = document.querySelectorAll(".project-card");

    filterButtons.forEach(button => {
        button.addEventListener("click", () => {
            const filter = button.dataset.filter;

            // Active button style
            filterButtons.forEach(btn => btn.classList.remove("active"));
            button.classList.add("active");

            cards.forEach(card => {
                const category = card.dataset.category;

                if (filter === "all" || category === filter) {
                    card.classList.remove("hidden");
                } else {
                    card.classList.add("hidden");
                }
            });
        });
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
            // Close it
            answer.classList.add('hidden');
            arrow.style.transform = 'rotate(0deg)';
            btn.classList.remove('text-orange-500');
            btn.classList.add('text-slate-800');
        } else {
            // Open it
            answer.classList.remove('hidden');
            arrow.style.transform = 'rotate(90deg)';
            btn.classList.remove('text-slate-800');
            btn.classList.add('text-orange-500');
        }
    }
</script>
@endsection