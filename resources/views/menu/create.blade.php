@extends('layouts.app')

@section('content')
<h3>Tambah Menu</h3>

<form action="{{ route('menu.store') }}" method="POST">
    @csrf
    @include('menu._form')
    <button class="btn btn-primary">Simpan</button>
    <a href="{{ route('menu.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
