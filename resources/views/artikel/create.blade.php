@extends('app')

@section('content')
<div class="col-md-8">
    <div class="card mb-4">
        <h5 class="card-header">Tambah Artikel</h5>
        <div class="card-body">
            <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" required value="{{ old('judul') }}">
                </div>

                <div class="mb-3">
                    <label for="kategori_id" class="form-label">Kategori</label>
                    <select class="form-select" id="kategori_id" name="kategori_id" required>
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}" {{ old('kategori_id') == $kategori->id ? 'selected' : '' }}>
                            {{ $kategori->nama }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Artikel</label>
                    <textarea class="form-control" id="isi" name="isi" rows="5" required>{{ old('isi') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar (jpg, png, max 2MB)</label>
                    <input class="form-control" type="file" id="gambar" name="gambar" accept="image/*">
                </div>

                <div class="mb-3">
                    <label for="video" class="form-label">Video (mp4, avi, max 10MB)</label>
                    <input class="form-control" type="file" id="video" name="video" accept="video/*">
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('artikel.index') }}" class="btn btn-secondary ms-2">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
