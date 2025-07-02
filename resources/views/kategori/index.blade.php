@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Kategori</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">+ Tambah Kategori</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategoris as $kategori)
                <tr>
                    <td>{{ $kategori->nama }}</td>
                    <td>
                        <a href="{{ route('kategori.edit', $kategori) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('kategori.destroy', $kategori) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if ($kategoris->isEmpty())
                <tr>
                    <td colspan="2" class="text-center">Belum ada kategori</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
