{{--
  Template Name: Contact Us
--}}

@extends('layouts.app')

@section('content')
  <div class="contact-page">
    {{-- Header Section --}}
    <section class="header bg-gray-100 py-16">
      <div class="container mx-auto px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
          {!! get_field('contact_title') !!}
        </h1>
        <div class="text-xl">
          {!! get_field('contact_description') !!}
        </div>
      </div>
    </section>

    {{-- Contact Information --}}
    <section class="contact-info py-16">
      <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12">
          {{-- Contact Form --}}
          <div class="contact-form">
            <h2 class="text-2xl font-bold mb-6">{{ get_field('form_title') }}</h2>
            {!! do_shortcode('[contact-form-7 id="' . get_field('contact_form_id') . '"]') !!}
          </div>

          {{-- Contact Details --}}
          <div class="contact-details bg-gray-100 p-8 rounded-lg">
            <h2 class="text-2xl font-bold mb-6">{{ get_field('details_title') }}</h2>
            
            <div class="mb-6">
              <h3 class="font-bold mb-2">Address:</h3>
              {!! get_field('address') !!}
            </div>

            <div class="mb-6">
              <h3 class="font-bold mb-2">Phone:</h3>
              <a href="tel:{{ get_field('phone') }}" class="text-primary">
                {{ get_field('phone') }}
              </a>
            </div>

            <div class="mb-6">
              <h3 class="font-bold mb-2">Email:</h3>
              <a href="mailto:{{ get_field('email') }}" class="text-primary">
                {{ get_field('email') }}
              </a>
            </div>

            @if (get_field('google_maps_embed'))
              <div class="mt-8">
                <div class="aspect-w-16 aspect-h-9">
                  {!! get_field('google_maps_embed') !!}
                </div>
              </div>
            @endif
          </div>
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