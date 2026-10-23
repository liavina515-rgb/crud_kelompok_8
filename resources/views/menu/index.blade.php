@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h1 class="text-primary">Daftar Menu Kantin</h1>
        <a href="{{ route('menu.create') }}" class="btn btn-primary">Tambah Menu</a>
    </div>

     <div class="card shadow-sm">
    <table class="table table-hover mb-0">
        <thead class="table-primary">
            <tr>
                <th>Kode Menu</th>
                <th>Nama Menu</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($menus as $menu)
                    <tr>
                        <td>{{ $menu->kode_menu }}</td>
                        <td>{{ $menu->nama_menu }}</td>
                        <td>{{ $menu->kategori }}</td>
                        <td>Rp {{ number_format($menu->harga, 0, ',', '.') }}</td>
                        <td>{{ $menu->stok }}</td>
                        <td>
                            <span class="badge {{ $menu->status == 'Tersedia' ? 'bg-success' : 'bg-danger' }}">
                                {{ $menu->status }}
                            </span>
                        </td>
                        <td>{{ $menu->keterangan }}</td>
                        <td>
                            <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Hapus menu ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">Belum ada data menu.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    @endsection
