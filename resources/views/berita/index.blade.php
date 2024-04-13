@extends('layouts.template')

@section('judul')
    Berita
@endsection

@section('main')
    <!-- ======= Header Section ======= -->   
      <header class="bg-blog text-white text-center py-5" data-aos="zoom-out" data-aos-delay="10">
          <br><br><h1>Blog Kami</h1>
          <p class="lead">Berita Terbaru dan Informasi Menarik</p>
      </header>
    <!-- ======= End Header Section ======= -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">          
          <div class="col-lg-8 entries">
        <!-- ======= Blog Entry List ======= -->
          @foreach ($beritas as $berita)
            <article class="entry">
              <div class="entry-img">
                <img src="{{ Storage::url($berita->image) }}" alt="" class="img-fluid">
              </div>
              <h2 class="entry-title">
                <a href="{{ route('berita.show', $berita->id) }}">{{ $berita->title }}</a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ route('berita.show', $berita->id) }}">{{ $berita->author }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('berita.show', $berita->id) }}"><time datetime="2020-01-01">{{ $berita->created_at->format('d F Y') }}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {!! \Illuminate\Support\Str::limit(strip_tags($berita->content), 200) !!}
                </p>
                <div class="read-more">
                  <a href="{{ route('berita.show', $berita->id) }}">Read More</a>
                </div>
              </div>

            </article>
          @endforeach
        <!-- ======= End Blog Entry List ======= -->

          <!-- ======= Pagination ======= -->  
          <div class="blog-pagination">
            {!! $beritas->links() !!}
          </div>
     

          </div>
        <!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">
              
              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Kategori</h3>
                  <div class="sidebar-item categories">
                    <ul>
                        @php
                        // Mendapatkan kategori unik dari beritas
                        $categories = $berita->pluck('category')->unique();
                        @endphp

                        @foreach ($categories as $category)
                        <!-- Menghitung jumlah berita dalam setiap kategori -->
                        @php
                            $count = $berita->where('category', $category)->count();
                        @endphp

                        <li><a href="{{ route('berita.showByCategory', ['category' => $category]) }}">{{ $category }} <span>({{ $count }})</span></a></li>
                        @endforeach
                    </ul>
                  </div>
              
              <!-- End sidebar categories -->

              <h3 class="sidebar-title">Berita Terbaru</h3>
              <div class="sidebar-item recent-posts">
                  @foreach ($recentPosts as $recentPost)
                      <div class="post-item clearfix">
                          <img src="{{ Storage::url($recentPost->image) }}" alt="">
                          <h4><a href="{{ route('berita.show', $recentPost->id) }}">{{ $recentPost->title }}</a></h4>
                          <time datetime="2020-01-01">{{ $recentPost->created_at->format('d M Y') }}</time>
                      </div>
                  @endforeach
              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->
              
            
          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@endsection