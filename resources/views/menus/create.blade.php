<h1>Tambah Menu</h1>

@if ($errors->any())
    <ul style="color:red">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('menus.store') }}" method="POST">
    @csrf
    <p>Kode: <input type="text" name="kode_menu" value="{{ old('kode_menu') }}"></p>
    <p>Nama: <input type="text" name="nama_menu" value="{{ old('nama_menu') }}"></p>
    <p>Kategori: <input type="text" name="kategori" value="{{ old('kategori') }}"></p>
    <p>Harga: <input type="number" name="harga" step="1" value="{{ old('harga') }}"></p>
    <p>Stok: <input type="number" name="stok" value="{{ old('stok') }}"></p>
    <p>Status:
        <select name="status">
            <option value="Tersedia">Tersedia</option>
            <option value="Habis">Habis</option>
        </select>
    </p>
    <p>Keterangan: <input type="text" name="keterangan" value="{{ old('keterangan') }}"></p>
    <button type="submit">Simpan</button>
    <a href="{{ route('menus.index') }}">Batal</a>
</form>
