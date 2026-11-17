@extends('layouts.app')

@section('content')
<h1>Edit Menu</h1>

<form action="{{ route('menus.update', $menu->id) }}" method="POST">
    @csrf
    @method('PUT')

    @include('menus._form')

    <button type="submit">Simpan Perubahan</button>
    <a href="{{ route('menus.index') }}">Batal</a>
</form>
@endsection
