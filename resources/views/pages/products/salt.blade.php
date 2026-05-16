@extends('layouts.app')
@section('title', 'Salt Trading')
@section('meta_desc', 'TST White House — Salted Perfection Unveiled. Table, iodized, sea salt & Himalayan pink salt from top global producers.')

@section('content')

<x-page-hero
    title="Salt Trade Excellence"
    subtitle="Salted Perfection Unveiled — premium salt varieties from world-class producers."
    :breadcrumb="[['label'=>'Products','url'=>route('products')],['label'=>'Salt','url'=>route('products.salt')]]"
/>

<section class="section">
    <div class="container two-col">
        <div class="fade-up">
            <div class="section-label">Salt Overview</div>
            <h2 class="section-title">Salting the World: Our Premium Salt Varieties</h2>
            <div class="three-dots"><span></span><span></span><span></span></div>
            <p>TST White House is a leading importer of premium salts for the Bangladeshi market. We source high-quality salt from renowned producers worldwide, ensuring that our customers receive only the finest products.</p>
            <p style="margin-top:16px">Our diverse salt portfolio caters to various needs, from everyday table salt to specialty salts like Himalayan pink and sea salt.</p>
            <div class="source-countries">
                <h5>Import Partners</h5>
                <div class="countries-list">
                    @foreach($sources as $country)
                    <span class="country-badge">🌍 {{ $country }}</span>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="product-highlight-box fade-up" style="animation-delay:.15s">
            <div class="phb-stat"><span class="phb-num">20,000 MT</span><span class="phb-lbl">Total Traded</span></div>
            <div class="phb-stat"><span class="phb-num">6</span><span class="phb-lbl">Source Countries</span></div>
            <div class="phb-stat"><span class="phb-num">4</span><span class="phb-lbl">Salt Varieties</span></div>
            <div class="phb-stat"><span class="phb-num">≥99.9%</span><span class="phb-lbl">Purity (Table Salt)</span></div>
        </div>
    </div>
</section>

<section class="section section-gray">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Product Range</div>
            <h2 class="section-title">Our Salt Varieties</h2>
        </div>
        <div class="variety-grid fade-up">
            @foreach($varieties as $v)
            <div class="variety-card">
                <div class="vc-circle">{{ $v['icon'] }}</div>
                <h4>{{ $v['name'] }}</h4>
                <span class="vc-grade">{{ $v['grade'] }}</span>
                <p>{{ $v['desc'] }}</p>
                <div class="vc-origin"><span>Origin:</span> {{ $v['origin'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- BENEFITS --}}
<section class="section section-dark">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label" style="color:var(--orange)">Benefits</div>
            <h2 class="section-title" style="color:white">Advantages of Our Premium Salt Selection</h2>
            <p class="section-desc" style="color:rgba(255,255,255,.7)">Himalayan Salt Special R50 and all our salt varieties come with unparalleled quality guarantees.</p>
        </div>
        <div class="benefits-grid fade-up">
            @foreach($benefits as $b)
            <div class="benefit-item">
                <div class="bi-check">✓</div>
                <span>{{ $b }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container cta-inner">
        <h2>Looking to source premium salt?</h2>
        <p>Contact us for pricing, volume availability, and supply agreements.</p>
        <a href="{{ route('contact') }}" class="btn btn-white">Get a Quote</a>
    </div>
</section>

@endsection
