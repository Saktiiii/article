@extends('app')

@section('content')
<div class="col-md-8">
    <div class="card mb-4">
        <h5 class="card-header">Edit Artikel</h5>
        <div class="card-body">
            <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" required value="{{ old('judul', $artikel->judul) }}">
                </div>

                <div class="mb-3">
                    <label for="kategori_id" class="form-label">Kategori</label>
                    <select class="form-select" id="kategori_id" name="kategori_id" required>
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}" {{ old('kategori_id', $artikel->kategori_id) == $kategori->id ? 'selected' : '' }}>
                            {{ $kategori->nama }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Artikel</label>
                    <textarea class="form-control" id="isi" name="isi" rows="5" required>{{ old('isi', $artikel->isi) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar (jpg, png, max 2MB)</label>
                    <input class="form-control" type="file" id="gambar" name="gambar" accept="image/*">
                    @if($artikel->gambar)
                    <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="Gambar" class="img-thumbnail mt-2" style="max-width: 200px;">
                    @endif
                </div>

                <div class="mb-3">
                    <label for="video" class="form-label">Video (mp4, avi, max 10MB)</label>
                    <input class="form-control" type="file" id="video" name="video" accept="video/*">
                    @if($artikel->video)
                    <video controls class="mt-2" style="max-width: 300px;">
                        <source src="{{ asset('storage/' . $artikel->video) }}" type="video/mp4">
                        Browser Anda tidak mendukung video.
                    </video>
                    @endif
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('artikel.index') }}" class="btn btn-secondary ms-2">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
