<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kampus', function () {
    echo "<h2> Halo semua<h2>";
    echo "kami kuliah di kampus mdp";
});

Route::get('/halo', function () {
    echo "halo semua";
});

Route::get('/profil/{nama?}/{pekerjaan?}', function ($nama = ' ', $pekerjaan = ' ') {
    echo "<h2>Halo Semua</h2>";
    echo "Nama saya $nama, sebagai $pekerjaan";    
});

Route::get('/profile/{nama?}', function ($nama = ' ') {
    echo "<h2>Halo Semua</h2>";
    echo "Nama saya $nama";    
})->where('nama', '[A-Z]+');


Route::get('hubungi', function () {
    echo "<h2>Hubungi Kami</h2>";
})-> name('call');
Route::get('/haloo', function () {
    return "<a href='" . route('call') . "'>" . route('call') . "</a>";
});

Route::get('/Dosen', function () {
    return view('Dosen');
});

Route::get('/Dosen/index', function () {
    return view('Dosen.index');
});

Route::get('/Fakultas/index', function () {
    // return view('Fakultas.index' , ["ilkom" => "Fakultas ILKOM"]);
    // return view('Fakultas.index' , ["ilkom" => ["Fakultas Ilmu Komputer dan Rekayasa", 
    // "Fakultas Ilmu Ekonomi"]]);
    // return view('Fakultas.index')-> with("ilkom" , ["Fakultas Ilmu Komputer dan Rekayasa", 
    // "Fakultas Ilmu Ekonomi"]);
    $ilkom= ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"];
    return view('Fakultas.index', compact( 'ilkom'));
});

