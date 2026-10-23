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
        <option value="">Pilih Kategori</option>
        @foreach (['Makanan', 'Minuman','Snack'] as $kategori)
            <option value="{{ $kategori }}" @selected(old('kategori', $menu->kategori ?? '') == $kategori)>{{ $kategori }}</option>
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
        <option value="">Pilih Status</option>
        @foreach (['Tersedia', 'Habis'] as $status)
            <option value="{{ $status }}" @selected(old('status', $menu->status ?? '') == $status)>{{ $status }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label">Keterangan</label>
    <textarea name="keterangan" class="form-control">{{ old('keterangan', $menu->keterangan ?? '') }}</textarea>

</div>
