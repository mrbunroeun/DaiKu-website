@extends('layouts.app')

@section('title', 'Electrical Systems - Daiku MEP')

@section('content')
<div class="relative z-50 py-16 max-w-5xl mx-auto px-6 pt-32 pb-16">

    <a href="{{ route('insights') }}" class="text-sm text-orange-500 hover:underline mb-8 inline-block">
        ← Back to Insights
    </a>

    <h1 id="page-title" class="text-2xl font-bold text-gray-800 mb-2">Electrical Systems</h1>
    <p class="text-slate-500 text-sm mb-10">
        Insights on electrical installation, power distribution, lighting systems,
        generators, low-voltage systems, and electrical safety for modern buildings.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-200">
            <div class="h-48 overflow-hidden">
                <img src="{{ asset('assets/images/photo/Frame5.png') }}" alt="Electrical Systems"
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            </div>
            <div class="p-5">
                <span class="text-xs font-semibold text-orange-500 uppercase tracking-wide">Electrical</span>
                <h3 class="text-sm font-bold text-gray-800 mt-2 mb-2 leading-snug">
                    What Electrical Systems Are Required for Commercial Buildings?
                </h3>
                <p class="text-slate-500 text-xs leading-relaxed line-clamp-3">
                    Electrical systems provide the infrastructure necessary to power equipment, support daily operations,
                    and maintain a safe environment for building occupants and businesses.
                </p>
                <a href="{{ route('insights.show', ['category' => 'electrical', 'slug' => 'systems-required']) }}#page-title"
                   class="inline-block mt-4 px-5 py-2 bg-[#F26A27] text-white text-xs font-semibold rounded shadow hover:bg-orange-600 transition-colors duration-200">
                    View Details
                </a>
            </div>
        </div>

        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-200">
            <div class="h-48 overflow-hidden">
                <img src="{{ asset('assets/images/photo/Frame5.png') }}" alt="Power Distribution"
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            </div>
            <div class="p-5">
                <span class="text-xs font-semibold text-orange-500 uppercase tracking-wide">Electrical</span>
                <h3 class="text-sm font-bold text-gray-800 mt-2 mb-2 leading-snug">
                    Power Distribution & Backup Systems for Commercial Buildings
                </h3>
                <p class="text-slate-500 text-xs leading-relaxed line-clamp-3">
                    Power distribution systems distribute electricity from the utility source to equipment, lighting,
                    and building systems. Backup power ensures critical operations continue during outages.
                </p>
                <a href="{{ route('insights.show', ['category' => 'electrical', 'slug' => 'power-distribution']) }}#page-title"
                   class="inline-block mt-4 px-5 py-2 bg-[#F26A27] text-white text-xs font-semibold rounded shadow hover:bg-orange-600 transition-colors duration-200">
                    View Details
                </a>
            </div>
        </div>

        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-200">
            <div class="h-48 overflow-hidden">
                <img src="{{ asset('assets/images/photo/Frame5.png') }}" alt="Low Voltage"
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            </div>
            <div class="p-5">
                <span class="text-xs font-semibold text-orange-500 uppercase tracking-wide">Electrical</span>
                <h3 class="text-sm font-bold text-gray-800 mt-2 mb-2 leading-snug">
                    Low Voltage & Building Automation Systems
                </h3>
                <p class="text-slate-500 text-xs leading-relaxed line-clamp-3">
                    Low voltage systems support communication, security, and operational technologies including
                    CCTV, access control, structured cabling, and building management systems.
                </p>
                <a href="{{ route('insights.show', ['category' => 'electrical', 'slug' => 'low-voltage']) }}#page-title"
                   class="inline-block mt-4 px-5 py-2 bg-[#F26A27] text-white text-xs font-semibold rounded shadow hover:bg-orange-600 transition-colors duration-200">
                    View Details
                </a>
            </div>
        </div>

    </div>
</div>
@endsection