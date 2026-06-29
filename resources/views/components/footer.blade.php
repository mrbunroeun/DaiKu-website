<style>
.footer-wrapper {
    position: relative;
    overflow: hidden;
    width: 100%;
    background-position: top;
    background-color: #2b3d4f;
}
</style>

<section class="footer-wrapper">

    {{-- Background Image --}}
    <img
        src="{{ asset('assets/images/footer/Group34.png') }}"
        alt=""
        class="absolute -top-[20%] left-0 w-full h-[200%] object-cover object-top z-[5] pointer-events-none opacity-90">

    {{-- Content --}}
    <div class="relative z-10 w-full max-w-6xl mx-auto px-4 md:px-6 pt-4 md:pt-32 pb-10">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-10">

            {{-- ===== CONTACT US ===== --}}
            <div class="text-white">
                <h2 class="text-[18px] md:text-[22px] font-bold mb-4 md:mb-6">Contact Us</h2>

                {{-- Phone --}}
                <p class="mb-3 font-medium text-[13px] md:text-[15px]">098 954 328</p>

                {{-- Email pill --}}
                <a href="#"
                   onclick="window.open('https://mail.google.com/mail/?view=cm&fs=1&to=daikumep@gmail.com&su=Contact%20from%20Website', '_blank'); return false;"
                   class="inline-flex items-center gap-2 px-3 py-1.5 mb-4 rounded-full border border-[#F26A27]/50 bg-white/5 hover:bg-[#F26A27]/20 transition cursor-pointer">
                    <span class="w-5 h-5 flex items-center justify-center rounded-full bg-[#F26A27] flex-shrink-0">
                        <i class="fa-solid fa-envelope text-white" style="font-size: 9px;"></i>
                    </span>
                    <span class="text-white font-medium text-[13px]">daikumep@gmail.com</span>
                </a>

                {{-- Address --}}
                <p class="leading-relaxed mb-4 text-[13px] md:text-[14px]">
                    #99, Street 76CC, Trapiang Thleoung 1 Village,<br>
                    Chom Chao 1 Commune,<br>
                    Pur Senchey District,<br>
                    Phnom Penh
                </p>
                        {{-- Social Icons --}}
        <div class="flex flex-wrap gap-3 mt-5">
            <a href="https://www.facebook.com/people/DAIKU-AirCon-Maintenance-Service/61590244750710/"
                class="w-10 h-10 rounded-full bg-white text-[#F26A27] flex items-center justify-center hover:bg-orange-100 transition"
                title="Facebook" target="_blank" rel="noopener">
                <i class="fa-brands fa-facebook-f text-lg"></i>
            </a>

            <a href="https://www.tiktok.com/@daiku009"
                class="w-10 h-10 rounded-full bg-white text-[#F26A27] flex items-center justify-center hover:bg-orange-100 transition"
                title="TikTok" target="_blank" rel="noopener">
                <i class="fa-brands fa-tiktok text-lg"></i>
            </a>

            <a href="https://www.linkedin.com/company/daiku-aircon-maintenance-services/"
                class="w-10 h-10 rounded-full bg-white text-[#F26A27] flex items-center justify-center hover:bg-orange-100 transition"
                title="LinkedIn" target="_blank" rel="noopener">
                <i class="fa-brands fa-linkedin-in text-lg"></i>
            </a>

            <a href="https://t.me/+85598954328"
                class="w-10 h-10 rounded-full bg-white text-[#F26A27] flex items-center justify-center hover:bg-orange-100 transition"
                title="Telegram" target="_blank" rel="noopener">
                <i class="fa-brands fa-telegram text-lg"></i>
            </a>

            <a href="https://www.youtube.com/@DAIKUAirConMaintenanceServices"
                class="w-10 h-10 rounded-full bg-white text-[#F26A27] flex items-center justify-center hover:bg-orange-100 transition"
                title="YouTube" target="_blank" rel="noopener">
                <i class="fa-brands fa-youtube text-lg"></i>
            </a>
            <a href="https://www.instagram.com/daikuairconkh/?fbclid=IwY2xjawSsMIxleHRuA2FlbQIxMQBicmlkETFCcjdLTmthTVE3ZDA4RWxpc3J0YwZhcHBfaWQBMAABHhHcx6pU7FNiyVYSdWYWPNHG1Y3VKiohOBuaJzmCG7FYnY70fvgCkp-KQXnC_aem_R2v3mNUV5VlS6Id0iKQggA"
            class="w-10 h-10 rounded-full bg-white text-[#F26A27] flex items-center justify-center hover:bg-orange-100 transition"
            title="Instagram" target="_blank" rel="noopener">
            <i class="fa-brands fa-instagram text-lg"></i>
        </a>
        </div>
            </div>

            {{-- ===== INFORMATION ===== --}}
            <div class="text-white">
                <h2 class="text-[18px] md:text-[22px] font-bold mb-4 md:mb-6">Navigation Bars</h2>
                <ul class="space-y-2 md:space-y-3 text-[13px] md:text-[14px]">
                    <li><a href="{{ route('home') }}" class="hover:underline hover:text-[#F26A27] transition">Hom Page</a></li>
                    <li><a href="{{ route('about') }}" class="hover:underline hover:text-[#F26A27] transition">About Us</a></li>
                    <li>
                        <a href="{{ route('services.mechanical') }}" class="hover:underline hover:text-[#F26A27] transition">Services</a>
                        <ul class="mt-2 ml-4 space-y-1.5 text-white/75 text-[12px] md:text-[13px]">
                            <li><a href="{{ route('services.mechanical') }}" class="hover:underline hover:text-[#F26A27] transition">Mechanical Systems</a></li>
                            <li><a href="{{ route('services.electrical') }}" class="hover:underline hover:text-[#F26A27] transition">Electrical Systems</a></li>
                            <li><a href="{{ route('services.plumbing') }}" class="hover:underline hover:text-[#F26A27] transition">Plumbing &amp; Fire Systems</a></li>
                            <li><a href="{{ route('services.mep') }}" class="hover:underline hover:text-[#F26A27] transition">MEP Design &amp; Consultancy</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('maintenance') }}" class="hover:underline hover:text-[#F26A27] transition">AC Maintenance</a></li>
                    <li><a href="{{ route('project') }}" class="hover:underline hover:text-[#F26A27] transition">Projects</a></li>
                    <li><a href="{{ route('insights') }}" class="hover:underline hover:text-[#F26A27] transition">Insights</a></li>
                    <li><a href="{{ route('career') }}" class="hover:underline hover:text-[#F26A27] transition">Career</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:underline hover:text-[#F26A27] transition">Contact Us</a></li>
                </ul>
            </div>

            {{-- ===== DAIKU MEP + MAP ===== --}}
            <div class="text-white text-[13px] md:text-[14px] sm:col-span-2 lg:col-span-1">
                <h2 class="text-[18px] md:text-[22px] font-bold mb-4 md:mb-5">Daiku MEP</h2>
                <p class="leading-relaxed mb-5 text-white/90">
                    At present, Daiku MEP Solution operate with highly skilled and experienced
                    in construction and management practices, with the ability to carry out
                    industrial, residential and commercial building projects.
                </p>
                <iframe
                    class="w-full h-44 md:h-48 rounded-xl"
                    src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d2328.4546285034908!2d104.8578922908163!3d11.537621757142025!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTHCsDMyJzE0LjYiTiAxMDTCsDUxJzI0LjAiRQ!5e0!3m2!1sen!2skh!4v1765643084561!5m2!1sen!2skh"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </div>

    {{-- ===== COPYRIGHT ===== --}}
    <div class="relative z-10 border-t border-white/20 mt-8 py-4 text-center text-white text-[12px] md:text-sm">
        Daiku MEP Solution Co.,Ltd &copy; {{ date('Y') }} All Rights Reserved
    </div>

</section>