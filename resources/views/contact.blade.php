@extends('layouts.app')

@section('title', 'Contact Us - Daiku MEP Solution')

@section('content')

<section class="absolute inset-0 z-40 flex items-start justify-center px-4 pt-[140px] sm:pt-[260px] md:pt-[400px] lg:pt-[600px] pb-8 overflow-y-auto pointer-events-none">
    <div class="w-full max-w-4xl pointer-events-auto" data-aos="fade-up" data-aos-duration="800">
        <form id="contact-form"
              action="{{ route('contact.submit') }}"
              method="POST"
              class="backdrop-blur-sm border border-[#3a7bd5]/30 rounded-2xl shadow-2xl p-4 sm:p-5 md:p-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 sm:gap-3">

                {{-- Name --}}
                <div>
                    <input type="text" name="name" id="name" placeholder="Name" required class="contact-input">
                    <p class="contact-error" data-for="name"></p>
                </div>

                {{-- Preferred Contact Time --}}
                <div class="relative">
                    <select name="preferred_contact_time" id="preferred_contact_time" required class="contact-select">
                        <option value="" disabled selected>Preferred Contact Time</option>
                        <option value="morning">Morning (8AM - 11AM)</option>
                        <option value="afternoon">Afternoon (12PM - 4PM)</option>
                        <option value="evening">Evening (5PM - 8PM)</option>
                        <option value="anytime">Anytime</option>
                    </select>
                    <span class="select-arrow"></span>
                </div>

                {{-- Company Name --}}
                <div>
                    <input type="text" name="company_name" id="company_name" placeholder="Company Name" class="contact-input">
                </div>

                {{-- Service Required --}}
                <div class="relative">
                    <select name="service_required" id="service_required" required class="contact-select">
                        <option value="" disabled selected>Service Required</option>
                        <option value="mechanical">Mechanical Systems</option>
                        <option value="electrical">Electrical Systems</option>
                        <option value="plumbing">Plumbing &amp; Fire Systems</option>
                        <option value="mep">MEP Design &amp; Consultancy</option>
                        <option value="ac_maintenance">AC Maintenance</option>
                        <option value="other">Other</option>
                    </select>
                    <span class="select-arrow"></span>
                </div>

                {{-- Location --}}
                <div>
                    <input type="text" name="location" id="location" placeholder="Location/Property Address" required class="contact-input">
                    <p class="contact-error" data-for="location"></p>
                </div>

                {{-- Number of AC --}}
                <div class="relative">
                    <select name="ac_units" id="ac_units" class="contact-select">
                        <option value="" disabled selected>Number of Air Conditioners</option>
                        <option value="1-2">1 - 2 units</option>
                        <option value="3-5">3 - 5 units</option>
                        <option value="6-10">6 - 10 units</option>
                        <option value="10+">More than 10 units</option>
                        <option value="not_applicable">Not Applicable</option>
                    </select>
                    <span class="select-arrow"></span>
                </div>

                {{-- Phone --}}
                <div>
                    <input type="tel" name="phone" id="phone" placeholder="Phone Number" required class="contact-input">
                    <p class="contact-error" data-for="phone"></p>
                </div>

                {{-- Notes --}}
                <div>
                    <input type="text" name="notes" id="notes" placeholder="Additional Notes" class="contact-input">
                </div>

            </div>

            {{-- Submit --}}
            <div class="mt-3 sm:mt-4">
                <button type="submit" id="contact-submit-btn"
                        class="w-full bg-[#F26B27] hover:bg-[#d85c1e] text-white font-semibold text-[13px] sm:text-[14px] py-2.5 sm:py-3 rounded-xl transition-colors duration-200 flex items-center justify-center gap-2">
                    <span id="contact-submit-label">Submit</span>
                    <svg id="contact-submit-spinner" class="hidden animate-spin h-4 w-4" viewBox="0 0 24 24" fill="none">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                    </svg>
                </button>
            </div>
        </form>
    </div>
</section>

<style>
    .contact-input,
    .contact-select {
        width: 100%;
        background: #f4f4f4;
        border: 1px solid #e2e2e2;
        border-radius: 8px;
        padding: 10px 12px;
        font-size: 13px;
        color: var(--body-text);
        transition: border-color .2s ease, box-shadow .2s ease, background .2s ease;
    }
    .contact-input::placeholder { color: #8a8f98; }
    .contact-input:focus,
    .contact-select:focus {
        outline: none;
        border-color: var(--orange);
        background: #ffffff;
        box-shadow: 0 0 0 3px rgba(242,107,39,.12);
    }
    .contact-select {
        appearance: none;
        -webkit-appearance: none;
        color: #8a8f98;
        cursor: pointer;
        padding-right: 36px;
    }
    .select-arrow {
        position: absolute;
        right: 14px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 11px;
        color: #2b3d4f;
        pointer-events: none;
    }
    .contact-error {
        color: #e03131;
        font-size: 11px;
        margin-top: 4px;
        min-height: 14px;
    }
    .contact-input.field-error,
    .contact-select.field-error {
        border-color: #e03131 !important;
        background: #fff5f5 !important;
    }

    /* Extra-small phones: tighten further */
    @media (max-width: 380px) {
        .contact-input, .contact-select { font-size: 12px; padding: 9px 10px; }
    }
</style>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contact-form');
    if (!form) return;
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        window.location.href = 'https://t.me/+85598954328';
    });
});
</script>
@endpush