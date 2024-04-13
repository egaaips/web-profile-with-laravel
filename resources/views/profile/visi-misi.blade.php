@php
    $visi = profile_data('_visi');
    $misi = profile_data('_misi');
@endphp
@extends('profile.profile')

@section('main-profile')
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          {{-- <div class="section-title">
            <h2>{{ $visi->title }} dan {{ $misi->title }}</h2>
          </div> --}}
  
          <div class="row content">
            <div class="col-lg-6">
              <div class="section-title">
                <h2>{{ $visi->title }}</h2>
              </div>
              <p>
                {!! $visi->content !!}
              </p>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <div class="section-title">
                <h2>{{ $misi->title }}</h2>
              </div>
              <p>
                {!! $misi->content !!}
              </p>
            </div>
          </div>
  
        </div>
      </section><!-- End About Us Section -->
@endsection