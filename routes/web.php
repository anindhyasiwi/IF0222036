<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramStudiController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FakultasController;

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
Route::get('/home', function () {
    return view('home');
});
Auth::routes();
Route::resource('fakultas', FakultasController::class)->parameters(['fakultas' => 'fakultas']);
Route::resource('program-studi', ProgramStudiController::class);
Auth::routes();
Route::get('/fetch-sekolah', [App\Http\Controllers\SekolahController::class, 'fetchSekolah']);
Route::get('/sekolah', [App\Http\Controllers\SekolahController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
