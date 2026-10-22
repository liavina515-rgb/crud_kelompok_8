@extends('layouts.app')

@section('content')
<h3>Edit Menu Kantin</h3>

<form action="{{ route('menu.update', $menu)}}" method="POST">
    @method('PUT')
    @include('menu._form')
    <button class="btn btn-primary">Update</button>
    <a href="{{ route ('menu.index')}}" class="btn btn-secondary">Batal</a>
</form>
@endsection
