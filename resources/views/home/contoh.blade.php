@extends('layouts.index')

@section('content')
    <p>Klik tombol di bawah</p>
    <form method="POST" action="{{ url('home/contoh') }}">
        @csrf
        <input type="text" name="nama">
        <button type="submit">SUBMIT</button>
    </form>
@endsection