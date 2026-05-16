@extends('layouts.app')
@section('title', 'About Us')
@section('meta_desc', 'Learn about TST White House Ltd. — founded in 2023 in Dhaka, Bangladesh. Our story, mission, vision, values and milestones.')

@section('content')

<x-page-hero
    title="About TST White House"
    subtitle="Bangladesh's trusted essential commodities and construction materials trading company."
    :breadcrumb="[['label' => 'About Us', 'url' => route('about')]]"
/>

{{-- COMPANY OVERVIEW --}}
<section class="section">
    <div class="container two-col">
        <div class="fade-up">
            <div class="section-label">Who We Are</div>
            <h2 class="section-title">A Leading Trading Company in Bangladesh</h2>
            <div class="three-dots"><span></span><span></span><span></span></div>
            <p>TST White House Ltd., established in 2023, is a leading trading and real estate company headquartered in Dhaka, Bangladesh. Renowned for its commitment to quality and reliability, the company has rapidly become a significant player in the industry.</p>
            <p style="margin-top:16px">TST White House has substantial experience in commodity trading, having successfully managed the trade of 50,000 metric tons of lentils, 32,900,000 liters of soybean oil, 60,000 metric tons of sugar, and 20,000 metric tons of salt.</p>
            <p style="margin-top:16px">As direct importers of high-grade Dubai black stone (GABBRO), TST White House Ltd. has the capacity to supply up to 150,000 metric tons of stone per month. Their extensive portfolio also includes essential construction materials such as Bitumen imported from Dubai, Indian Pakur Stone, Local Sand, and Coal.</p>
        </div>
        <div class="about-stats-vert fade-up" style="animation-delay:.15s">
            @foreach($commodityStats as $s)
            <div class="asv-item">
                <span class="asv-icon">{{ $s['icon'] }}</span>
                <span class="asv-val">{{ $s['value'] }}</span>
                <span class="asv-lbl">{{ $s['label'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- VISION MISSION --}}
<section class="section section-gray">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Vision &amp; Mission</div>
            <h2 class="section-title">Our Direction &amp; Purpose</h2>
        </div>
        <div class="vm-grid fade-up">
            <div class="vm-card vm-card--vision">
                <div class="vm-icon">🎯</div>
                <h3>Vision</h3>
                <p>To lead the trading industry by delivering top-quality stone, coal, sand, and bitumen. We aim to set the standard for excellence, fostering growth through reliable supply and strong client partnerships, contributing to the infrastructure development of Bangladesh and beyond, with a focus on sustainability and innovation.</p>
            </div>
            <div class="vm-card vm-card--mission">
                <div class="vm-icon">🚀</div>
                <h3>Mission</h3>
                <p>Our mission is to supply premium construction materials — stone, coal, sand, and bitumen — ensuring consistent quality and reliability. We are dedicated to meeting the evolving needs of our clients with exceptional service and timely delivery. By embracing innovation and sustainable practices, we aim to build long-lasting partnerships and support the infrastructure development of Bangladesh and the broader region.</p>
            </div>
        </div>
    </div>
</section>

{{-- CORE VALUES --}}
<section class="section">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Core Values</div>
            <h2 class="section-title">What Drives Us</h2>
        </div>
        <div class="values-grid fade-up">
            @foreach($values as $v)
            <div class="value-card">
                <div class="vc-icon">{{ $v['icon'] }}</div>
                <h4>{{ $v['title'] }}</h4>
                <p>{{ $v['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- MILESTONES --}}
<section class="section section-gray">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Our Journey</div>
            <h2 class="section-title">Key Milestones</h2>
        </div>
        <div class="timeline fade-up">
            @foreach($milestones as $i => $m)
            <div class="timeline-item {{ $i % 2 == 0 ? 'tl-left' : 'tl-right' }}">
                <div class="tl-year">{{ $m['year'] }}</div>
                <div class="tl-dot"></div>
                <div class="tl-content">
                    <h4>{{ $m['title'] }}</h4>
                    <p>{{ $m['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- TEAM --}}
<section class="section">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Our Team</div>
            <h2 class="section-title">The People Behind TST</h2>
            <p class="section-desc">Our expert team of commodity traders, logistics specialists, and quality assurance professionals work together to deliver excellence.</p>
        </div>
        <div class="team-grid fade-up">
            @foreach($team as $t)
            <div class="team-card">
                <div class="tc-icon">{{ $t['icon'] }}</div>
                <h4>{{ $t['name'] }}</h4>
                <span class="tc-role">{{ $t['role'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CERTIFICATIONS --}}
<section class="section section-dark">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label" style="color:var(--orange)">Legal &amp; Financial</div>
            <h2 class="section-title" style="color:white">Company Incorporation &amp; Financials</h2>
        </div>
        <div class="cert-grid fade-up">
            <div class="cert-card">
                <div class="cert-icon">📜</div>
                <h4>Certificate of Incorporation</h4>
                <p>Incorporated under the Companies Act (Act XVIII of 1994)</p>
                <span class="cert-no">No. C-192161/2023 · 15 November 2023</span>
                <span class="cert-body">Registrar of Joint Stock Companies &amp; Firms, Bangladesh</span>
            </div>
            <div class="cert-card">
                <div class="cert-icon">🏦</div>
                <h4>NCC Bank — Financial Standing</h4>
                <p>Certified financially sound and solvent. Capable of handling large-scale work orders up to BDT 500 Crore.</p>
                <span class="cert-no">NCCB/BARI/CR/2024/543 · April 18, 2024</span>
                <span class="cert-body">National Credit and Commerce Bank PLC</span>
            </div>
            <div class="cert-card">
                <div class="cert-icon">💳</div>
                <h4>NCC Bank — Letter of Comfort</h4>
                <p>Credit facilities (LC &amp; Bank Guarantee) for supply/work orders up to BDT 500 Crore.</p>
                <span class="cert-no">NCCB/BARI/CR/2024/1076 · August 28, 2024</span>
                <span class="cert-body">National Credit and Commerce Bank PLC</span>
            </div>
            <div class="cert-card">
                <div class="cert-icon">🪪</div>
                <h4>Trade License</h4>
                <p>Registered trade license from Dhaka North City Corporation.</p>
                <span class="cert-no">TRAD/DNCC/029301/2023</span>
                <span class="cert-body">Dhaka North City Corporation (DNCC)</span>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="cta-banner">
    <div class="container cta-inner">
        <h2>Ready to work with us?</h2>
        <p>Explore our product range or get in touch for a custom supply agreement.</p>
        <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
            <a href="{{ route('products') }}" class="btn btn-white">Our Products</a>
            <a href="{{ route('contact') }}" class="btn btn-orange">Contact Us</a>
        </div>
    </div>
</section>

@endsection
