<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return "Ini dari Home ContRoller";
    }

    public function show_html(){
        return view('home.halo');
    }

    public function belajar_blade(){
        $nama = "Indra";
        $daftar_hewan = ["Anjing", "Babi", "Cacing"];
        return view('home.belajar_blade', compact(
            'nama', 'daftar_hewan'
        ));
    }

    public function penggunaan_layout(){
        return view('home.penggunaan_layout');
    }

    public function contoh(){
        return view('home.contoh');
    }

    public function contoh_post(Request $request){
        $name = $request->get('nama');
        return "ini dari function contoh post dengan nama= ". $name;
    }
}

