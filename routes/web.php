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
    return view('home_page');
});

Route::get('/facebook-donwload', function(){
    $data = true;
    return view('finstaview', compact('data', $data));
});

Route::get('/instagram-donwload', function(){
    return view('finstaview' );
});


Route::get('/images-donwload', function(){
    return view('donwload_image');
});


Route::get('/help', function(){
    return view('help');
});

Route::get('/how-to-use', function(){
    return view('how_to_use');
});

Route::get('finstavd/vd','VideoURL@FInstaVD');
Route::get('finstavd/img','VideoURL@FInstaIMG');
