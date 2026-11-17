<label>Kode:</label>
<input type="text" name="kode_menu" value="{{ $menu->kode_menu }}"><br><br>

<label>Nama:</label>
<input type="text" name="nama_menu" value="{{ $menu->nama_menu }}"><br><br>

<label>Kategori:</label>
<input type="text" name="kategori" value="{{ $menu->kategori }}"><br><br>

<label>Harga:</label>
<input type="number" name="harga" value="{{ $menu->harga }}"><br><br>

<label>Stok:</label>
<input type="number" name="stok" value="{{ $menu->stok }}"><br><br>

<label>Status:</label>
<select name="status">
    <option value="Tersedia" {{ $menu->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
    <option value="Habis" {{ $menu->status == 'Habis' ? 'selected' : '' }}>Habis</option>
</select><br><br>

<label>Keterangan:</label>
<input type="text" name="keterangan" value="{{ $menu->keterangan }}">
