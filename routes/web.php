<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LayananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profile.sejarah');
});

Route::get('/profil/visi-misi', function () {
    return view('profile.visi-misi');
});

Route::get('/profil/struktur-organisasi', function () {
    return view('profile.struktur-organisasi');
});

Route::get('/profil/tugas-fungsi', function () {
    return view('profile.tugas-fungsi');
});

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/berita/kategori/{category}', [BeritaController::class, 'showByCategory'])->name('berita.showByCategory');

Route::get('/galeri', function () {
    return view('galeri.index');
});

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');
Route::get('/layanan/{id}', [LayananController::class, 'show'])->name('layanan.show');


Route::get('/informasi', function () {
    return view('informasi.index');
});

Route::get('/kontak', function () {
    return view('kontak.index');
});