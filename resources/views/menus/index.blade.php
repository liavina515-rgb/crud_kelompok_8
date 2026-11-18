<h1>Menu Kantin</h1>
<a href="{{ route('menus.create') }}" class="btn-warning" data-bs-placement="right">Tambah</a>
<table  border="3">

  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">kode_menu</th>
      <th scope="col">nama_menu</th>
      <th scope="col">kategori</th>
      <th scope="col">harga</th>
      <th scope="col">stok</th>
      <th scope="col">status</th>
      <th scope="col">keterangan</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($menus as $key)
    <tr>
      <td>{{ $key->id }}</td>
      <td>{{ $key->kode_menu }}</td>
      <td>{{ $key->nama_menu}}</td>
      <td>{{ $key->kategori}}</td>
      <td>{{ $key->harga}}</td>
      <td>{{ $key->stok}}</td>
      <td>{{ $key->status}}</td>
      <td>{{ $key->keterangan}}</td>
   <td> <a href="{{ route('menus.edit', $key->id) }}" class="btn-warning">Edit</a>
    <form action="{{ route('menus.destroy', $key->id) }}"
     method="POST"
     class="m-8">
        @csrf
        @method('DELETE')

        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini? {{$key->nama_menu}}')"
         class="btn btn-danger btn-sm bi bi-trash">Hapus</button>
    </form>
     </td>
    </tr>
    @endforeach

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
  </tbody>
</table>
