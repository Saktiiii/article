<?php
namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::with('kategori')->latest()->paginate(10);
        return view('artikel.index', compact('artikels'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('artikel.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'kategori_id' => 'required|exists:kategoris,id',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:10240',
        ]);

        $data = $request->only('judul', 'isi', 'kategori_id');

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('artikels/gambar', 'public');
        }

        if ($request->hasFile('video')) {
            $data['video'] = $request->file('video')->store('artikels/video', 'public');
        }

        Artikel::create($data);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dibuat.');
    }

    public function edit(Artikel $artikel)
    {
        $kategoris = Kategori::all();
        return view('artikel.edit', compact('artikel', 'kategoris'));
    }

    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'kategori_id' => 'required|exists:kategoris,id',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:10240',
        ]);

        $data = $request->only('judul', 'isi', 'kategori_id');

        if ($request->hasFile('gambar')) {
            if ($artikel->gambar) {
                Storage::disk('public')->delete($artikel->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('artikels/gambar', 'public');
        }

        if ($request->hasFile('video')) {
            if ($artikel->video) {
                Storage::disk('public')->delete($artikel->video);
            }
            $data['video'] = $request->file('video')->store('artikels/video', 'public');
        }

        $artikel->update($data);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diupdate.');
    }

    

    public function destroy(Artikel $artikel)
    {
        if ($artikel->gambar) {
            Storage::disk('public')->delete($artikel->gambar);
        }
        if ($artikel->video) {
            Storage::disk('public')->delete($artikel->video);
        }

        $artikel->delete();

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
