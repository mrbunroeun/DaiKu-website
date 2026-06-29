@extends('layouts.app')

@section('title', 'Plumbing & Fire Protection - Daiku MEP')

@section('content')
<div class="relative z-50 py-16 max-w-5xl mx-auto px-6 pt-32 pb-16">

    <a href="{{ route('insights') }}" class="text-sm text-orange-500 hover:underline mb-8 inline-block">
        ← Back to Insights
    </a>

    <h1 id="page-title" class="text-2xl font-bold text-gray-800 mb-2">Plumbing & Fire Protection Systems</h1>
    <p class="text-slate-500 text-sm mb-10">
        Expert resources on water supply systems, drainage, fire detection, sprinkler systems,
        FM-200 solutions, and fire safety compliance.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-200">
            <div class="h-48 overflow-hidden">
                <img src="{{ asset('assets/images/photo/Frame5.png') }}" alt="Fire Protection"
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            </div>
            <div class="p-5">
                <span class="text-xs font-semibold text-orange-500 uppercase tracking-wide">Plumbing & Fire</span>
                <h3 class="text-sm font-bold text-gray-800 mt-2 mb-2 leading-snug">
                    What Fire Protection Systems Are Required for Commercial Buildings?
                </h3>
                <p class="text-slate-500 text-xs leading-relaxed line-clamp-3">
                    Fire protection systems help protect occupants, assets, and business operations during emergency
                    situations. A properly designed system detects fires early and minimizes property damage.
                </p>
                <a href="{{ route('insights.show', ['category' => 'plumbing', 'slug' => 'fire-protection']) }}#page-title"
                   class="inline-block mt-4 px-5 py-2 bg-[#F26A27] text-white text-xs font-semibold rounded shadow hover:bg-orange-600 transition-colors duration-200">
                    View Details
                </a>
            </div>
        </div>

        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-200">
            <div class="h-48 overflow-hidden">
                <img src="{{ asset('assets/images/photo/Frame5.png') }}" alt="FM-200"
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            </div>
            <div class="p-5">
                <span class="text-xs font-semibold text-orange-500 uppercase tracking-wide">Plumbing & Fire</span>
                <h3 class="text-sm font-bold text-gray-800 mt-2 mb-2 leading-snug">
                    FM-200 Fire Suppression Systems for Server Rooms & Data Centers
                </h3>
                <p class="text-slate-500 text-xs leading-relaxed line-clamp-3">
                    FM-200 systems use a clean agent to suppress fires without damaging sensitive equipment,
                    making them ideal for server rooms, data centers, and control rooms.
                </p>
                <a href="{{ route('insights.show', ['category' => 'plumbing', 'slug' => 'fm200']) }}#page-title"
                   class="inline-block mt-4 px-5 py-2 bg-[#F26A27] text-white text-xs font-semibold rounded shadow hover:bg-orange-600 transition-colors duration-200">
                    View Details
                </a>
            </div>
        </div>

    </div>
</div>
@endsection