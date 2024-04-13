@php
    $gallery = get_galeri();
@endphp
@extends('layouts.template')

@section('judul')
    Galeri
@endsection

@section('main')
    <header class="bg-web text-white text-center py-5">
        <br><br><h1>GALERI</h1>
    </header>
    <div class="container">
        <!-- ======= Galeri Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
      
              <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                @foreach (array_unique($gallery->pluck('label')->toArray()) as $label)
                    <li data-filter=".filter-{{ $label }}">{{ $label }}</li>
                @endforeach
            </ul>
            
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($gallery->sortByDesc('id') as $galeri)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $galeri->label }}">
                    <div class="portfolio-img"><img src="{{ Storage::url($galeri->img) }}" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>{{ $galeri->title }}</h4>
                        <p>{{ $galeri->label }}</p>
                        <a href="{{ Storage::url($galeri->img) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $galeri->caption }}"><i class="bx bx-plus"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
      
            </div>
          </section>
          <!-- End Galeri Section -->
    </div>
@endsection