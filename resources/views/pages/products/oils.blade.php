@extends('layouts.app')
@section('title', 'Edible Oils Trading')
@section('meta_desc', 'TST White House imports premium edible oils — palm, soybean, sunflower, olive & canola — from Malaysia, Argentina, Ukraine, Italy & Indonesia.')

@section('content')

<x-page-hero
    title="Golden Drops: Our Expertise in Edible Oils"
    subtitle="Harvested Fresh, Delivered Pure — premium edible oils for Bangladesh's kitchens and industry."
    :breadcrumb="[['label'=>'Products','url'=>route('products')],['label'=>'Edible Oils','url'=>route('products.oils')]]"
/>

<section class="section">
    <div class="container two-col">
        <div class="fade-up">
            <div class="section-label">Edible Oils Overview</div>
            <h2 class="section-title">From PO1 to CA5: The Best in Edible Oils</h2>
            <div class="three-dots"><span></span><span></span><span></span></div>
            <p>TST White House Ltd. ensures the highest quality edible oils, sourced directly from leading global farms and delivered fresh to kitchens across Bangladesh, preserving natural goodness in every drop.</p>
            <p style="margin-top:16px">Our diverse range includes palm oil, soybean oil, sunflower oil, olive oil, and canola oil, catering to various culinary needs in Bangladesh with a commitment to quality and excellence.</p>
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
            <div class="phb-stat"><span class="phb-num">32.9M L</span><span class="phb-lbl">Litres Traded</span></div>
            <div class="phb-stat"><span class="phb-num">5</span><span class="phb-lbl">Oil Varieties</span></div>
            <div class="phb-stat"><span class="phb-num">5</span><span class="phb-lbl">Source Countries</span></div>
            <div class="phb-stat"><span class="phb-num">100%</span><span class="phb-lbl">Quality Certified</span></div>
        </div>
    </div>
</section>

<section class="section section-gray">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Product Range</div>
            <h2 class="section-title">Our Edible Oil Varieties</h2>
        </div>
        <div class="variety-grid variety-grid--5 fade-up">
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

<section class="section">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Our Promise</div>
            <h2 class="section-title">Quality You Can Trust</h2>
        </div>
        <div class="promise-grid fade-up">
            <div class="promise-item"><div class="pi-icon">🌿</div><h5>Natural Sourcing</h5><p>Oils sourced directly from leading global farms, preserving natural goodness.</p></div>
            <div class="promise-item"><div class="pi-icon">🧪</div><h5>Lab Tested</h5><p>Every batch undergoes rigorous quality testing before shipment.</p></div>
            <div class="promise-item"><div class="pi-icon">🚢</div><h5>Fresh Delivery</h5><p>Cold-chain compliant logistics to maintain oil quality during transport.</p></div>
            <div class="promise-item"><div class="pi-icon">📋</div><h5>Certified Quality</h5><p>Full documentation including certificates of analysis provided.</p></div>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container cta-inner">
        <h2>Looking to source premium edible oils?</h2>
        <p>Contact us for pricing, volume availability, and supply agreements.</p>
        <a href="{{ route('contact') }}" class="btn btn-white">Get a Quote</a>
    </div>
</section>

@endsection
