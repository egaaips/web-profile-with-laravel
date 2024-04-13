<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\service;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $beritas = service::orderBy('id', 'desc');

        return view('layanan.index', compact('beritas'));
    }

    public function show($id)
    {
        $services = service::findOrFail($id);

        return view('layanan.show', compact('services'));
    }
}
