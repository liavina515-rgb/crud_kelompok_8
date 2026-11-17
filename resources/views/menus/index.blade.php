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
   <td> <a href="{{ route('menus.edit', $key->id) }}" class="btn-warning">Edit</a> </td>
   <td> <a href="{{ route('menus.destroy', $key->id) }}" class="btn-danger">Hapus</a> </td>
    </tr>
    @endforeach
  </tbody>
</table>
