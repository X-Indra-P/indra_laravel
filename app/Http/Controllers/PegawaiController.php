<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $datas = Pegawai::all();
        return view('pegawai.index', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new Pegawai;
        return view('pegawai.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Pegawai;
        $model->nama = $request->nama;
        $model->tanggal_lahir = $request->tanggal_lahir;
        $model->no_telepon = $request->no_telepon;
        $model->alamat = $request->alamat;
        $model->gelar = $request->gelar;
        $model->nip = $request->nip;
        $model->save();

        return redirect('pegawai');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = Pegawai::find($id);
        return view('pegawai.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Pegawai::find($id);
        $model->nama = $request->nama;
        $model->tanggal_lahir = $request->tanggal_lahir;
        $model->no_telepon = $request->no_telepon;
        $model->alamat = $request->alamat;
        $model->gelar = $request->gelar;
        $model->nip = $request->nip;
        $model->save();

        return redirect('pegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Pegawai::find($id);
        $model->delete();
        return redirect('pegawai');
    }
}
