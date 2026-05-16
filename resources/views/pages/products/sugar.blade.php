@extends('layouts.app')
@section('title', 'Sugar Trading')
@section('meta_desc', 'TST White House imports premium sugar — refined, brown, raw & organic — from Brazil, Thailand, India, Australia, South Africa & Guatemala.')

@section('content')

<x-page-hero
    title="Sugar Trading Expertise"
    subtitle="Premium refined, raw, brown & organic sugar from world-class producers worldwide."
    :breadcrumb="[['label'=>'Products','url'=>route('products')],['label'=>'Sugar','url'=>route('products.sugar')]]"
/>

{{-- OVERVIEW --}}
<section class="section">
    <div class="container two-col">
        <div class="fade-up">
            <div class="section-label">Sugar Overview</div>
            <h2 class="section-title">Sweet Selections: Our Range of Premium Sugars</h2>
            <div class="three-dots"><span></span><span></span><span></span></div>
            <p>TST White House has established itself as a reliable and proficient trader of sugar in Bangladesh. With a commitment to quality and customer satisfaction, we have developed strong relationships with both domestic and international suppliers, ensuring a consistent supply of premium sugar to meet the demands of our clients.</p>
            <p style="margin-top:16px">TST White House imports high-quality sugar from top producers worldwide, including Brazil, Thailand, India, Australia, South Africa, and Guatemala, ensuring a diverse supply of refined, organic, raw, and specialty sugars for the Bangladeshi market.</p>

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
            <div class="phb-stat"><span class="phb-num">60,000 MT</span><span class="phb-lbl">Total Sugar Traded</span></div>
            <div class="phb-stat"><span class="phb-num">6</span><span class="phb-lbl">Source Countries</span></div>
            <div class="phb-stat"><span class="phb-num">4</span><span class="phb-lbl">Sugar Varieties</span></div>
            <div class="phb-stat"><span class="phb-num">ICUMSA 45</span><span class="phb-lbl">Highest Grade Available</span></div>
        </div>
    </div>
</section>

{{-- VARIETIES --}}
<section class="section section-gray">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Product Range</div>
            <h2 class="section-title">Our Sugar Varieties</h2>
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

{{-- QA --}}
<section class="section section-dark">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label" style="color:var(--orange)">Quality Assurance</div>
            <h2 class="section-title" style="color:white">Precision in Purity</h2>
            <p class="section-desc" style="color:rgba(255,255,255,.7)">Ensuring Quality through Vendor Audits and Monitoring</p>
        </div>
        <div class="qa-protocols-grid fade-up">
            @foreach($qa as $item)
            <div class="qa-proto-item">
                <div class="qap-check">✓</div>
                <span>{{ $item }}</span>
            </div>
            @endforeach
        </div>
        <div class="unmatched-box fade-up">
            <div class="ub-icon">🏆</div>
            <h3>Unmatched Quality</h3>
            <p>We ensure that every granule meets the highest standards of purity and taste. Our rigorous testing protocols and traceability systems guarantee that what reaches your facility matches our promises exactly.</p>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container cta-inner">
        <h2>Looking to source premium sugar?</h2>
        <p>Contact us for pricing, volume availability, and custom supply agreements.</p>
        <a href="{{ route('contact') }}" class="btn btn-white">Get a Quote</a>
    </div>
</section>

@endsection
