@extends('layouts.app')

@section('content')
    <h1>Tambah Menu</h1>
    <form action="{{ route('menu.store') }}" method="POST">
        @csrf
        @include('menu._form')
    </form>
@endsection
