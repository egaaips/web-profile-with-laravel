@extends('layouts.template')

@section('judul')
    Detail Layanan
@endsection

@section('main')
<header class="bg-dark text-white text-center py-5 bg-blog">
    <br><br><h1>Layanan</h1>
</header>

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs" style="margin: -20px">
    <div class="container">
        <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/layanan') }}">Layanan</a></li>
            <li>Detail</a></li>
        </ol>
        @if ($services)
            <h2>{{ $services->title }}</h2>
        @else
            <p>Judul Berita tidak ditemukan.</p>
            @endif
        </div>
    </section><!-- End Breadcrumbs -->

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="service">
                <p>{!! $services->content !!}</p>
            </div>
        </div>
    </section>
@endsection
    