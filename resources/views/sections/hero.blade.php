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
                .hero { 
                    background-image: url('{{ $background }}');
                    background-size: cover;
                    background-position: center;
                }
            </style>
        @endif
    @endif

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-10">
                <div class="hero-content text-white">
                    @if($subtitle = get_field('hero_subtitle'))
                        <div class="hero-tagline text-sm uppercase tracking-wider mb-4">
                            <i class="fas fa-coffee mr-2"></i>{{ $subtitle }}
                        </div>
                    @endif
                    
                    @if($title = get_field('hero_title'))
                        <h1 class="text-6xl font-serif mb-6 leading-tight">{{ $title }}</h1>
                    @endif
                    
                    @if($description = get_field('hero_description'))
                        <p class="text-lg opacity-90 mb-8 max-w-2xl">{{ $description }}</p>
                    @endif
                    
                    <div class="hero-buttons flex gap-4">
                        @if($primaryButton = get_field('hero_primary_button'))
                            <a href="{{ $primaryButton['link'] }}" class="btn-primary bg-[#C8A27A] hover:bg-[#B69068] text-white px-8 py-3 rounded-full transition duration-300">
                                {{ $primaryButton['text'] }}
                            </a>
                        @endif
                        
                        @if($secondaryButton = get_field('hero_secondary_button'))
                            <a href="{{ $secondaryButton['link'] }}" class="btn-secondary border-2 border-white text-white px-8 py-3 rounded-full hover:bg-white hover:text-black transition duration-300">
                                {{ $secondaryButton['text'] }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="scrolling-text bg-[#C8A27A] py-4 overflow-hidden">
    <div class="scroll-wrapper">
        <div class="scroll-content flex animate-scroll whitespace-nowrap">
            @foreach(['CAPPUCCINO', 'MOCHA', 'MACCHIATO', 'COLD BREW', 'ESPRESSO', 'AMERICANO', 'LATTE'] as $item)
                <span class="mx-4 text-white">{{ $item }}</span>
                <span class="text-white mx-2">★</span>
            @endforeach
        </div>
    </div>
</div>



