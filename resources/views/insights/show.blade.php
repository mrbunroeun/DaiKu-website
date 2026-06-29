@extends('layouts.app')

@section('title', $article['title'] . ' - Daiku MEP')

@section('content')
<div class="relative z-50 py-16 max-w-3xl mx-auto px-6 pt-32 pb-16">

    <a href="{{ route('insights.' . $category) }}" class="text-sm text-orange-500 hover:underline mb-8 inline-block">
        ← Back to {{ ucfirst($category) }}
    </a>

    {{-- Card wrapper --}}
    <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm">

        {{-- Image --}}
        <div class="h-64 md:h-80 overflow-hidden">
            <img src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}"
                 class="w-full h-full object-cover">
        </div>

        {{-- Content --}}
        <div class="p-6 md:p-8">
            <span class="text-xs font-semibold text-orange-500 uppercase tracking-wide">
                {{ $article['tag'] }}
            </span>

            <h1 id="page-title" class="text-xl md:text-2xl font-bold text-gray-800 mt-2 mb-6 leading-snug">
                {{ $article['title'] }}
            </h1>

            <div class="prose prose-sm md:prose-base prose-headings:text-[#2B3D4F] prose-headings:font-bold prose-a:text-orange-500 text-gray-700 leading-relaxed">
                {!! \Illuminate\Support\Str::markdown($article['body']) !!}
            </div>

            <div class="mt-10 pt-6 border-t border-gray-200">
                <a href="{{ route('contact') }}"
                   class="inline-block px-6 py-3 bg-[#F26A27] text-white text-sm font-semibold rounded shadow hover:bg-orange-600 transition-colors duration-200">
                    Contact Daiku MEP
                </a>
            </div>
        </div>

    </div>

</div>
@endsection