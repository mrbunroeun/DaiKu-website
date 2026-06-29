@extends('layouts.app')

@section('title', 'Our Services - Daiku MEP Cambodia')

@section('content')
<div class="bg-white min-h-screen text-slate-800 font-sans" id="services-page-wrapper">

    <section id="mechanical">
        @include('services.partials.detail-mechanical')
    </section>

    <section id="electrical">
        @include('services.partials.detail-electrical')
    </section>

    <section id="plumbing">
        @include('services.partials.detail-plumbing-fire')
    </section>

    <section id="design_consultancy">
        @include('services.partials.detail-mep-design')
    </section>

    @include('services.partials.common-sections')

</div>
@endsection