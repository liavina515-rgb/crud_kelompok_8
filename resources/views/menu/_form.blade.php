@foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
@endforeach

<p>Kode: <input type="text" name="kode_menu" value="{{ old('kode_menu', $menu->kode_menu ?? '') }}"></p>
<p>Nama: <input type="text" name="nama_menu" value="{{ old('nama_menu', $menu->nama_menu ?? '') }}"></p>
<p>Kategori: <input type="text" name="kategori" value="{{ old('kategori', $menu->kategori ?? '') }}"></p>
<p>Harga: <input type="number" name="harga" value="{{ old('harga', $menu->harga ?? '') }}"></p>
<p>Stok: <input type="number" name="stok" value="{{ old('stok', $menu->stok ?? '') }}"></p>
<p>Status:
    <select name="status">
        <option value="Tersedia" @selected(old('status', $menu->status ?? '') == 'Tersedia')>Tersedia</option>
        <option value="Habis" @selected(old('status', $menu->status ?? '') == 'Habis')>Habis</option>
    </select>
</p>
<p>Keterangan: <input type="text" name="keterangan" value="{{ old('keterangan', $menu->keterangan ?? '') }}"></p>

<button type="submit">Simpan</button>
<a href="{{ route('menu.index') }}">Batal</a>
