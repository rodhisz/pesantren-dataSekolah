<?php

use App\Http\Controllers\DataSekolahController;
use App\Models\DataSekolah;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/murid', [DataSekolahController::class, 'murid'])->name('murid');
Route::get('/guru', [DataSekolahController::class, 'guru'])->name('guru');
Route::get('/staff', [DataSekolahController::class, 'staff'])->name('staff');
Route::get('/pegawai', [DataSekolahController::class, 'pegawai'])->name('pegawai');

//import
Route::get('/import', [App\Http\Controllers\importController::class, 'index'])->name('import');
Route::post('/dataimport', [App\Http\Controllers\importController::class, 'dataImport'])->name('dataImport');
