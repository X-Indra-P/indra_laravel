@extends('layouts.index')

@section('content')

<head>
    DATA PEGAWAI
</head>
    <br>
    <a class="btn btn-primary" href="{{ url('pegawai/create') }}">Tambah</a>
    
    <table class="table-bordered table">
        <tr>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Gelar</th>
            <th>NIP</th>
            <th colspan=2>AKSI</th>
        </tr>
        @foreach($datas as $key=>$value)
            <tr>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->tanggal_lahir }}</td>
                <td>{{ $value->no_telepon }}</td>
                <td>{{ $value->alamat }}</td>
                <td>{{ $value->gelar }}</td>
                <td>{{ $value->nip }}</td>
                <td class="text-center"><a class="btn btn-info" href="{{ url('pegawai/'.$value->id.'/edit') }}">Edit</a></td> 
                <td>
                    <form action="{{ url('pegawai/'.$value->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection