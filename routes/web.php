<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\ZakatController;
use App\Http\Controllers\InfaqController;
use App\Http\Controllers\ShodakohController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\donasi2controller;
use App\Http\Controllers\artikelcontroller;

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

Route::get('/admin', function(){
    return view('layouts.admin');
});
Route::get('zakat2', [ZakatController::class,'artikel']);
// Route::resource('donasi2', DonaturController::class, 'store');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('home1', RumahController::class);

Route::get('/home2',function(){

    return view('TampilanUser.home',[
        "title" => "Home"
    ]);
});

// Route::get('/sedekah2',function(){

//     return view('TampilanUser.sedekah2',[
//         "title" => "Sedekah"
//     ]);
// });

route::get('/sedekah2',[artikelcontroller::class,'create']);
route::resource('/donasi2', donasi2controller::class);

Route::get('/infaq2',function(){

    return view('TampilanUser.infaq2',[
        "title" => "Infaq"
    ]);
});

// Route::get('/donasi2',function(){

//     return view('TampilanUser.donasi2',[
//         "title" => "Donasi"
//     ]);
// });

Auth::routes(['register' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route backend atau admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function (){
    Route::get('/', function () {
        return view('admin.index');

        Route::resource('rumah', RumahController::class);
        Route::resource('zakat', ZakatController::class);
        Route::resource('infaq', InfaqController::class);
        Route::resource('shodakoh', ShodakohController::class);
        Route::resource('donatur', DonaturController::class);
    });
});