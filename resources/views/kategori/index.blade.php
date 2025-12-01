@extends('app') {{-- sesuaikan dengan layout utama --}}

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Kategori</h5>
        <a href="{{ route('kategori.create') }}" class="btn btn-primary">
            <i class="bx bx-plus me-1"></i> Tambah
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th style="width: 5%;">No</th>
                    <th>Nama Kategori</th>
                    <th style="width: 15%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kategoris as $index => $kategori)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td><strong>{{ $kategori->nama }}</strong></td>
                    <td>
                        <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-sm btn-warning me-1" title="Edit">
                            <i class="bx bx-edit-alt"></i>
                        </a>

                        <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin hapus kategori ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                <i class="bx bx-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center">Tidak ada data kategori</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
