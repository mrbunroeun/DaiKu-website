@extends('layouts.app')

@section('title', 'Completed Projects Portfolio - Daiku MEP Cambodia')
@section('css')
    <style>
        .whyus_clip {
            clip-path: polygon(35% 12%, 100% 0, 100% 100%, 0 100%, 0 0);
        }

        

        .service_bg {
            background-image: url('assets/images/services/service-bg.png');
        }

        .new_swiper .swiper {
            width: 80%;
            height: 50%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .new_swiper .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 700px;
            height: 100%;
            filter: blur(2px);
        }

        .new_swiper .swiper {
            margin-inline: initial;
            padding-bottom: 5rem !important;
            padding-top: 4rem !important;
        }


        .new_swiper .swiper-slide-active {
            filter: blur(0px);
        }

        .new_swiper .swiper-slide img {
            display: block;
            width: 100%;
        }

        .new_swiper .swiper-text {
            transition: opacity 0.5s ease, transform 0.5s ease;
            transform: translateY(20px);
        }

        .new_swiper .swiper-pagination .swiper-pagination-bullet {
            background-color: #F26A27;
            width: 10px;
            height: 10px;
            border-radius: 10px;
            position: relative;
            top: -50px;
        }

        .new_swiper .swiper-pagination .swiper-pagination-bullet-active {
            background-color: #F26A27;
            width: 10px;
            height: 10px;
            border-radius: 10px;
        }

        .new_swiper .swiper-button-prev::after,
        .new_swiper .swiper-button-next::after {
            content: "";
        }

        .new_swiper .swiper-button-prev,
        .new_swiper .swiper-button-next {
            top: initial;
            top: 30px;
            border-radius: 4px;
            color: white;
        }

        .new_swiper .swiper-button-prev {
            left: 10px;
        }

        .new_swiper .swiper-button-next {
            right: 10px;
        }


        @media screen and (max-width: 1280px) {
            .new_swiper .swiper-slide {
                width: 640px;
                height: 100%;
            }
        }

        @media screen and (max-width: 768px) {
            .service_bg {
                background: #1c408a;
                clip-path: polygon(0 10%, 100% 0, 100% 90%, 0% 100%);
            }
        }

        @media screen and (max-width: 640px) {
            .service_swiper .swiper-slide {
                width: 190px;
                height: 200px;
            }

            .new_swiper .swiper-slide {
                width: 100%;
                height: 100%;
            }
        }

        @media screen and (max-width: 1023px) {
            .whyus_clip {
                clip-path: polygon(0 2%, 100% 0, 100% 98%, 0% 100%);
            }
        }

        .clip {
            clip-path: polygon(82% 0, 100% 40%, 100% 100%, 0 100%, 0 0);
        }
    </style>
@endsection

