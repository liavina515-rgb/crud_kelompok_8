@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Daftar Menu Kantin</h1>
        <a href="{{ route('menu.create') }}" class="btn btn-primary">Tambah Menu</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
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
                        <td>{{ $menu->status }}</td>
                        <td>{{ $menu->keterangan }}</td>
                        <td>
                            <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-warning">Edit</a>

                            <!-- Form untuk menghapus menu -->
                            <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" class="d-inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Hapus</button>
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
