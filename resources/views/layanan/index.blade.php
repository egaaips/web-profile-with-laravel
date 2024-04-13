@php
    $service = get_service();
@endphp

@extends('layouts.template')

@section('judul')
    Layanan
@endsection

@section('main')
    <header class="bg-service text-white text-center py-5">
        <br><br><h1>Layanan</h1>
    </header>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
  
          {{-- <div class="section-title">
            <h2>Layanan</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div> --}}
  
          <div class="row d-flex">
            @foreach($service as $services)
                <div class="col-xl-3 col-md-6 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="{{ route('layanan.show', $services->id) }}">{{ $services->title }}</a></h4>
                    </div>
                </div>
            @endforeach
          </div>
  
        </div>
      </section><!-- End Services Section -->
@endsection