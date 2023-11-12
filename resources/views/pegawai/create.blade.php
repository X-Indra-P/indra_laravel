@extends('layouts.index')

@section('content')
<div class="container mt-4">
        <br/>
        <form method="POST" action="{{ url('pegawai') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required>
        </div>

        <div class="form-group">
            <label for="Tanggal Lahir">Tanggal Lahir:</label>
            <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" required>
        </div>

        <div class="form-group">
            <label for="No Telepon">No Telepon:</label>
            <input type="text" name="no_telepon" id="no_telepon" class="form-control" placeholder="Masukkan No Telepon" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" required>
        </div>

        <div class="form-group">
            <label for="gelar">Gelar:</label>
            <input type="text" name="gelar" id="gelar" class="form-control" placeholder="Masukkan Gelar" required>
        </div>

        <div class="form-group">
            <label for="nip">NIP:</label>
            <input type="text" name="nip" id="nip" class="form-control" placeholder="Masukkan NIP" required>
        </div>

        <button type="submit" class="btn btn-info">SIMPAN</button>
        </form>
</div>
@endsection

