@extends('layouts.app')
@section('title', 'Construction & Industrial Materials')
@section('meta_desc', 'TST White House — GABBRO stone, coal, bitumen, sand & Indian Pakur stone for Bangladesh construction and infrastructure projects.')

@section('content')

<x-page-hero
    title="Industrial & Construction Materials"
    subtitle="Premium stone, coal, bitumen & sand — building Bangladesh's infrastructure with superior materials."
    :breadcrumb="[['label'=>'Products','url'=>route('products')],['label'=>'Construction Materials','url'=>route('products.construction')]]"
/>

<section class="section">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Construction Materials</div>
            <h2 class="section-title">We Trade More: Industrial &amp; Construction Portfolio</h2>
            <p class="section-desc">From GABBRO stone to bitumen — TST White House is Bangladesh's trusted source for all construction material needs.</p>
        </div>
        <div class="materials-grid fade-up">
            @foreach($materials as $mat)
            <div class="material-card">
                <div class="mat-top">
                    <div class="mat-icon">{{ $mat['icon'] }}</div>
                    <span class="mat-badge">{{ $mat['badge'] }}</span>
                </div>
                <h3>{{ $mat['name'] }}</h3>
                <p>{{ $mat['desc'] }}</p>
                <div class="mat-specs">
                    <h5>Specifications</h5>
                    <ul>
                        @foreach($mat['specs'] as $spec)
                        <li>{{ $spec }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- STONE HIGHLIGHT --}}
<section class="section section-dark">
    <div class="container two-col">
        <div class="fade-up">
            <div class="section-label" style="color:var(--orange)">Flagship Product</div>
            <h2 class="section-title" style="color:white">Dubai Black Stone (GABBRO)</h2>
            <p style="color:rgba(255,255,255,.8); margin-bottom:20px">As direct importers of high-grade Dubai black stone (GABBRO), TST White House Ltd. has the capacity to supply up to 150,000 metric tons of stone per month — making us one of Bangladesh's most significant stone suppliers.</p>
            <p style="color:rgba(255,255,255,.8); margin-bottom:32px">GABBRO stone is a coarse-grained mafic igneous rock, prized for its hardness, durability, and aesthetic qualities. Widely used in road construction, building foundations, and decorative applications.</p>
            <div class="stone-specs-list">
                <div class="ssl-item"><span class="ssl-label">Capacity</span><span class="ssl-val">150,000 MT / Month</span></div>
                <div class="ssl-item"><span class="ssl-label">Origin</span><span class="ssl-val">Dubai, UAE</span></div>
                <div class="ssl-item"><span class="ssl-label">Grade</span><span class="ssl-val">High-Grade GABBRO</span></div>
                <div class="ssl-item"><span class="ssl-label">Import Type</span><span class="ssl-val">Direct Import</span></div>
                <div class="ssl-item"><span class="ssl-label">Application</span><span class="ssl-val">Road, Foundation, Infrastructure</span></div>
            </div>
        </div>
        <div class="stone-visual fade-up" style="animation-delay:.15s">
            <div class="sv-card">
                <div class="sv-icon">🪨</div>
                <h3>150,000 MT</h3>
                <p>Monthly Supply Capacity</p>
                <div class="sv-divider"></div>
                <p class="sv-sub">Direct importer — no middleman. Consistent quality. Reliable monthly delivery to Bangladesh.</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container cta-inner">
        <h2>Need construction materials for your project?</h2>
        <p>Contact us to discuss volume requirements, pricing, and delivery schedules.</p>
        <a href="{{ route('contact') }}" class="btn btn-white">Get a Quote</a>
    </div>
</section>

@endsection
