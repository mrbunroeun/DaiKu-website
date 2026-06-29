@extends('layouts.app')

@section('title', 'Mechanical Systems & HVAC - Daiku MEP')

@section('content')
<div class="relative z-50 py-16 max-w-5xl mx-auto px-6 pt-32 pb-16">

    <a href="{{ route('insights') }}" class="text-sm text-orange-500 hover:underline mb-8 inline-block">
        ← Back to Insights
    </a>

    <h1 id="page-title" class="text-2xl font-bold text-gray-800 mb-2">Mechanical Systems & HVAC</h1>
    <p class="text-slate-500 text-sm mb-10">
        Articles covering HVAC systems, ventilation, VRF systems, ducting works, energy efficiency,
        and mechanical engineering solutions for commercial and residential buildings.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-200">
            <div class="h-48 overflow-hidden">
                <img src="{{ asset('assets/images/photo/Frame5.png') }}"
                     alt="HVAC Article"
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            </div>
            <div class="p-5">
                <span class="text-xs font-semibold text-orange-500 uppercase tracking-wide">Mechanical & HVAC</span>
                <h3 class="text-sm font-bold text-gray-800 mt-2 mb-2 leading-snug">
                    What Is HVAC and Why Is It Important for Commercial Buildings?
                </h3>
                <p class="text-slate-500 text-xs leading-relaxed line-clamp-3">
                    HVAC systems play a critical role in modern commercial buildings. Whether it is an office building,
                    hotel, shopping mall, or hospital, HVAC systems help maintain indoor comfort, improve air quality,
                    and support efficient building operations.
                </p>
                <a href="{{ route('insights.show', ['category' => 'mechanical', 'slug' => 'hvac-importance']) }}#page-title"
                   class="inline-block mt-4 px-5 py-2 bg-[#F26A27] text-white text-xs font-semibold rounded shadow hover:bg-orange-600 transition-colors duration-200">
                    View Details
                </a>
            </div>
        </div>

    </div>
</div>
@endsection