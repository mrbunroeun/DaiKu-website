@extends('layouts.app')

@section('title', 'AC Maintenance Plans - Daiku MEP Cambodia')

@section('content')

{{-- Card 1: Image Left --}}
<div class="relative z-50 py-16 border border-gray-200 rounded-lg flex flex-col md:flex-row overflow-hidden max-w-3xl mx-auto mt-6 bg-gray-50">
    <div class="md:w-2/5">
        <img src="{{ asset('assets/images/photo/Frame5.png') }}" alt="Mechanical Systems" class="w-full h-full object-cover">
    </div>
    <div class="md:w-3/5 p-6 flex flex-col justify-center bg-gray-50">
        <h3 class="text-base font-bold text-gray-800 mb-3">Mechanical Systems & HVAC</h3>
        <p class="text-slate-500 text-sm leading-relaxed mb-6">
            Articles covering HVAC systems, ventilation, VRF systems, ducting works, energy efficiency, and mechanical engineering solutions for commercial and residential buildings.
        </p>
        <a href="{{ route('insights.mechanical') }}#page-title"
           class="inline-block w-fit px-8 py-3 bg-[#F26A27] text-white text-sm font-semibold rounded shadow hover:bg-orange-600 transition-colors duration-200">
            View Insights
        </a>
    </div>
</div>

{{-- Card 2: Image Right --}}
<div class="relative z-50 border border-gray-200 rounded-lg flex flex-col md:flex-row-reverse overflow-hidden max-w-3xl mx-auto mt-6 bg-gray-50">
    <div class="md:w-2/5">
        <img src="{{ asset('assets/images/photo/Frame5.png') }}" alt="Electrical Systems" class="w-full h-full object-cover">
    </div>
    <div class="md:w-3/5 p-6 flex flex-col justify-center bg-gray-50">
        <h3 class="text-base font-bold text-gray-800 mb-3">Electrical Systems</h3>
        <p class="text-slate-500 text-sm leading-relaxed mb-6">
            Insights on electrical installation, power distribution, lighting systems, generators, low-voltage systems, and electrical safety for modern buildings.
        </p>
        <a href="{{ route('insights.electrical') }}#page-title"
           class="inline-block w-fit px-8 py-3 bg-[#F26A27] text-white text-sm font-semibold rounded shadow hover:bg-orange-600 transition-colors duration-200">
            View Insights
        </a>
    </div>
</div>

{{-- Card 3: Image Left --}}
<div class="border border-gray-200 rounded-lg flex flex-col md:flex-row overflow-hidden max-w-3xl mx-auto mt-6 bg-gray-50">
    <div class="md:w-2/5">
        <img src="{{ asset('assets/images/photo/Frame5.png') }}" alt="Plumbing & Fire" class="w-full h-full object-cover">
    </div>
    <div class="md:w-3/5 p-6 flex flex-col justify-center bg-gray-50">
        <h3 class="text-base font-bold text-gray-800 mb-3">Plumbing & Fire Protection Systems</h3>
        <p class="text-slate-500 text-sm leading-relaxed mb-6">
            Expert resources on water supply systems, drainage, fire detection, sprinkler systems, FM-200 solutions, and fire safety compliance.
        </p>
        <a href="{{ route('insights.plumbing') }}#page-title"
           class="inline-block w-fit px-8 py-3 bg-[#F26A27] text-white text-sm font-semibold rounded shadow hover:bg-orange-600 transition-colors duration-200">
            View Insights
        </a>
    </div>
</div>

