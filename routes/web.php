<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\ZakatController;
use App\Http\Controllers\InfaqController;
use App\Http\Controllers\ShodakohController;

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

Auth::routes();
Route::get('/test-admin', function(){
    return view('layouts.admin');
});
Route::resource('rumah', RumahController::class);
Route::resource('zakat', ZakatController::class);
Route::resource('infaq', InfaqController::class);
Route::resource('shodakoh', ShodakohController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('home1', RumahController::class);
