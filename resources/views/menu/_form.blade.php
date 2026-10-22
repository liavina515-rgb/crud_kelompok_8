@csrf

<div class="mb-3">
    <label class="form-label">Kode Menu</label>
    <input type="text" name="kode_menu" class="form-control" value="{{ old('kode_menu', $menu->kode_menu ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Nama Menu</label>
    <input type="text" name="nama_menu" class="form-control" value="{{ old('nama_menu', $menu->nama_menu ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Kategori</label>
    <select name="kategori" class="form-select">
        @foreach (['Makanan', 'Minuman'] as $k)
        <option value="">Pilih Kategori</option>
        <option value="Makanan" {{ old('kategori', $menu->kategori ?? '') == 'Makanan' ? 'selected' : '' }}>Makanan</option>
        <option value="Minuman" {{ old('kategori', $menu->kategori ?? '') == 'Minuman' ? 'selected' : '' }}>Minuman</option>
        @endforeach
    </select>
</div>


<div class="mb-3">
    <label class="form-label">Harga</label>
    <input type="number" name="harga" class="form-control" value="{{ old('harga', $menu->harga ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Stok</label>
    <input type="number" name="stok" class="form-control" value="{{ old('stok', $menu->stok ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Status</label>
    <select name="status" class="form-select">
        @foreach (['Tersedia', 'Habis'] as $s)
        <option value="">Pilih Status</option>
        <option value="Tersedia" {{ old('status', $menu->status ?? '') == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
        <option value="Habis" {{ old('status', $menu->status ?? '') == 'Habis' ? 'selected' : '' }}>Habis</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label">Keterangan</label>
    <textarea name="keterangan" class="form-control">{{ old('keterangan', $menu->keterangan ?? '') }}</textarea>

</div>


    <div class="mb-3">
    <label class="form-label">Gambar</label>
    <input type="file" name="gambar" class="form-control">
    </div>
