@extends('layouts.app')

@section('content')
    <h1>Edit Menu</h1>
    <form action="{{ route('menu.update', $menu->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('menu._form')
    </form>
@endsection
