@php
    $pageTitles = [
        'about'                      => 'Trusted MEP Engineering &<br> Maintenance Partner in Cambodia',
        'service'                    => 'Trusted MEP Engineering & <br> Maintenance Partner in Cambodia',
        'services.mechanical'       => 'Trusted MEP Engineering &<br> Maintenance Partner in Cambodia',
        'services.electrical'       => 'Trusted MEP Engineering &<br> Maintenance Partner in Cambodia',
        'services.plumbing'         => 'Trusted MEP Engineering &<br> Maintenance Partner in Cambodia',
        'services.mep'               => 'Trusted MEP Engineering &<br> Maintenance Partner in Cambodia',
        'contact'                    => 'Contact Us',
        'career'                      => 'Trusted MEP Engineering &<br> Maintenance Partner in Cambodia',
        'project'                     => 'Trusted MEP Engineering &<br> Maintenance Partner in Cambodia',
        'professional.project.show' => 'Trusted MEP Engineering &<br> Maintenance Partner in Cambodia',
        'insights'                    => 'Insights',
        'insights.mechanical'       => 'Trusted MEP Engineering &<br> Maintenance Partner in Cambodia',
        'insights.electrical'       => 'Trusted MEP Engineering &<br> Maintenance Partner in Cambodia',
        'insights.plumbing'         => '',
        'insights.mep'               => 'Trusted MEP Engineering &<br> Maintenance Partner in Cambodia',
        'insights.facility'         => 'Trusted MEP Engineering &<br> Maintenance Partner in Cambodia',
        'insights.show'              => 'Trusted MEP Engineering &<br> Maintenance Partner in Cambodia',
    ];

    $routePageNames = [
        'about'                      => 'About Us',
        'service'                    => 'SERVICES',
        'services.mechanical'       => 'SERVICES',
        'services.electrical'       => 'SERVICES',
        'services.plumbing'         => 'SERVICES',
        'services.mep'               => 'SERVICES',
        'contact'                    => 'Contact Us',
        'career'                      => 'Career',
        'project'                     => 'Projects',
        'professional.project.show' => 'Projects',
        'insights'                    => 'Insights',
        'insights.mechanical'       => 'Insights',
        'insights.electrical'       => 'Insights',
        'insights.plumbing'         => 'Insights',
        'insights.mep'               => 'Insights',
        'insights.facility'         => 'Insights',
        'insights.show'              => 'Insights',
        'maintenance'                => 'AC Maintenance',
    ];

    $currentRouteName = request()->route()?->getName();
    $pageTitle         = $pageTitles[$currentRouteName] ?? null;
    $pageName         = $routePageNames[$currentRouteName] ?? null;
@endphp

@if(request()->is('/'))
<section class="w-full">
    <div class="w-full max-w-4xl mx-auto text-center -mt-[-70px] sm:pt-20 padding_section">
        <div class="flex flex-col items-center justify-center font-bold leading-none">

            <h2 class="text-semibold text-[14px] sm:text-[16px] md:text-[20px] lg:text-[30px]
                       text-[#2b3d4f] md:text-[#ffffff] uppercase"
                data-aos="fade-up" data-aos-duration="1000">
                Welcome to
            </h2>

            <h1 class="text-[22px] sm:text-[40px] md:text-[50px] lg:text-[70px]
                       text-[#f26b27]"
                data-aos="fade-up" data-aos-duration="1500">

                <span class="text-[25px] sm:text-[45px] md:text-[55px] lg:text-[70px]">
                    Daiku MEP Solution
                </span>

            </h1>

            <h2 class="text-[18px sm:text-[20px] md:text-[30px] lg:text-[50px]
                       tracking-[10px] text-[#2b3d4f] uppercase ml-2"
                data-aos="fade-up" data-aos-duration="2000">
                Company
            </h2>

        </div>
    </div>
</section>
@endif

@if($pageName && !request()->is('/'))
<section class="w-full">
    <div class="w-full max-w-4xl mx-auto text-center sm:pt-20 padding_section -mt-[-60px]">
        <div class="flex flex-col items-center justify-center leading-none">


            <h1 class=" text-semibold text-[14px] sm:text-[16px] md:text-[20px] lg:text-[30px]
                       text-[#2b3d4f] md:text-[#ffffff] uppercase"
                data-aos="fade-up"
                data-aos-duration="1500">

                {{ $pageName }}

            </h1>

            @if($pageTitle)
            <h1 class="text-[#f26b27]
                       font-bold
                       text-[clamp(18px,3vw,40px)] mt-4"
                data-aos="fade-up"
                data-aos-duration="1500">

                {!! $pageTitle !!}

            </h1>
            @endif

        </div>
    </div>
</section>
@endif
