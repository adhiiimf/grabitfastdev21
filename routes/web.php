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

Route::get('/restart/amf', function () {
    // $echo "halo";
    Artisan::call('cache:clear');
    Artisan::call('optimize');
    Artisan::call('down');
    Artisan::call('up');
    Artisan::call('serve');
    return "DONE";
    sleep(2);
    return redirect('/');
});

Route::get('/', function () {
    return view('landing');
});

Route::fallback(function() {
    return redirect('/');
});

Route::get('/aboutus', function () {
    return view('about');
});

Route::get('/lineup', function () {
    return view('lineup');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/mascot', function () {
    return view('mascot');
});

Route::get('/theme', function () {
    return view('theme');
});

Route::get('/pramainevent', function () {
    return view('pramainevent');
});

Route::get('/deskripsi', function () {
    return view('desc');
});

Route::get('/gif18', function () {
    return view('gif18');
});

Route::get('/gif19', function () {
    return view('gif19');
});

Route::get('/gif20', function () {
    return view('gif20');
});

Route::get('/tickets', function () {
    return Redirect::to('https://goopps.com/watch/login');
});

Route::get('/watch', function () {
    return Redirect::to('https://goopps.com/watch/login');
});

Route::get('/sertifikat', function () {
    return Redirect::to('https://bit.ly/SertiGIF2021');
});