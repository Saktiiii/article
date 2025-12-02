<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artikel;
use App\Models\Kategori;

class BlogController extends Controller
{
    // Tampilkan daftar artikel publik dengan pagination
    public function index()
    {
        $artikelTerbaru = Artikel::with('kategori')->latest()->take(8)->get();
        $artikelList = Artikel::with('kategori')->latest()->paginate(6);
        $kategoris = Kategori::withCount('artikels')->get();

        return view('index', [
            'artikelTerbaru' => $artikelTerbaru,
            'artikels' => $artikelList,
            'kategoris' => $kategoris,
        ]);
    }

    // Tampilkan detail artikel berdasarkan id atau slug
    public function show(Artikel $artikel)
    {
        return view('blog.detail', compact('artikel'));
    }

    public function filterByKategori($slug)
    {
        $kategori = Kategori::where('nama', $slug)->firstOrFail();
        $artikels = Artikel::where('kategori_id', $kategori->id)->paginate(6);
        $kategoris = Kategori::withCount('artikels')->get();

        return view('blog.index', compact('artikels', 'kategoris', 'kategori'));
    }

}