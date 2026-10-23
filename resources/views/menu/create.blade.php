@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
<h3 class="text-primary">Tambah Menu</h3>

<form action="{{ route('menu.store') }}" method="POST">
    @include('menu._form')
    <button class="btn btn-primary">Simpan</button>
    <a href="{{ route('menu.index') }}" class="btn btn-secondary">Batal</a>
</form>
   </div>
</div>
@endsection
