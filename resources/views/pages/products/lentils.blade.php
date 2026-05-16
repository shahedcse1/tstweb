@extends('layouts.app')
@section('title', 'Lentils Trading')
@section('meta_desc', 'TST White House — Global Lentil Specialist. Red, brown, green & yellow lentils sourced from Canada, India, Turkey, Australia & the USA.')

@section('content')

<x-page-hero
    title="Global Lentil Specialist"
    subtitle="From farm to table, our lentils deliver quality, nutrition, and taste you can trust."
    :breadcrumb="[['label'=>'Products','url'=>route('products')],['label'=>'Lentils','url'=>route('products.lentils')]]"
/>

<section class="section">
    <div class="container two-col">
        <div class="fade-up">
            <div class="section-label">Lentils Overview</div>
            <h2 class="section-title">Strategic Commodity Trader</h2>
            <div class="three-dots"><span></span><span></span><span></span></div>
            <p>At TST White House, we bring the world's finest lentils to your table, expertly sourcing and trading the highest quality varieties to meet global demand with excellence and integrity.</p>
            <p style="margin-top:16px">Our trusted network of import partners spans across key lentil-producing countries, including Canada, India, Turkey, Australia, and the United States. These partnerships ensure a steady supply of the highest quality lentils to meet diverse global demands.</p>
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
            <div class="phb-stat"><span class="phb-num">50,000 MT</span><span class="phb-lbl">Total Traded</span></div>
            <div class="phb-stat"><span class="phb-num">7</span><span class="phb-lbl">Source Countries</span></div>
            <div class="phb-stat"><span class="phb-num">4</span><span class="phb-lbl">Lentil Varieties</span></div>
            <div class="phb-stat"><span class="phb-num">100%</span><span class="phb-lbl">Traceable Supply</span></div>
        </div>
    </div>
</section>

<section class="section section-gray">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Product Range</div>
            <h2 class="section-title">From RL-20 to YSL-15: The Best in Lentil</h2>
        </div>
        <div class="variety-grid fade-up">
            @foreach($varieties as $v)
            <div class="variety-card">
                <div class="vc-circle">{{ $v['icon'] }}</div>
                <h4>{{ $v['name'] }}</h4>
                <span class="vc-grade">Code: {{ $v['code'] }}</span>
                <p>{{ $v['desc'] }}</p>
                <div class="vc-origin"><span>Origin:</span> {{ $v['origin'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- SUPPLY CHAIN --}}
<section class="section">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Supply Chain</div>
            <h2 class="section-title">Our Supply Chain Excellence</h2>
            <p class="section-desc">At TST White House, our supply chain is built on a foundation of efficiency, transparency, and sustainability.</p>
        </div>
        <div class="supply-chain-steps fade-up">
            @foreach($supplyChain as $step)
            <div class="sc-step">
                <div class="sc-num">{{ $step['step'] }}</div>
                <h4>{{ $step['title'] }}</h4>
                <p>{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container cta-inner">
        <h2>Need a reliable lentil supplier?</h2>
        <p>Contact us for volume pricing and supply agreement discussions.</p>
        <a href="{{ route('contact') }}" class="btn btn-white">Get a Quote</a>
    </div>
</section>

@endsection