@section('content')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const swiperEl = document.querySelector('#our_experience');
    if (!swiperEl) return;

    function updateHashFromActiveSlide() {
        const activeSlide = swiperEl.querySelector('.swiper-slide-active');
        if (!activeSlide) return;
        const img = activeSlide.querySelector('.project-img');
        if (img && img.dataset.project) {
            window.history.replaceState(
                { project: img.dataset.project },
                '',
                '#' + img.dataset.project
            );
        }
    }

    // Watch the wrapper for class changes on its slides (Swiper toggles swiper-slide-active)
    const wrapper = swiperEl.querySelector('.swiper-wrapper');
    if (wrapper) {
        const observer = new MutationObserver(updateHashFromActiveSlide);
        wrapper.querySelectorAll('.swiper-slide').forEach(function (slide) {
            observer.observe(slide, { attributes: true, attributeFilter: ['class'] });
        });
    }

    // Set hash for whichever slide is active on load
    updateHashFromActiveSlide();

    // Keep click-to-jump working too
    document.querySelectorAll('#our_experience .project-img').forEach(function (img) {
        img.style.cursor = 'pointer';
    });
});
</script>
<section class="relative -top-[40px] md:-top-[130px] bg-[#ffffff] min-h-screen whyus_clip">

        <img src="{{ asset('assets/images/line_career.png') }}" alt="" class="w-full hidden lg:block pt-4 xl:pt-10"
            data-aos="fade-up" data-aos-duration="1000">

        <div class="relative flex flex-col justify-center items-center new_swiper overflow-hidden mt-20" data-aos="fade-up"
            data-aos-duration="1000">
            <div class="text-center pt-4" data-aos="fade-up" data-aos-duration="1500">
                <h1 class="text-start text-[20px] md:text-[30px] text-[#2b3d4f] font-[700] py-10 max-w-7xl mx-auto px-4 leading-none">Project Credentials</h1>
            </div>


            <!-- Swiper -->
            <div class="swiper mySwiper" id="our_experience">
                <div class="swiper-wrapper">

                    <div class="swiper-slide" id="item1">
                        <!-- IMAGE SECTION -->
                        <div class="relative h-[250px] md:h-[500px]">
                            <!-- Background Image -->
                            <img src="{{ asset('assets/images/DaikuMEP/01.Sofitel/sofitel-1.png') }}"
                            class="absolute inset-0 w-full h-full object-cover project-img"
                            data-project="sofitel-phnom-penh-phokeethra"
                            alt="Project Image">

                            <!-- ORANGE OVERLAY (BOTTOM LEFT) -->
                            <div class="clip absolute bottom-0 left-0
                                        md:w-1/2 w-full
                                        bg-black/50
                                        text-white
                                        md:px-10 px-2 py-4">

                                <div class="space-y-1 text-[12px] leading-snug">
                                        <p>
                                            <span class="font-bold">Project Name:</span> Sofitel Phnom Penh Phokeethra – 5 Stars Luxury Hotel
                                        </p>
                                        <p>
                                            <span class="font-bold">Owner:</span> La Coupole Restaurant Glass House and Pool Bar
                                        </p>
                                        <p>
                                            <span class="font-bold">Contract Period:</span> 1 Year
                                        </p>
                                        <p>
                                            <span class="font-bold">Location:</span> Phnom Penh, Cambodia
                                        </p>
                                    </div>
                            </div>
                        </div>
                        <div class="text-white bg-[#F26A27] py-4 
                        h-[64vh]              /* Mobile */
                        md:h-[48vh]           /* Tablet */
                        lg:h-[36vh]           /* Laptop 1024–1280 */
                        xl:h-[28vh]           /* Laptop 1440px */
                        2xl:h-[24vh]          /* Desktop 1536+ */
                        min-[2560px]:h-[20vh] /* 4K screens */
                        ">
                            <div class="md:px-10 px-2 text-[12px] leading-relaxed ">
                                <h2 class="font-bold uppercase mb-4 text-[#ffffff]">
                                    Scope of Work
                                </h2>

                                <div class="grid grid-cols-1 md:grid-cols-3 gap-x-4 gap-y-2 text-white">
                                    <ul class="list-disc list-inside space-y-1">
                                        <li>LV Distribution</li>
                                        <li>General Lighting System</li>
                                        <li>Emergency Lighting System</li>
                                        <li>Power Supply System</li>
                                        <li>LV & ELV Cable Containment</li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1">
                                        <li>Air-Conditioning System</li>
                                        <li>AHU and Chiller System</li>
                                        <li>Data System</li>
                                        <li>CCTV System</li>
                                        <li>PA System</li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1">
                                        <li>Fire Alarm System</li>
                                        <li>Telephone System</li>
                                        <li>Cold & Hot Water Supply</li>
                                        <li>Sanitary Drainage</li>
                                        <li>Fire Fighting System</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide" id="item2">
                        <!-- IMAGE SECTION -->
                        <div class="relative h-[250px] md:h-[500px]">
                            <!-- Background Image -->
                            <img src="{{ asset('assets/images/DaikuMEP/2.SiemPang/04.jpg') }}"
                                class="absolute inset-0 w-full h-full object-cover project-img"
                                data-project="siem-pang-resort"
                                alt="Project Image">

                            <!-- ORANGE OVERLAY (BOTTOM LEFT) -->
                            <div class="clip absolute bottom-0 left-0
                                        md:w-1/2 w-full
                                        bg-black/50
                                        text-white
                                        md:px-10 px-2 py-4">

                                <div class="space-y-1 text-[12px] leading-snug">
                                    <p class="text-[12px]"><span class="font-bold">Project Name:</span> Siem Pang Resort</p>
                                    <p class="text-[12px]"><span class="font-bold">Owner:</span> Private</p>
                                    <p class="text-[12px]"><span class="font-bold">Contract Period:</span> 1 Year and 5 Months
                                    </p>
                                    <p class="text-[12px]"><span class="font-bold">Location:</span> Stung Treng Province, Cambodia</p>
                                </div>
                            </div>
                        </div>

                        <div class="text-white bg-[#F26A27] py-4">
                            <div class="md:px-10 px-2 text-[12px] leading-relaxed">
                                <h2 class="font-bold uppercase mb-4 text-[#ffffff]">
                                    Scope of Work
                                </h2>

                                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-x-8 gap-y-2 text-white">
                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Electrical (Low Voltage)
                                        </h3>
                                        <li>LV Distribution</li>
                                        <li>General Lighting</li>
                                        <li>Power Supply</li>
                                        <li>LV & ELV Containment</li>
                                        <li>Lightning & Earthing</li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1 w-64">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Electrical ( Extra Low Voltage)
                                        </h3>
                                        <li>Data & Telephone</li>
                                        <li>PA System</li>
                                        <li>CCTV System</li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1 relative">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Plumbing & Firefighting
                                        </h3>
                                        <li>Cold & Hot Water</li>
                                        <li>Sanitary Drainage</li>
                                        <li>Storm Drainage</li>
                                        <li>Water Treatment</li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Mechanical
                                        </h3>
                                        <li>Air-Conditioning</li>
                                        <li>Ventilation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide" id="item3">
                        <!-- IMAGE SECTION -->
                        <div class="relative h-[250px] md:h-[500px]">
                            <!-- Background Image -->
                            <img src="{{ asset('assets/images/DaikuMEP/06.ChendaolyClinic/02.jpg') }}"
                                class="absolute inset-0 w-full h-full object-cover project-img"
                                data-project="Chenda-polyClinic"
                                alt="Project Image">

                            <!-- ORANGE OVERLAY (BOTTOM LEFT) -->
                            <div class="clip absolute bottom-0 left-0
                                        md:w-1/2 w-full
                                        bg-black/50
                                        text-white
                                        md:px-10 px-2 py-4">

                                <div class="space-y-1 text-[12px] leading-snug">
                                    <p class="text-[12px]"><span class="font-bold">Project Name:</span> Chenda Polyclinic
                                    </p>
                                    <p class="text-[12px]"><span class="font-bold">Owner:</span> Mrs. Chenda</p>
                                    <p class="text-[12px]"><span class="font-bold">Contract Period:</span> 6 Months</p>
                                    <p class="text-[12px]"><span class="font-bold">Location:</span> Phnom Penh, Cambodia</p>
                                </div>
                            </div>

                        </div>
                        <div class="text-white bg-[#F26A27] py-4">
                            <!-- SCOPE OF WORK (NEXT / BELOW IMAGE) -->
                            <div class="md:px-10 px-2 text-[12px] leading-relaxed">
                                <h2 class="font-bold uppercase mb-4 text-[#ffffff]">
                                    Scope of Work
                                </h2>

                                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-x-4 gap-y-2 text-white">
                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Electrical (Low Voltage)
                                        </h3>
                                        <li>LV Distribution</li>
                                        <li>General Lighting System</li>
                                        <li>Power Supply System</li>
                                        <li>LV & ELV Cable Containment</li>
                                        <li>Lightning & Earthing System</li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Electrical ( Extra Low Voltage)
                                        </h3>
                                        <li>Data & Telephone System</li>
                                        <li>Public Addressable System</li>
                                        <li>CCTV System</li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Plumbing & Firefighting System
                                        </h3>
                                        <li>Cold & Hot Water Supply</li>
                                        <li>Sanitary Drainage</li>
                                        <li>Storm Drainage</li>
                                        <li>Water Treatment Plant</li>
                                        <li>Mechanical System</li>
                                        <li>Air-Conditioning System</li>
                                        <li>Ventilation System</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide" id="item4">
                        <!-- IMAGE SECTION -->
                        <div class="relative h-[250px] md:h-[500px]">
                            <!-- Background Image -->
                            <img src="{{ asset('assets/images/photo/Frame10.png') }}"
                                class="absolute inset-0 w-full h-full object-cover project-img"
                                data-project="Koh-Tang-Resort"
                                  alt="Project Image"
                                >
                                
                                
                            <!-- ORANGE OVERLAY (BOTTOM LEFT) -->
                            <div class="clip absolute bottom-0 left-0
                                    md:w-1/2 w-full
                                    bg-[#000]/50
                                    text-white
                                    md:px-10 px-2 py-4">

                                <div class="space-y-1 text-[12px] leading-snug">
                                    <p class="text-[12px]"><span class="font-bold">Project Name:</span> Koh Tang Resort</p>
                                    <p class="text-[12px]"><span class="font-bold">Owner:</span> Private</p>
                                    <p class="text-[12px]"><span class="font-bold">Contract Period:</span> 1 Year and 5
                                        Months </p>
                                    <p class="text-[12px]"><span class="font-bold">Location:</span> Sihanoukville, Cambodia</p>
                                </div>
                            </div>
                        </div>

                        <div class="text-white bg-[#F26A27] py-4">
                            <!-- SCOPE OF WORK (NEXT / BELOW IMAGE) -->
                            <div class="md:px-10 px-2 text-[12px] leading-relaxed bg-[#F26A27]">
                                <h2 class="font-bold uppercase mb-4 text-[#ffffff]">
                                    Scope of Work
                                </h2>

                                <div
                                    class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-x-4 gap-y-2 bg-[#F26A27] text-white">
                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Electrical (Low Voltage)
                                        </h3>
                                        <li>LV Distribution</li>
                                        <li>General Lighting System</li>
                                        <li>Power Supply System</li>
                                        <li>LV & ELV Cable Containment</li>
                                        <li>Lightning & Earthing System</li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Electrical ( Extra Low Voltage)
                                        </h3>
                                        <li>Data & Telephone System</li>
                                        <li>Public Addressable System</li>
                                        <li>CCTV System</li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Plumbing & Firefighting System
                                        </h3>
                                        <li>Cold & Hot Water Supply</li>
                                        <li>Sanitary Drainage</li>
                                        <li>Water Treatment Plant</li>
                                    </ul>
                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Mechanical System
                                        </h3>
                                        <li>Air-Conditioning System</li>
                                        <li>Ventilation System</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide" id="item5">
                        <!-- IMAGE SECTION -->
                            <div class="relative h-[250px] md:h-[500px]">
                                <!-- Background Image -->
                                <img src="{{ asset('assets/images/DaikuMEP/08.VillaYimsResedence/02.jpg') }}"
                                    class="absolute inset-0 w-full h-full object-cover project-img"
                                    data-project="Yims-Residence"
                                    data= alt="Project Image">

                                <!-- ORANGE OVERLAY (BOTTOM LEFT) -->
                                <div class="clip absolute bottom-0 left-0
                                md:w-1/2 w-full
                                bg-[#000]/50
                                text-white
                                md:px-10 px-2 py-4">

                                    <div class="space-y-1 text-[12px] leading-snug">
                                        <p class="text-[12px]"><span class="font-bold">Project Name:</span> Yim's Residence</p>
                                        {{-- <p class="text-[12px]"><span class="font-bold">Owner :</span>Private</p> --}}
                                        <p class="text-[12px]"><span class="font-bold">Contract Period:</span> 2 Years and 5 Months</p>
                                        <p class="text-[12px]"><span class="font-bold">Location:</span> Phnom Penh, Cambodia</p>
                                    </div>
                                </div>
                            </div>

                        <div class="text-white bg-[#F26A27] py-4">
                           <!-- SCOPE OF WORK (NEXT / BELOW IMAGE) -->
                            <div class="md:px-10 px-2 text-[12px] leading-relaxed bg-[#F26A27]">
                                <h2 class="font-bold uppercase mb-4 text-[#ffffff]">
                                    Scope of Work
                                </h2>

                                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-x-4 gap-y-2 bg-[#F26A27] text-white">
                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Electrical (Low Voltage)
                                        </h3>
                                        <li>LV Distribution</li>
                                        <li>General Lighting System</li>
                                        <li>Power Supply System</li>
                                        <li>LV & ELV Cable Containment</li>
                                        <li>Lightning & Earthing System</li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Electrical ( Extra  Low Voltage) 
                                        </h3>
                                        <li>Data & Telephone System</li>
                                        <li>Public Addressable System</li>
                                        <li>CCTV System</li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Plumbing & Firefighting System
                                        </h3>
                                        <li>Cold & Hot Water Supply</li>
                                        <li>Sanitary Drainage</li>
                                        <li>Storm Drainage</li>
                                        <li>Water Treatment Plant</li>
                                        <li>Mechanical System</li>
                                        <li>Air-Conditioning System</li>
                                        <li>Ventilation System</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide" id="item6">
                        <!-- IMAGE SECTION -->
                            <div class="relative h-[250px] md:h-[500px]">
                                <!-- Background Image -->
                                <img src="{{ asset('assets/images/DaikuMEP/09.VillaSiemReap/02.png') }}"
                                    class="absolute inset-0  w-full h-full object-cover project-img"
                                    data-project="Villa-Siem-Reap" alt="Project Image">

                                <!-- ORANGE OVERLAY (BOTTOM LEFT) -->
                                <div class="clip absolute bottom-0 left-0
                                md:w-1/2 w-full
                                bg-[#000]/50
                                text-white
                                md:px-10 px-2 py-4">

                                    <div class="space-y-1 text-[12px] leading-snug">
                                        <p class="text-[12px]"><span class="font-bold">Project Name:</span> Villa Siem Reap</p>
                                        {{-- <p class="text-[12px]"><span class="font-bold">Owner :</span>Private</p> --}}
                                        <p class="text-[12px]"><span class="font-bold">Contract Period:</span> 6 Months </p>
                                        <p class="text-[12px]"><span class="font-bold">Location:</span> Siem Reap, Cambodia </p>
                                    </div>
                                </div>
                            </div>

                        <div class=" text-white bg-[#F26A27] py-4">
                           <!-- SCOPE OF WORK (NEXT / BELOW IMAGE) -->
                            <div class="md:px-10 px-2 text-[12px] leading-relaxed bg-[#F26A27]">
                                <h2 class="font-bold uppercase mb-4 text-[#ffffff]">
                                    Scope of Work
                                </h2>

                                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-x-4 gap-y-2 bg-[#F26A27] text-white">
                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Electrical (Low Voltage)
                                        </h3>
                                        <li>LV Distribution</li>
                                        <li>General Lighting System</li>
                                        <li>Power Supply System</li>
                                        <li>LV & ELV Cable Containment</li>
                                        <li>Lightning & Earthing System</li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Electrical ( Extra  Low Voltage) 
                                        </h3>
                                        <li>Data & Telephone System</li>
                                        <li>Public Addressable System</li>
                                        <li>CCTV System</li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Plumbing & Firefighting System
                                        </h3>
                                        <li>Cold & Hot Water Supply</li>
                                        <li>Sanitary Drainage</li>
                                        <li>Storm Drainage</li>
                                        <li>Water Treatment Plant</li>
                                        <li>Mechanical System</li>
                                        <li>Air-Conditioning System</li>
                                        <li>Ventilation System</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide" id="item7">
                        <!-- IMAGE SECTION -->
                            <div class="relative h-[250px] md:h-[500px]">
                                <!-- Background Image -->
                                <img src="{{ asset('assets/images/DaikuMEP/10.CPS(AEONMALL3)/02.jpg') }}"
                                    class="absolute inset-0 w-full h-full object-cover project-img"
                                    data-project="CPS-Aeon-Mall-Mean-Chey" alt="Project Image">

                                <!-- ORANGE OVERLAY (BOTTOM LEFT) -->
                                <div class="clip absolute bottom-0 left-0
                                md:w-1/2 w-full
                                bg-[#000]/50
                                text-white
                                md:px-10 px-2 py-4">

                                    <div class="space-y-1 text-[12px] leading-snug">
                                        <p>
                                            <span class="font-bold">Project Name:</span> CPS Aeon Mall Mean Chey 
                                        </p>
                                        <p>
                                            <span class="font-bold">Owner:</span> JASPAL FASHIONS
                                        </p>
                                        <p>
                                            <span class="font-bold">Contract Period:</span> 2 Years and 5 Months 
                                        </p>
                                        <p>
                                            <span class="font-bold">Location:</span> Phnom Penh, Cambodia
                                        </p>
                                    </div>
                                </div>
                            </div>

                        <div class=" text-white bg-[#F26A27] py-4 2xl:h-[16vh] lg:h-[32vh] h-[64vh]">
                           <!-- SCOPE OF WORK (NEXT / BELOW IMAGE) -->
                            <div class="md:px-10 px-2 text-[12px] leading-relaxed bg-[#F26A27]">
                                <h2 class="font-bold uppercase mb-4 text-[#ffffff]">
                                    Scope of Work
                                </h2>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-2 bg-[#F26A27] text-white">
                                    <ul class="list-disc list-inside space-y-1">
                                        <li>Distribution Panel </li>
                                        <li>Lighting System </li>
                                        <li>Power Supply System</li>
                                        <li>LV & ELV Cable</li>
                                        <li>Data &Tel System </li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1">
                                        <li>Fire Alarm System </li>
                                         <li>Firefighting System </li>
                                        <li>Air-Conditioning system </li>
                                        <li>Ventilation System </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide" id="item8">
                        <!-- IMAGE SECTION -->
                            <div class="relative h-[250px] md:h-[500px]">
                                <!-- Background Image -->
                                <img src="{{ asset('assets/images/DaikuMEP/20.OsoumResort/02.png') }}"
                                    class="absolute inset-0 w-full h-full object-cover project-img"
                                    data-project="Samanea-Resort" alt="Project Image">

                                <!-- ORANGE OVERLAY (BOTTOM LEFT) -->
                                <div class="clip absolute bottom-0 left-0
                                md:w-1/2 w-full
                                bg-[#000]/50
                                text-white
                                md:px-10 px-2 py-4">

                                    <div class="space-y-1 text-[12px] leading-snug">
                                        <p>
                                            <span class="font-bold">Project Name:</span> Samanea Resort
                                        </p>
                                        {{-- <p>
                                            <span class="font-bold">Owner:</span>
                                            JASPAL FASHIONS
                                        </p> --}}
                                        <p>
                                            <span class="font-bold">Contract Period:</span> 1 Year 
                                        </p>
                                        <p>
                                            <span class="font-bold">Location:</span> Kep, Cambodia
                                        </p>
                                    </div>
                                </div>
                            </div>

                        <div class=" text-white bg-[#F26A27] py-4 lg:h-auto h-[60vh]">
                         <!-- SCOPE OF WORK (NEXT / BELOW IMAGE) -->
                            <div class="md:px-10 px-2 text-[12px] leading-relaxed bg-[#F26A27]">
                                <h2 class="font-bold uppercase mb-4 text-[#ffffff]">
                                    Scope of Work
                                </h2>

                                <div class="grid grid-cols-1 gap-x-4 gap-y-2 bg-[#F26A27] text-white">
                                    <ul class="list-disc list-inside space-y-1">
                                        <h1 class="text-[#2b3d4f] font-bold">Mechanical system and Electrical Infra Structure </h1>
                                        <li>Air Conditioning system (VRF and Single Split system) </li>
                                        <li>Ventilation system</li>
                                        <li>Fire Suppression system </li>
                                        <li>LPG system</li>
                                        <li>Generator 2500KWA , ATS 5000A MDB and SDB</li>
                                        <li>Water Softener system</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide" id="item9">
                        <!-- IMAGE SECTION -->
                            <div class="relative h-[250px] md:h-[500px]">
                                <!-- Background Image -->
                                <img src="{{ asset('assets/images/DaikuMEP/AeonMallMeanchey/2-1.jpg') }}"
                                    class="absolute inset-0 w-full h-full object-cover project-img"
                                    data-project="aeon-mall-mean-chey" alt="Project Image">

                                <!-- ORANGE OVERLAY (BOTTOM LEFT) -->
                                <div class="clip absolute bottom-0 left-0
                                md:w-1/2 w-full
                                bg-[#000]/50
                                text-white
                                md:px-10 px-2 py-4">

                                    <div class="space-y-1 text-[12px] leading-snug">
                                        <p>
                                            <span class="font-bold">Project Name:</span> Aeon Mall Mean Chey
                                        </p>
                                        {{-- <p>
                                            <span class="font-bold">Owner:</span>
                                            JASPAL FASHIONS
                                        </p> --}}
                                        <p>
                                            <span class="font-bold">Contract Period:</span> 4 Months 
                                        </p>
                                        <p>
                                            <span class="font-bold">Location:</span> Phnom Penh, Cambodia
                                        </p>
                                    </div>
                                </div>
                            </div>

                        <div class=" text-white bg-[#F26A27] py-4">
                            <!-- SCOPE OF WORK (NEXT / BELOW IMAGE) -->
                            <div class="md:px-10 px-2 text-[12px] leading-relaxed bg-[#F26A27]">
                                <h2 class="font-bold uppercase mb-4 text-[#ffffff]">
                                    Scope of Work
                                </h2>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-2 bg-[#F26A27] text-white">
                                    <ul class="list-disc list-inside space-y-1">
                                        <li>Install PLC Control Panel</li>
                                        <li>Lighting Control System</li>
                                        <li>Door Management System</li>
                                        <li>Power Metering System</li>
                                        <li>Install Mian Equipment for BMS</li>
                                        <li>Install Control Cable for BMS (Optic, Cat6, 18AWG..)</li>
                                        <li>Provide and Install EMT Conduit for Technical Room</li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1">
                                        <li>Building Management System (Chiller, AHU &Fan)</li>
                                        <li>Mechanical Automation System (ACMV & PB)</li>
                                        <li>Waste Water Treatment System (WWTP)</li>
                                        <li>FM 200 (IT, Sever & Electrical Room)</li>
                                        <li>LPG Control System (Mall & Station)</li>
                                        <li>Firefighting and Smoke Spill Control System</li>
                                        <li>Power Supply for Mechanical System (VFR & Fan)</li>
                                        <li>Metering System (BTU, Water, LPG & KWH Meter)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide" id="item10">
                        <!-- IMAGE SECTION -->
                            <div class="relative h-[250px] md:h-[500px]">
                                <!-- Background Image -->
                                <img src="{{ asset('assets/images/photo/image.png') }}"
                                    class="absolute inset-0 w-full h-full object-cover project-img"
                                    data-project="Kobe-Teppanyaki-estaurant-Koh-Pich" alt="Project Image">

                                <!-- ORANGE OVERLAY (BOTTOM LEFT) -->
                                <div class="clip absolute bottom-0 left-0
                                md:w-1/2 w-full
                                bg-[#000]/50
                                text-white
                                md:px-10 px-2 py-4">

                                    <div class="space-y-1 text-[12px] leading-snug">
                                        <p class="text-[12px]"><span class="font-bold">Project Name:</span> Kobe Teppanyaki Restaurant Koh Pich</p>
                                        {{-- <p class="text-[12px]"><span class="font-bold">Owner :</span>Private</p> --}}
                                        <p class="text-[12px]"><span class="font-bold">Contract Period:</span> 6 Months</p>
                                        <p class="text-[12px]"><span class="font-bold">Location:</span> Phnom Penh, Cambodia</p>
                                    </div>
                                </div>
                            </div>

                        <div class=" text-white bg-[#F26A27] py-4">
                           <!-- SCOPE OF WORK (NEXT / BELOW IMAGE) -->
                            <div class="md:px-10 px-2 text-[12px] leading-relaxed bg-[#F26A27]">
                                <h2 class="font-bold uppercase mb-4 text-[#ffffff]">
                                    Scope of Work
                                </h2>

                                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-x-4 gap-y-2 bg-[#F26A27] text-white">
                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Electrical (Low Voltage)
                                        </h3>
                                        <li>LV Distribution</li>
                                        <li>General Lighting System</li>
                                        <li>Power Supply System</li>
                                        <li>LV & ELV Cable Containment</li>
                                        <li>Lightning & Earthing System</li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Electrical ( Extra  Low Voltage) 
                                        </h3>
                                        <li>Data & Telephone System</li>
                                        <li>Public Addressable System</li>
                                        <li>CCTV System</li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Plumbing & Firefighting System
                                        </h3>
                                        <li>Cold & Hot Water Supply</li>
                                        <li>Sanitary Drainage</li>
                                        <li>Storm Drainage</li>
                                        <li>Water Treatment Plant</li>
                                        <li>Mechanical System</li>
                                        <li>Air-Conditioning System</li>
                                        <li>Ventilation System</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">
                         <!-- IMAGE SECTION -->
                            <div class="relative h-[250px] md:h-[500px]">
                                <!-- Background Image -->
                                <img src="{{ asset('assets/images/DaikuMEP/21.VesselTrafficeTower/02.jpg') }}"
                                    class="absolute inset-0 w-full h-full object-cover project-img"
                                    data-project="Vessel-Traffic-Tower" alt="Project Image">

                                <!-- ORANGE OVERLAY (BOTTOM LEFT) -->
                                <div class="clip absolute bottom-0 left-0
                                md:w-1/2 w-full
                                bg-[#000]/50
                                text-white
                                md:px-10 px-2 py-4">

                                    <div class="space-y-1 text-[12px] leading-snug">
                                        <p class="text-[12px]"><span class="font-bold">Project Name:</span> Vessel Traffic Tower</p>
                                        {{-- <p class="text-[12px]"><span class="font-bold">Owner :</span>Private</p> --}}
                                        <p class="text-[12px]"><span class="font-bold">Contract Period:</span> 1 Year and 3 Months</p>
                                        <p class="text-[12px]"><span class="font-bold">Location:</span> Sihanoukville, Cambodia</p>
                                    </div>
                                </div>
                            </div>

                        <div class=" text-white bg-[#F26A27] py-4">
                           <!-- SCOPE OF WORK (NEXT / BELOW IMAGE) -->
                            <div class="md:px-10 px-2 text-[12px] leading-relaxed bg-[#F26A27]">
                                <h2 class="font-bold uppercase mb-4 text-[#ffffff]">
                                    Scope of Work
                                </h2>

                                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-x-4 gap-y-2 bg-[#F26A27] text-white">
                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Electrical (Low Voltage)
                                        </h3>
                                        <li>LV Distribution</li>
                                        <li>General Lighting System</li>
                                        <li>Power Supply System</li>
                                        <li>LV & ELV Cable Containment</li>
                                        <li>Lightning & Earthing System</li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Electrical ( Extra  Low Voltage) 
                                        </h3>
                                        <li>Data & Telephone System</li>
                                        <li>Public Addressable System</li>
                                        <li>CCTV System</li>
                                    </ul>

                                    <ul class="list-disc list-inside space-y-1">
                                        <h3 class="text-[#2b3d4f] text-[12px] font-semibold">
                                            Plumbing & Firefighting System
                                        </h3>
                                        <li>Cold & Hot Water Supply</li>
                                        <li>Sanitary Drainage</li>
                                        <li>Storm Drainage</li>
                                        <li>Water Treatment Plant</li>
                                        <li>Mechanical System</li>
                                        <li>Air-Conditioning System</li>
                                        <li>Ventilation System</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- <div class="swiper-button-next lg:!hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1C4089" width="24" height="24">
                            <path
                                d="M12.089 3.634a2 2 0 0 0 -1.089 1.78l-.001 2.586h-4.999a1 1 0 0 0 -1 1v6l.007 .117a1 1 0 0 0 .993 .883l4.999 -.001l.001 2.587a2 2 0 0 0 3.414 1.414l6.586 -6.586a2 2 0 0 0 0 -2.828l-6.586 -6.586a2 2 0 0 0 -2.18 -.434l-.145 .068z">
                            </path>
                            <path
                                d="M3 8a1 1 0 0 1 .993 .883l.007 .117v6a1 1 0 0 1 -1.993 .117l-.007 -.117v-6a1 1 0 0 1 1 -1z">
                            </path>
                        </svg>
                    </div>
                    <div class="swiper-button-prev lg:!hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1C4089" width="24" height="24">
                            <path
                                d="M9.586 4l-6.586 6.586a2 2 0 0 0 0 2.828l6.586 6.586a2 2 0 0 0 2.18 .434l.145 -.068a2 2 0 0 0 1.089 -1.78v-2.586h5a1 1 0 0 0 1 -1v-6l-.007 -.117a1 1 0 0 0 -.993 -.883l-5 -.001v-2.585a2 2 0 0 0 -3.414 -1.414z">
                            </path>
                            <path
                                d="M4.415 12l6.585 -6.586v3.586l.007 .117a1 1 0 0 0 .993 .883l5 -.001v4l-5 .001a1 1 0 0 0 -1 1v3.586l-6.585 -6.586z">
                            </path>
                            <path
                                d="M21 8a1 1 0 0 1 .993 .883l.007 .117v6a1 1 0 0 1 -1.993 .117l-.007 -.117v-6a1 1 0 0 1 1 -1z">
                            </path>
                        </svg>
                    </div> --}}
                    
                </div>
                 <div class="swiper-pagination"></div>
            </div>  
    </section>
  
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
           mb-10"
/>

    {{-- ── HUMAN PHOTO (mobile: left side) ── --}}
    {{-- ── HUMAN PHOTO (mobile: left side) ── --}}
<div class="absolute inset-0 w-full h-full flex items-center md:hidden z-[1] pointer-events-none overflow-hidden bg-[#F26A27]">
    <img
        src="{{ asset('assets/images/whychoos-us/mask2.png') }}"
        alt="Daiku Engineer"
        class="absolute h-[100%] w-auto max-w-[90%] left-[-20px] top-3 "
    />
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
{{-- Project Detail Modal Script --}}
<script>
    function openProjectModal(btn) {
        const card = btn.closest('.project-card');
        const img = card.querySelector('img');
        const categoryEl = card.querySelector('.uppercase');
        const titleEl = card.querySelector('h3');
        const locationEl = card.querySelector('p.text-gray-600');
        const desc = card.dataset.desc || '';

        document.getElementById('modalImage').src = img ? img.src : '';
        document.getElementById('modalCategory').textContent = categoryEl ? categoryEl.textContent.trim() : '';
        document.getElementById('modalTitle').textContent = titleEl ? titleEl.textContent.trim() : '';
        document.getElementById('modalLocation').textContent = locationEl ? locationEl.textContent.trim() : '';

        const descEl = document.getElementById('modalDesc');
        if (desc) {
            descEl.textContent = desc;
            descEl.classList.remove('hidden');
        } else {
            descEl.classList.add('hidden');
        }

        const modal = document.getElementById('projectDetailModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.classList.add('overflow-hidden');
    }

    function closeProjectModal() {
        const modal = document.getElementById('projectDetailModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.classList.remove('overflow-hidden');
    }

    function closeProjectModalOnOverlay(e) {
        if (e.target.id === 'projectDetailModal') closeProjectModal();
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeProjectModal();
    });
</script>
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
@endsection