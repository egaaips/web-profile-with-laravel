@extends('layouts.template')

@section('judul')
    Profil
@endsection

@section('main')
    <header class="bg-web text-white text-center py-5">
        <br><br><h1>Dinas Perikanan Kabupaten Bekasi</h1>
    </header>

    @yield('main-profile')
@endsection