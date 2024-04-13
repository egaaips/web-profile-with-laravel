<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = news::orderBy('id', 'desc')->paginate(5);
        $recentPosts = news::latest()->take(3)->get();

        return view('berita.index', compact('beritas', 'recentPosts'));
    }


    public function show($id)
    {
        $berita = news::findOrFail($id);
        $recentPosts = news::latest()->take(3)->get();

        return view('berita.show', compact('berita', 'recentPosts'));
    }
    
    public function showByCategory($category)
    {
        $berita = news::all();
        $beritas = news::where('category', $category)->paginate(5);
        $recentPosts = news::latest()->take(3)->get();

        return view('berita.showByCategory', compact('berita','beritas', 'recentPosts'));
    }


}
