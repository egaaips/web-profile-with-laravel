@php
    $struktur = profile_data('_struktur_organisasi');
@endphp
@extends('profile.profile')

@section('main-profile')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" style="margin: -20px">
      <div class="container">
          <ol>
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ url('/profil') }}">Profile</a></li>
              <li>{{ $struktur->title }}</li>
          </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>{{ $struktur->title }}</h2>
          </div>
          <div class="d-flex">
            <img src="{{ Storage::url($struktur->img) }}" alt="struktur organisasi" class="mx-auto">
          </div>
          
  
        </div>
      </section><!-- End About Us Section -->
@endsection