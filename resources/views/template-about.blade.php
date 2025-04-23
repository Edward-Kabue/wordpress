{{--
  Template Name: About Us
--}}

@extends('layouts.app')

@section('content')
  <div class="about-page">
    {{-- Header Section --}}
    <section class="header bg-gray-100 py-16">
      <div class="container mx-auto px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
          {!! get_field('about_title') !!}
        </h1>
        <div class="text-xl">
          {!! get_field('about_subtitle') !!}
        </div>
      </div>
    </section>

    {{-- Our Story --}}
    <section class="our-story py-16">
      <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
          <div class="story-content">
            <h2 class="text-3xl font-bold mb-6">{{ get_field('story_title') }}</h2>
            <div class="prose">
              {!! get_field('story_content') !!}
            </div>
          </div>
          <div class="story-image">
            @if ($image = get_field('story_image'))
              <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="rounded-lg shadow-lg">
            @endif
          </div>
        </div>
      </div>
    </section>

    {{-- Team Section --}}
    <section class="team bg-gray-100 py-16">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-12 text-center">{{ get_field('team_section_title') }}</h2>
        <div class="grid md:grid-cols-3 gap-8">
          @if (have_rows('team_members'))
            @while (have_rows('team_members')) @php(the_row())
              <div class="team-member text-center">
                @if ($member_image = get_sub_field('image'))
                  <img src="{{ $member_image['url'] }}" alt="{{ $member_image['alt'] }}" class="rounded-full w-48 h-48 object-cover mx-auto mb-4">
                @endif
                <h3 class="text-xl font-bold">{{ get_sub_field('name') }}</h3>
                <p class="text-gray-600">{{ get_sub_field('position') }}</p>
                <p class="mt-4">{{ get_sub_field('bio') }}</p>
              </div>
            @endwhile
          @endif
        </div>
      </div>
    </section>

    {{-- Main Content --}}
    <section class="content py-16">
      <div class="container mx-auto px-4">
        @while(have_posts()) @php(the_post())
          @php(the_content())
        @endwhile
      </div>
    </section>
  </div>
@endsection