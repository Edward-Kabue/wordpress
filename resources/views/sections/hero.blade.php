@php
$heroType = get_field('hero_type') ?? 'simple';
$heroClass = match($heroType) {
    'video' => 'hero-video',
    'slider' => 'hero-slider-layout',
    default => ''
};
@endphp

<div class="hero {{ $heroClass }}">
    @if($heroType === 'simple')
        @if($background = get_field('hero_background'))
            <style>
                .hero { background-image: url('{{ $background }}'); }
            </style>
        @endif
    @endif

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-10">
                <div class="hero-content">
                    @if($subtitle = get_field('hero_subtitle'))
                        <div class="hero-tagline">{{ $subtitle }}</div>
                    @endif
                    
                    @if($title = get_field('hero_title'))
                        <h1>{{ $title }}</h1>
                    @endif
                    
                    @if($description = get_field('hero_description'))
                        <p>{{ $description }}</p>
                    @endif
                    
                    <div class="hero-buttons">
                        @if($primaryButton = get_field('hero_primary_button'))
                            <a href="{{ $primaryButton['link'] }}" class="btn-primary">
                                {{ $primaryButton['text'] }}
                            </a>
                        @endif
                        
                        @if($secondaryButton = get_field('hero_secondary_button'))
                            <a href="{{ $secondaryButton['link'] }}" class="btn-secondary">
                                {{ $secondaryButton['text'] }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="scrolling-text">
    <div class="scroll-wrapper">
        <div class="scroll-content">
            @foreach(['CAPPUCCINO', 'MOCHA', 'MACCHIATO', 'COLD BREW', 'ESPRESSO', 'AMERICANO', 'LATTE'] as $item)
                <span>{{ $item }}</span>
                <span class="separator">★</span>
            @endforeach
        </div>
    </div>
</div>


