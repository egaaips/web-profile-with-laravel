@php
    $sejarah = profile_data('_sejarah');
@endphp

@extends('profile.profile')

@section('main-profile')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" style="margin: -20px">
      <div class="container">
          <ol>
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ url('/profil') }}">Profile</a></li>
              <li>{{ $sejarah->title }}</li>
          </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Sejarah Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>{{ $sejarah->title }}</h2>
          </div>
  
          <div class="row content">
            <div class="text-center">
              <img src="{{ Storage::url($sejarah->img) }}" alt=""><br><br><br>
            </div>
            <div class="col-lg-12">
              <p>
                {!! strip_tags($sejarah->content) !!}
              </p>
            </div>
          </div>
  
        </div>
      </section><!-- End Sejarah Section -->

@endsection