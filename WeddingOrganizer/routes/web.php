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
    return view('v_home', [
        "title" => "Home"
    ]);
});



route::view('/about', 'v_about');
route::view('/galeri', 'v_galeri');
route::view('/about', 'v_about');
route::view('/contact', 'v_contact');
route::view('/galeri-prewedding', 'galeri_prewedding');
route::view('/galeri-wedding', 'galeri_wedding');
route::view('/galeri-dekorasi', 'galeri_dekorasi');
route::view('/galeri-makeup', 'galeri_makeup');
route::view('/paket-wedding', 'paket_wedding');
route::view('/paket-prewedding', 'paket_prewedding');
route::view('/paket-lamaran', 'paket_lamaran');
route::view('/detail-paket-wedding', 'detail_paket_wedding');
