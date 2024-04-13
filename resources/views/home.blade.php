@php
    $about = profile_data('_tentang_kami');
    $heroes = get_hero();
    $services = get_service();
    $news = get_news();
    $gallery = get_galeri();
@endphp

@extends('layouts.template')

@section('judul')
    Home
@endsection

@section('hero')
  <!-- ======= hero Section ======= -->
  <section id="hero" data-aos="zoom-out" data-aos-delay="10">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            
            <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>
            
            <div class="carousel-inner" role="listbox">
                @foreach($heroes as $key => $hero)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}" style="background-image: url({{ Storage::url($hero->img) }})">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">{{ $hero->title }} </h2>
                                <p class="animate__animated animate__fadeInUp">{{ $hero->caption }}</p>
                                <a href="{{ $hero->link }}" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </div>
  </section>
  <!-- End Hero Section -->
@endsection

@section('main')
    <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients section-bg">
          <div class="container">
    
            <div class="row" data-aos="zoom-in">
    
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('/tema/img/clients/client-1.png') }}" class="img-fluid" alt="">
              </div>
    
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('/tema/img/clients/client-2.png') }}" class="img-fluid" alt="">
              </div>
    
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('/tema/img/clients/client-3.png') }}" class="img-fluid" alt="">
              </div>
    
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('/tema/img/clients/client-4.png') }}" class="img-fluid" alt="">
              </div>
    
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('/tema/img/clients/client-5.png') }}" class="img-fluid" alt="">
              </div>
    
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('/tema/img/clients/client-6.png') }}" class="img-fluid" alt="">
              </div>
    
            </div>
    
          </div>
      </section>
    <!-- End Cliens Section -->

    <!-- ======= About Section ======= -->
      <section id="about" class="about">

        <div class="container" data-aos="fade-up">
          
          <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="section-title">
                <h2>Tentang Kami</h2>
              </div>
              <div class="content">
                <h2>{{ $about->title }}</h2>
                <p>
                  {!! $about->content !!}
                </p>
                <div class="text-center text-lg-start">
                  <a href="{{ url('/profil') }}" class="btn-learn-more d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Read More</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
              <img src="{{ Storage::url($about->img) }}" class="img-fluid" alt="">
            </div>

          </div>
        </div>

      </section>
    <!-- End About Section -->
  
    <!-- ======= Layanan Section ======= -->
      <section id="features" class="features section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Layanan</h2>
          </div>
          
          <div class="row">

            <div class="col-lg-6">
              <img src="{{ url('/tema/img/why-us.png') }}" class="img-fluid" alt="">
            </div>
    
            <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
              <div class="row align-self-center gy-4">

                @foreach ($services->take(6) as $service)
                  <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                    <div class="feature-box d-flex align-items-center">
                      <i class="bi bi-check"></i>
                      <a href="{{ route('layanan.show', $service->id) }}"><h3>{{ $service->title }}</h3></a>
                    </div>
                  </div>
                @endforeach

              </div>
            </div>

          </div>
        </div>
      </section>
    <!-- End Layanan Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
      <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Berita Terbaru</h2>
          </div>

          <div class="row">
            @foreach ($news->sortByDesc('id')->take(3) as $berita)
                
            <div class="col-lg-4">
              <div class="post-box">
                <div class="post-img"><img src="{{ Storage::url($berita->image) }}" class="img-fluid" alt=""></div>
                <span class="post-date">{{ $berita->created_at->format('d F Y') }}</span>
                <h3 class="post-title">{{ $berita->title }}</h3>
                <a href="{{ route('berita.show', $berita->id) }}" class="readmore stretched-link mt-auto">
                <span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            @endforeach
            <div class="footer-berita text-center mt-5">
              <a href="{{ url('berita') }}" class="btn btn-outline-primary">Berita Lainnya</a>
            </div>

          </div>

        </div>

      </section>
    <!-- End Recent Blog Posts Section -->

  
    <!-- ======= Galeri Section ======= -->
      <section id="portfolio" class="portfolio  section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Galeri</h2>
            <p> Selamat Datang di Galeri Dinas Perikanan Kabupaten Bekasi.</p>
          </div>
  
          <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            @foreach (array_unique($gallery->pluck('label')->toArray()) as $label)
                <li data-filter=".filter-{{ $label }}">{{ $label }}</li>
            @endforeach
        </ul>
        
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($gallery->sortByDesc('id')->take(6) as $galeri)
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

    <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

          <div class="row">
            <div class="col-lg-9 text-center text-lg-start">
              <h3>Call To Action</h3>
              <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Call To Action</a>
            </div>
          </div>

        </div>
      </section>
    <!-- End Cta Section -->

    <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Hubungi Kami</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Komplek Perkantoran Pemerintahan <br>
                     Kabupaten Bekasi Gedung A IV Lt. 2
                  </p>
                </div>
  
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>diskanlutbekasikab@gmail.com</p>
                </div>
  
                <div class="phone">
                  <i class="bi bi-instagram"></i>
                  <h4>Instagram:</h4>
                  <p>@diskankabbekasi</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126912.0910513495!2d106.95864254335939!3d-6.263353999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6985470911d575%3A0xe631aa58b329f595!2sDinas%20Perikanan!5e0!3m2!1sid!2sid!4v1706490244430!5m2!1sid!2sid" width="100%" height="290px" style="border:0;" allowfullscreen=""></iframe>
              </div>
  
            </div>
  
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
  
          </div>
  
        </div>
      </section>
    <!-- End Contact Section -->
@endsection