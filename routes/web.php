<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PSBController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\MapelController;
use App\Http\Controllers\Admin\EkskulController;
use App\Http\Controllers\Admin\GaleriController;

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

Auth::routes(['register' => false]);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/mapel', [HomeController::class, 'mapel'])->name('mapel');
Route::get('/ekskul', [HomeController::class, 'ekskul'])->name('ekskul');
Route::get('/guru', [HomeController::class, 'guru'])->name('guru');
Route::get('/psb', [HomeController::class, 'psb'])->name('psb');
Route::get('/formpsb', [HomeController::class, 'formpsb'])->name('formpsb');
Route::post('/formpsb/store',[HomeController::class, 'formpsb_store'])->name('formpsb.store');
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    // Galeri
    Route::resource('galeri', GaleriController::class, [
        'as' => 'admin'
    ]);

    // Ekskul
    Route::resource('ekskul', EkskulController::class, [
        'as' => 'admin'
    ]);

    // Mapel
    Route::resource('mapel', MapelController::class, [
        'as' => 'admin'
    ]);

    // Guru
    Route::resource('guru', GuruController::class, [
        'as' => 'admin'
    ]);

    // PSB
    Route::get('psb', [PSBController::class, 'index'])->name('admin.psb.index');
    Route::get('psb/{id}', [PSBController::class, 'show'])->name('admin.psb.show');
});
