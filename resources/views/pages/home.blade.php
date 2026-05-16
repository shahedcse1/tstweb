@extends('layouts.app')

@section('title', 'TST White House Ltd.')
@section('meta_desc', 'TST White House Ltd. — Bangladesh\'s leading essential commodities and industrial construction materials trading company. Est. 2023.')

@section('content')

{{-- HERO --}}
<link rel="stylesheet" href="{{ asset('css/hero-slider.css') }}">

@include('components.hero')

<script src="{{ asset('js/hero-slider.js') }}" defer></script>

{{-- QUOTE BANNER --}}
<div class="quote-banner">
    <div class="container">
        <blockquote>
            &#8220;A wise trader never trades with emotion but with a strategy grounded in experience and foresight.&#8221;
        </blockquote>
    </div>
</div>

{{-- ABOUT SNAPSHOT --}}
<section class="section about-snap" id="about">
    <div class="container two-col">
        <div class="about-visual fade-up">
            <div class="about-stats-grid">
                <div class="about-stat-card">
                    <span class="asn">32.9M L</span>
                    <span class="asl">Soybean Oil Traded</span>
                </div>
                <div class="about-stat-card">
                    <span class="asn">60K MT</span>
                    <span class="asl">Sugar Managed</span>
                </div>
                <div class="about-stat-card">
                    <span class="asn">50K MT</span>
                    <span class="asl">Lentils Traded</span>
                </div>
                <div class="about-stat-card">
                    <span class="asn">20K MT</span>
                    <span class="asl">Salt Delivered</span>
                </div>
            </div>
            <div class="about-badge-float">
                <strong>Est. 2023</strong>
                <span>Dhaka, Bangladesh</span>
            </div>
        </div>
        <div class="about-text fade-up" style="animation-delay:.15s">
            <div class="section-label">About TST White House</div>
            <h2 class="section-title">Bangladesh's Trusted Commodity Partner</h2>
            <div class="three-dots">
                <span></span><span></span><span></span>
            </div>
            <p>TST White House Ltd., established in 2023, is a leading trading and real estate company headquartered in Dhaka, Bangladesh. Renowned for its commitment to quality and reliability, the company has rapidly become a significant player in the industry.</p>
            <p>As direct importers of high-grade Dubai black stone (GABBRO), TST White House Ltd. has the capacity to supply up to 150,000 metric tons of stone per month. Their extensive portfolio also includes Bitumen, Indian Pakur Stone, Local Sand, and Coal.</p>
            <a href="{{ route('about') }}" class="btn btn-primary" style="margin-top:24px">Read Our Story</a>
        </div>
    </div>
</section>

{{-- PRODUCTS --}}
<section class="section section-gray" id="products">
    <div class="container">
 
        <div class="section-header centered fade-up">
            <div class="section-label">Our Products</div>
            <h2 class="section-title">What We Trade</h2>
            <p class="section-desc">
                From essential food commodities to industrial construction materials —
                TST White House covers your supply needs end-to-end.
            </p>
        </div>
 
        <div class="products-grid fade-up">
            @foreach($products as $product)
            <a href="{{ $product['link'] }}" class="product-card product-card--{{ $product['color'] }}">
 
                {{-- Image area --}}
                <div class="pc-img-wrap">
                    <img
                        src="{{ $product['image'] }}"
                        alt="{{ $product['name'] }}"
                        class="pc-img"
                        loading="lazy"
                        onerror="this.parentElement.classList.add('pc-img-error')"
                    >
                    <div class="pc-img-overlay"></div>
                   
                </div>
 
                {{-- Text body --}}
                <div class="pc-body">
                    <h4 class="pc-name">{{ $product['name'] }}</h4>
                    <p class="pc-desc">{{ $product['desc'] }}</p>
                    <span class="pc-link">
                        Learn More
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2.5"
                             stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"/>
                            <polyline points="12 5 19 12 12 19"/>
                        </svg>
                    </span>
                </div>
 
            </a>
            @endforeach
        </div>
 
        <div style="text-align:center; margin-top:48px">
            <a href="{{ route('products') }}" class="btn btn-outline-dark">View All Products</a>
        </div>
 
    </div>
