@extends('layouts.template')

@section('judul')
    Informasi
@endsection

@section('main')
    <header class="bg-web text-white text-center py-5">
        <br><br><h1>Informasi dan Pengumuman</h1>
    </header>
    <section>
        <div class="container mt-5">
            <!-- Pengumuman 1 -->
            <div class="alert alert-info mt-3" role="alert">
                <h4 class="alert-heading">Pengumuman Penting!</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <hr>
                <p class="mb-0">Terima kasih atas perhatiannya.</p>
            </div>

            <!-- Pengumuman 2 -->
            <div class="alert alert-warning mt-3" role="alert">
                <h4 class="alert-heading">Perubahan Jadwal Kegiatan</h4>
                <p>Informasi bahwa jadwal kegiatan akan mengalami perubahan pada tanggal tertentu. Mohon diperhatikan.</p>
                <hr>
                <p class="mb-0">Terima kasih atas kerjasamanya.</p>
            </div>
        </div>

    </section>
@endsection