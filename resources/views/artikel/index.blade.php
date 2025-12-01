@extends('app')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>Daftar Artikel</h5>
        <a href="{{ route('artikel.create') }}" class="btn btn-primary">
            <i class="bx bx-plus"></i> Tambah Artikel
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>Video</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($artikels as $index => $artikel)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $artikel->judul }}</td>
                    <td>{{ $artikel->kategori->nama }}</td>
                    <td>
                        @if($artikel->gambar)
                            <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="Gambar" style="max-width: 100px;">
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        @if($artikel->video)
                            <video width="150" controls>
                                <source src="{{ asset('storage/' . $artikel->video) }}" type="video/mp4">
                                Browser tidak mendukung video.
                            </video>
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('artikel.edit', $artikel->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('artikel.destroy', $artikel->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin hapus artikel ini?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada artikel</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{ $artikels->links() }}
    </div>
</div>
@endsection