</section>

{{-- QUALITY SNAPSHOT --}}
<section class="section qa-snap">
    <div class="container two-col">
        <div class="qa-text fade-up">
            <div class="section-label">Quality Assurance</div>
            <h2 class="section-title" style="color:white">Precision in Purity</h2>
            <p style="color:rgba(255,255,255,.75);margin-bottom:32px">Ensuring quality through rigorous vendor audits and continuous monitoring at every stage of the supply chain.</p>
            <div class="qa-list">
                <div class="qa-item"><div class="qa-check">✓</div><div><strong>ICUMSA Analysis</strong><p>Precise purity measurement for every sugar batch.</p></div></div>
                <div class="qa-item"><div class="qa-check">✓</div><div><strong>Polarization Testing</strong><p>Sucrose content verification for market compliance.</p></div></div>
                <div class="qa-item"><div class="qa-check">✓</div><div><strong>Microbial Testing</strong><p>Comprehensive safety checks at certified labs.</p></div></div>
                <div class="qa-item"><div class="qa-check">✓</div><div><strong>Traceability Systems</strong><p>Farm-to-delivery full supply chain transparency.</p></div></div>
            </div>
            <a href="{{ route('quality') }}" class="btn btn-orange" style="margin-top:32px">Our QA Process</a>
        </div>
        <div class="qa-visual-box fade-up" style="animation-delay:.2s">
            <div class="qa-metrics">
                <div class="qa-metric"><span class="qmv">99.9%</span><span class="qml">Purity Standard</span></div>
                <div class="qa-metric"><span class="qmv">ICUMSA 45</span><span class="qml">Highest Sugar Grade</span></div>
                <div class="qa-metric"><span class="qmv">150K MT</span><span class="qml">Stone/Month Cap.</span></div>
                <div class="qa-metric"><span class="qmv">15+</span><span class="qml">Source Countries</span></div>
            </div>
        </div>
    </div>
</section>

{{-- WHY US --}}
<section class="section section-gray" id="why">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Why Choose Us</div>
            <h2 class="section-title">Pure Quality, Diverse Choices</h2>
        </div>
        <div class="why-grid fade-up">
            @foreach($whyUs as $item)
            <div class="why-card">
                <div class="wc-icon">{{ $item['icon'] }}</div>
                <h4>{{ $item['title'] }}</h4>
                <p>{{ $item['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- JV TEASER --}}
<section class="section jv-teaser">
    <div class="container two-col">
        <div class="jv-doc-card fade-up">
            <div class="jv-seal">🤝</div>
            <h3>SKS–TST Joint Venture</h3>
            <p class="jv-cert-label">Certificate of Acknowledgement</p>
            <p>Sena Kalyan Sangstha (SKS) officially onboards TST White House Limited as its Joint Venture partner for all commodities business across Bangladesh and international imports.</p>
            <span class="jv-badge-pill">JV Partner Since 2024</span>
        </div>
        <div class="jv-text fade-up" style="animation-delay:.15s">
            <div class="section-label">Strategic Partnership</div>
            <h2 class="section-title">Joint Venture with Sena Kalyan Sangstha</h2>
            <p>The SKS-TST Joint Venture unites Sena Kalyan Sangstha (SKS) and TST White House Limited to revolutionize Bangladesh's commodities business. This partnership focuses on nationwide distribution and importing essential commodities, fostering economic growth and supply chain resilience.</p>
            <p style="margin-top:16px">By combining SKS's institutional strength with TST's expertise, the JV aims to set new industry benchmarks, ensuring quality, efficiency, and global trade integration.</p>
            <a href="{{ route('partnership') }}" class="btn btn-primary" style="margin-top:28px">Learn About the Partnership</a>
        </div>
    </div>
</section>

{{-- CTA BANNER --}}
<section class="cta-banner">
    <div class="container cta-inner">
        <h2>Ready to partner with TST White House?</h2>
        <p>Contact us today for pricing, supply agreements, and custom commodity solutions.</p>
        <a href="{{ route('contact') }}" class="btn btn-white">Get in Touch Today</a>
    </div>
</section>

@endsection
