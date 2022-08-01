<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\ZakatController;
use App\Http\Controllers\InfaqController;
use App\Http\Controllers\ShodakohController;
use App\Http\Controllers\DonaturController;

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
Route::resource('rumah', RumahController::class);
Route::resource('zakat', ZakatController::class);
Route::resource('infaq', InfaqController::class);
Route::resource('shodakoh', ShodakohController::class);
Route::resource('donatur', DonaturController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('home1', RumahController::class);

Route::get('/home2',function(){

    return view('TampilanUser.home',[
        "title" => "Home"
    ]);
});

Route::get('/zakat',function(){

    return view('TampilanUser.zakat',[
        "title" => "Zakat"
    ]);
});

Route::get('/sedekah',function(){

    return view('TampilanUser.sedekah',[
        "title" => "Sedekah"
    ]);
});

Route::get('/infaq',function(){

    return view('TampilanUser.infaq',[
        "title" => "Infaq"
    ]);
});

Route::get('/donasi',function(){

    return view('TampilanUser.donasi',[
        "title" => "Donasi"
    ]);

});


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route backend atau admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function (){
    Route::get('/', function () {
        return view('admin.index');
    });
});