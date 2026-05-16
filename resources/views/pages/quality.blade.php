@extends('layouts.app')
@section('title', 'Quality Assurance')
@section('meta_desc', 'TST White House quality assurance protocols — ICUMSA analysis, polarization testing, microbial testing & full traceability systems.')

@section('content')

<x-page-hero
    title="Precision in Purity"
    subtitle="Our Quality Assurance Protocols — ensuring excellence through vendor audits and continuous monitoring."
    :breadcrumb="[['label'=>'Quality','url'=>route('quality')]]"
/>

{{-- STANDARDS --}}
<section class="section section-gray">
    <div class="container">
        <div class="standards-grid fade-up">
            @foreach($standards as $s)
            <div class="std-card">
                <div class="std-val">{{ $s['metric'] }}</div>
                <div class="std-lbl">{{ $s['label'] }}</div>
                <div class="std-sub">{{ $s['sub'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- PROTOCOLS --}}
<section class="section">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">QA Protocols</div>
            <h2 class="section-title">Our Quality Assurance Process</h2>
            <p class="section-desc">Every commodity we trade passes through our comprehensive quality assurance framework before reaching our clients.</p>
        </div>
        <div class="protocols-grid fade-up">
            @foreach($protocols as $p)
            <div class="proto-card">
                <div class="proto-icon">{{ $p['icon'] }}</div>
                <h4>{{ $p['title'] }}</h4>
                <p>{{ $p['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CERTIFICATIONS --}}
<section class="section section-dark">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label" style="color:var(--orange)">Certifications</div>
            <h2 class="section-title" style="color:white">Legal &amp; Financial Certifications</h2>
            <p class="section-desc" style="color:rgba(255,255,255,.7)">TST White House holds all required legal registrations and financial certifications to operate as a trusted commodity trader in Bangladesh.</p>
        </div>
        <div class="cert-full-grid fade-up">
            @foreach($certifications as $c)
            <div class="cert-full-card">
                <h4>{{ $c['name'] }}</h4>
                <p>{{ $c['body'] }}</p>
                <span class="cert-ref">{{ $c['no'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- QA COMMITMENT --}}
<section class="section">
    <div class="container two-col">
        <div class="fade-up">
            <div class="section-label">Our Commitment</div>
            <h2 class="section-title">Unmatched Quality — Every Shipment</h2>
            <p>At TST White House, quality is not an afterthought — it is the foundation of every transaction. Our rigorous standards ensure that every granule of sugar, every litre of oil, every metric ton of stone, and every batch of salt meets the highest industry standards.</p>
            <p style="margin-top:16px">We leverage strategic sourcing, rigorous quality control, and advanced logistics to ensure timely delivery and consistent quality across all our commodities. Our supply chain is built on a foundation of efficiency, transparency, and sustainability.</p>
        </div>
        <div class="qa-pillars fade-up" style="animation-delay:.15s">
            <div class="qap-item"><span class="qap-num">01</span><div><h5>Source Verification</h5><p>Every supplier audited and certified before partnership begins.</p></div></div>
            <div class="qap-item"><span class="qap-num">02</span><div><h5>Pre-Shipment Inspection</h5><p>Independent quality checks before goods leave the source country.</p></div></div>
            <div class="qap-item"><span class="qap-num">03</span><div><h5>Port-of-Entry Testing</h5><p>Additional checks upon arrival in Bangladesh.</p></div></div>
            <div class="qap-item"><span class="qap-num">04</span><div><h5>Delivery Certification</h5><p>Final quality certificate issued with every delivery.</p></div></div>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container cta-inner">
        <h2>Quality you can depend on</h2>
        <p>Partner with TST White House for commodity supply that meets the highest standards.</p>
        <a href="{{ route('contact') }}" class="btn btn-white">Contact Us</a>
    </div>
</section>

@endsection
