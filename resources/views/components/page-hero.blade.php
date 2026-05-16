@props(['title', 'subtitle' => '', 'breadcrumb' => []])

<section class="page-hero">
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-inner">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            @foreach($breadcrumb as $crumb)
                <span class="bc-sep">›</span>
                @if($loop->last)
                    <span class="bc-current">{{ $crumb['label'] }}</span>
                @else
                    <a href="{{ $crumb['url'] }}">{{ $crumb['label'] }}</a>
                @endif
            @endforeach
        </nav>
        <h1 class="page-hero-title">{{ $title }}</h1>
        @if($subtitle)
            <p class="page-hero-subtitle">{{ $subtitle }}</p>
        @endif
    </div>
    <div class="page-hero-pattern"></div>
</section>
