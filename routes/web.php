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

