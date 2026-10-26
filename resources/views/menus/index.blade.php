@extends('layouts.app')

@section('content')
   <h1>Daftar Menu Kantin</h1>
   <a href="{{ route('menus.create')}}">Create</a>

   <table class="table table-bordered table-striped">
     <thead>
        <tr>
            <th>id</th>
            <th>Kode_menu</th>
            <th>Nama_menu</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Status</th>
            <th>Keterangan</th>
        </tr>
     </thead>
     <tbody>
        @forelse($menus as $menu)
          <tr>
           <td>{{ $loop->iteration }}</td>
                    <td>{{ $menu->kode_menu }}</td>
                    <td>{{ $menu->nama_menu }}</td>
                    <td>{{ $menu->kategori }}</td>
                    <td>Rp {{ number_format($menu->harga, 0, ',', '.') }}</td>
                    <td>{{ $menu->stok }}</td>
                    <td>{{ $menu->status }}</td>
                    <td>{{ $menu->keterangan }}</td>
                <td>
            <a href="{{ route('menus.edit', $menu->id) }}">Edit</a>
             <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
            <button>Delete</button>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="7" class="text-center">Belum ada data menu.</td>
          </tr>
          @endforelse
     </tbody>
   </table>
   @endsection

