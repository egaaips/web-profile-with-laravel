@extends('profile.profile')

@php
    $tugasfungsi = profile_data('_tugas_fungsi');
@endphp
@section('main-profile')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" style="margin: -20px">
      <div class="container">
          <ol>
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ url('/profil') }}">Profile</a></li>
              <li>{{ $tugasfungsi->title }}</li>
          </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>{{ $tugasfungsi->title }}</h2>
          </div>
  
          <div>
            {{-- <h5 class="fw-bold text-justify">Sesuai Peraturan Gubernur Jawa Barat Nomor 60 Tahun 2017 
              tentang Tugas Pokok, Fungsi, Rincian Tugas Unit dan Tata Kerja 
              Dinas Kelautan dan Perikanan Provinsi Pemerintah Daerah Jawa Barat 
              adalah sebagai berikut:</h5> --}}
            <p>
              {!! $tugasfungsi->content !!}
            </p>
          </div>
  
        </div>
      </section><!-- End About Us Section -->
@endsection