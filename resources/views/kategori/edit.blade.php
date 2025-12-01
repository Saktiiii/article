@extends('app')

@section('content')

<div class="col-md-6">
    <div class="card mb-4">
        <h5 class="card-header">Edit Kategori</h5>
        <div class="card-body">
            <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Kategori</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="nama" 
                        name="nama" 
                        value="{{ old('nama', $kategori->nama) }}" 
                        placeholder="Masukkan Kategori" 
                        required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('kategori.index') }}" class="btn btn-secondary ms-2">Kembali</a>
            </form>
        </div>
    </div>
</div>

@endsection
    