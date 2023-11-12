<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class ContohController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = pegawai::all();
        return $datas;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new pegawai;
        $model->nama = 'Mei';
        $model->tanggal_lahir = '1999-08-23';
        $model->no_telepon = '081236754905';
        $model->alamat = 'Jl.Pesanggaran';
        $model->gelar = 'S.kom';
        $model->nip = '205551055';
        if($model->save())
            return "Berhasil Simpan Data:)";
        else
            return "Gagal Simpan Data:(";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
