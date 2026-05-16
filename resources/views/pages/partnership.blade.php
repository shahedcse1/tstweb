@extends('layouts.app')
@section('title', 'Partnership — SKS Joint Venture')
@section('meta_desc', 'TST White House Ltd. Joint Venture with Sena Kalyan Sangstha (SKS) 2024 — revolutionizing Bangladesh commodity trading.')

@section('content')

<x-page-hero
    title="Strategic Partnership"
    subtitle="TST White House × Sena Kalyan Sangstha — A landmark Joint Venture for Bangladesh's commodities future."
    :breadcrumb="[['label'=>'Partnership','url'=>route('partnership')]]"
/>

{{-- JV OVERVIEW --}}
<section class="section">
    <div class="container two-col">
        <div class="jv-doc-large fade-up">
            <div class="jvdl-header">
                <div class="jvdl-seal">🤝</div>
                <div>
                    <h3>Certificate of Acknowledgement</h3>
                    <span class="jvdl-year">Joint Venture · 2024</span>
                </div>
            </div>
            <div class="jvdl-body">
                <p>This is to certify that <strong>Sena Kalyan Sangstha (SKS)</strong> is onboarding <strong>TST White House Limited</strong>, House: 12/A, Road-110, Gulshan-2, Dhaka-1212 as its Joint Venture (JV) partner in all kinds of commodities business across the country and to import commodities from abroad as SKS-TST (JV).</p>
                <p style="margin-top:16px">Sena Kalyan Sangstha and TST White House Limited will conduct the business through this Joint Venture agreement.</p>
            </div>
            <div class="jvdl-footer">
                <div class="jvdl-sig">
                    <div class="sig-line"></div>
                    <span>SKS Trading House</span>
                    <span class="sig-sub">Sena Kalyan Sangstha</span>
                </div>
                <div class="jvdl-sig">
                    <div class="sig-line"></div>
                    <span>TST White House Ltd.</span>
                    <span class="sig-sub">Authorized Signatory</span>
                </div>
            </div>
            <span class="jv-badge-pill">Officially Certified 2024</span>
        </div>
        <div class="fade-up" style="animation-delay:.15s">
            <div class="section-label">About the JV</div>
            <h2 class="section-title">Revolutionizing Bangladesh's Commodities Business</h2>
            <div class="three-dots"><span></span><span></span><span></span></div>
            <p>The SKS-TST Joint Venture (JV) unites <strong>Sena Kalyan Sangstha (SKS)</strong> and <strong>TST White House Limited</strong> to revolutionize Bangladesh's commodities business.</p>
            <p style="margin-top:16px">This partnership focuses on nationwide distribution and importing essential commodities, fostering economic growth and supply chain resilience. By combining SKS's institutional strength with TST's expertise, the JV aims to set new industry benchmarks, ensuring quality, efficiency, and global trade integration for a sustainable and prosperous future.</p>
            <div class="jv-partner-info">
                <div class="jpi-item">
                    <h5>SKS Address</h5>
                    <p>{{ $jvDetails['address'] }}</p>
                </div>
                <div class="jpi-item">
                    <h5>JV Focus</h5>
                    <p>{{ $jvDetails['focus'] }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- BENEFITS --}}
<section class="section section-gray">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">JV Advantages</div>
            <h2 class="section-title">Why This Partnership Works</h2>
        </div>
        <div class="benefits-full-grid fade-up">
            @foreach($benefits as $b)
            <div class="bfg-card">
                <div class="bfg-icon">{{ $b['icon'] }}</div>
                <h4>{{ $b['title'] }}</h4>
                <p>{{ $b['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- IMPORT PARTNERS MAP --}}
<section class="section">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Global Network</div>
            <h2 class="section-title">Our Import Partner Countries</h2>
            <p class="section-desc">TST White House sources commodities from a trusted network spanning 8 global regions.</p>
        </div>
        <div class="import-partners-grid fade-up">
            @foreach($importPartners as $ip)
            <div class="ip-card">
                <h4>{{ $ip['region'] }}</h4>
                <div class="ip-countries">
                    @foreach($ip['countries'] as $c)
                    <span class="ip-country">{{ $c }}</span>
                    @endforeach
                </div>
                <p class="ip-products">{{ $ip['products'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FINANCIAL BACKING --}}
<section class="section section-dark">
    <div class="container two-col">
        <div class="fade-up">
            <div class="section-label" style="color:var(--orange)">Financial Strength</div>
            <h2 class="section-title" style="color:white">Backed by NCC Bank</h2>
            <p style="color:rgba(255,255,255,.8); margin-bottom:20px">TST White House Ltd. maintains a well-conducted current account with National Credit and Commerce Bank PLC (NCC Bank) and has demonstrated significant financial capacity.</p>
            <ul class="fin-list">
                <li>Capable of completing/performing any kind of construction works and supply orders up to <strong>BDT 500 Crore</strong></li>
                <li>Credit facilities including LC &amp; Bank Guarantee available for large supply/work orders</li>
                <li>Certified financially sound and solvent by NCC Bank (April 2024)</li>
                <li>Letter of Comfort issued for credit line operations (August 2024)</li>
            </ul>
        </div>
        <div class="fin-card fade-up" style="animation-delay:.15s">
            <div class="fc-logo">🏦</div>
            <h4>NCC Bank PLC</h4>
            <p>National Credit and Commerce Bank</p>
            <div class="fc-stats">
                <div class="fc-stat"><span class="fcs-v">BDT 500 Cr</span><span class="fcs-l">Credit Capacity</span></div>
                <div class="fc-stat"><span class="fcs-v">LC &amp; BG</span><span class="fcs-l">Facilities Available</span></div>
            </div>
            <p class="fc-note">Baridhara Branch · Gulshan North Avenue · Dhaka-1212</p>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container cta-inner">
        <h2>Interested in a partnership with TST White House?</h2>
        <p>We welcome discussions about supply partnerships, joint ventures, and long-term commodity agreements.</p>
        <a href="{{ route('contact') }}" class="btn btn-white">Get in Touch</a>
    </div>
</section>

@endsection
