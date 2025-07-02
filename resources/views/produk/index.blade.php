@extends('layouts.app') {{-- Ganti dengan layout kamu, misal 'layouts.main' jika bukan 'app' --}}

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Produk</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">+ Tambah Produk</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $produk)
                <tr>
                    <td>{{ $produk->nama }}</td>
                    <td>{{ $produk->kategori->nama }}</td>
                    <td>Rp{{ number_format($produk->harga, 0, ',', '.') }}</td>
                    <td>
                        @if ($produk->gambar)
                            <img src="{{ asset('storage/' . $produk->gambar) }}" width="80" height="60">
                        @else
                            <small>Tidak ada</small>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('produk.edit', $produk) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('produk.destroy', $produk) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if ($produks->isEmpty())
                <tr>
                    <td colspan="5" class="text-center">Belum ada produk</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
