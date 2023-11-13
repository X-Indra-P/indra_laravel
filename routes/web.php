<?php

use App\Http\Controllers\ContohController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/home/show_html', [HomeController::class, 'show_html']);
Route::get('/home/belajar_blade', [HomeController::class, 'belajar_blade']);
Route::get('/home/penggunaan_layout', [HomeController::class, 'penggunaan_layout']);

Route::get('/home/contoh', [HomeController::class, 'contoh']);
Route::post('/home/contoh', [HomeController::class, 'contoh_post']);

// Route::get('/contoh', [HomeController::class, 'index']);
// Route::get('/contoh/create', [HomeController::class, 'create']);
// Route::post('/contoh/create', [HomeController::class, 'store']);

Route::resource('contoh', ContohController::class);
Route::resource('pegawai', PegawaiController::class);
//Route get => pegawai => index
//Route get => pegawai/create => create
//Route post => pegawai => store
//Route get => pegawai/{id} => show
//Route put/patch => pegawai/{id} => update
//Route delete => pegawai/{id} => delete
//Route get => pegawai/{id}/edit => edit

Route::resource('pegawai', PegawaiController::class);
Route::get('/', function () {
    return redirect('/pegawai');
});