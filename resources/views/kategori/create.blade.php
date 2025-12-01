@extends('app')
@section('content')

<form action="{{ route('kategori.store') }}" method="POST">
    @csrf
    <div class="col-md-6">
        <div class="card mb-4">
            <h5 class="card-header">Tambah Kategori</h5>
            <div class="card-body">
                <div>
                    <label for="defaultFormControlInput" class="form-label">Name</label>
                    <input type="text" class="form-control" id="defaultFormControlInput" name="nama" placeholder="Masukkan Kategori"
                        aria-describedby="defaultFormControlHelp">
                    
                </div>
                <button class="btn btn-success mt-2" type="submit">Simpan</button>
                <a href="{{ route('kategori.index') }}" class="btn btn-secondary mt-2 ">Kembali</a>
            </div>
        </div>
    </div>
    </form>
@endsection