{{-- Card 4: Image Right --}}
<div class="border border-gray-200 rounded-lg flex flex-col md:flex-row-reverse overflow-hidden max-w-3xl mx-auto mt-6 bg-gray-50">
    <div class="md:w-2/5">
        <img src="{{ asset('assets/images/photo/Frame5.png') }}" alt="MEP Design" class="w-full h-full object-cover">
    </div>
    <div class="md:w-3/5 p-6 flex flex-col justify-center bg-gray-50">
        <h3 class="text-base font-bold text-gray-800 mb-3">MEP Design & Consultancy</h3>
        <p class="text-slate-500 text-sm leading-relaxed mb-6">
            Professional guidance on MEP planning, engineering design, project coordination, value engineering, and building system optimization.
        </p>
        <a href="{{ route('insights.mep') }}#page-title"
           class="inline-block w-fit px-8 py-3 bg-[#F26A27] text-white text-sm font-semibold rounded shadow hover:bg-orange-600 transition-colors duration-200">
            View Insights
        </a>
    </div>
</div>

{{-- Card 5: Image Left --}}
<div class="border border-gray-200 rounded-lg flex flex-col md:flex-row overflow-hidden max-w-3xl mx-auto mt-6 bg-gray-50">
    <div class="md:w-2/5">
        <img src="{{ asset('assets/images/photo/Frame5.png') }}" alt="Facility Maintenance" class="w-full h-full object-cover">
    </div>
    <div class="md:w-3/5 p-6 flex flex-col justify-center bg-gray-50">
        <h3 class="text-base font-bold text-gray-800 mb-3">Facility Maintenance & Operations</h3>
        <p class="text-slate-500 text-sm leading-relaxed mb-6">
            Practical advice on preventive maintenance, annual maintenance contracts, energy savings, and air conditioning system performance.
        </p>
        <a href="{{ route('insights.facility') }}#page-title"
           class="inline-block w-fit px-8 py-3 bg-[#F26A27] text-white text-sm font-semibold rounded shadow hover:bg-orange-600 transition-colors duration-200">
            View Insights
        </a>
    </div>
</div>

{{-- Ready to Help Banner Section --}}
<div class="relative w-full bg-[#f8f7f7] my-16 overflow-hidden">
    <div class="relative w-full h-[400px] md:h-[460px] bg-cover bg-center"
        style="background-image: url({{ asset('assets/images/whychoos-us/image.png') }}); clip-path: polygon(0 15%, 100% 0, 100% 85%, 0 100%);">
        <div class="absolute inset-0 bg-[#44678a]/50 z-0"></div>
        <div class="relative z-20 w-full h-full max-w-5xl mx-auto px-6 flex flex-col items-center justify-center text-center space-y-6">
            <h2 class="text-white text-[16px] sm:text-[22px] md:text-[27px] font-normal leading-relaxed max-w-4xl"
                data-aos="fade-up" data-aos-duration="1000">
                Whether you need a new installation, maintenance support, or engineering consultancy, our team is ready to help.
            </h2>
            <div data-aos="fade-up" data-aos-duration="1200" class="pt-2">
                <a href="{{ route('contact') }}" class="inline-block bg-[#F26A27] hover:bg-[#d85c20] text-white font-medium px-7 py-3 rounded transition shadow-md text-[13px]">
                    Request Quotation
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function scrollToBook(planName) {
    const sect = document.getElementById('ac-booking-section');
    if (sect) sect.scrollIntoView({ behavior: 'smooth' });
    const selector = document.getElementById('form-care-plan');
    if (selector) selector.value = planName;
}

document.addEventListener('DOMContentLoaded', () => {
    const bookingForm = document.getElementById('ac-booking-form');
    const bookingSuccess = document.getElementById('booking-success-indicator');
    if (bookingForm && bookingSuccess) {
        bookingForm.addEventListener('submit', (e) => {
            e.preventDefault();
            bookingSuccess.classList.remove('hidden');
            bookingForm.querySelectorAll('input[type="text"], textarea').forEach(inp => inp.value = '');
            setTimeout(() => bookingSuccess.classList.add('hidden'), 4000);
        });
    }
});

function toggleFaq(id) {
    const answer = document.getElementById('faq-answer-' + id);
    const arrow  = document.getElementById('faq-arrow-' + id);
    const btn    = document.getElementById('faq-btn-' + id);
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