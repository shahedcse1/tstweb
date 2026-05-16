@extends('layouts.app')
@section('title', 'Our Products')
@section('meta_desc', 'TST White House Ltd. trades essential commodities including sugar, edible oils, lentils, salt, and industrial construction materials.')

@section('content')

<x-page-hero
    title="Our Products"
    subtitle="From essential food commodities to industrial construction materials — complete supply solutions."
    :breadcrumb="[['label' => 'Products', 'url' => route('products')]]"
/>

<section class="section">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">What We Trade</div>
            <h2 class="section-title">Complete Product Portfolio</h2>
            <p class="section-desc">TST White House Ltd. specializes in the supply of essential raw materials catering to diverse needs worldwide.</p>
        </div>
        <div class="products-full-grid fade-up">
            @foreach($categories as $cat)
            <div class="pfg-card pfg-card--{{ $cat['color'] }}">
                <div class="pfg-top">
                    <div class="pfg-icon">{{ $cat['icon'] }}</div>
                    <div class="pfg-volume-badge">{{ $cat['volume'] }}</div>
                </div>
                <h3>{{ $cat['name'] }}</h3>
                <p>{{ $cat['desc'] }}</p>
                <div class="pfg-tags">
                    @foreach($cat['tags'] as $tag)
                    <span class="ptag">{{ $tag }}</span>
                    @endforeach
                </div>
                <a href="{{ $cat['link'] }}" class="pfg-link">Explore Product →</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- WHY CHOOSE TST --}}
<section class="section section-gray">
    <div class="container two-col">
        <div class="fade-up">
            <div class="section-label">Our Strength</div>
            <h2 class="section-title">Global Commodity Excellence</h2>
            <p>TST White House Global Commodities is a leading trading company specializing in the supply of essential raw materials. We are committed to delivering high-quality commodities that cater to the diverse needs of our clients worldwide.</p>
            <p style="margin-top:16px">With a strong focus on excellence, integrity, and customer satisfaction, we ensure that every transaction contributes to sustainable development and growth. Our emphasis on strategic sourcing, efficient logistics, and sustainable trading practices guarantees that each deal we handle not only meets but exceeds industry standards and client expectations.</p>
        </div>
        <div class="product-strengths fade-up" style="animation-delay:.15s">
            <div class="ps-item"><span class="ps-icon">🌍</span><div><h5>15+ Source Countries</h5><p>Global supplier network across Asia, Europe, Americas &amp; Middle East.</p></div></div>
            <div class="ps-item"><span class="ps-icon">⚖️</span><div><h5>Large-Scale Capacity</h5><p>Handle transactions from small lots to 150,000 MT monthly volumes.</p></div></div>
            <div class="ps-item"><span class="ps-icon">🔬</span><div><h5>Quality Certified</h5><p>Every shipment tested and certified before delivery.</p></div></div>
            <div class="ps-item"><span class="ps-icon">🤝</span><div><h5>SKS Joint Venture</h5><p>Backed by Sena Kalyan Sangstha for nationwide distribution.</p></div></div>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container cta-inner">
        <h2>Need a custom supply agreement?</h2>
        <p>We offer flexible volumes, custom delivery schedules, and competitive pricing for all commodities.</p>
        <a href="{{ route('contact') }}" class="btn btn-white">Request a Quote</a>
    </div>
</section>

@endsection
