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
    return view('homepage');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/homepage', [\App\Http\Controllers\homepageController::class, 'index'])->name('homepage');
Route::get('/humas', [\App\Http\Controllers\humasController::class, 'index'])->name('humas');
Route::get('/ketua', [\App\Http\Controllers\ketuaController::class, 'index'])->name('ketua');
Route::get('/sekre', [\App\Http\Controllers\sekreController::class, 'index'])->name('sekre');
Route::get('/bendahara', [\App\Http\Controllers\bendaharaController::class, 'index'])->name('bendahara');
Route::get('/litbang', [\App\Http\Controllers\litbangController::class, 'index'])->name('litbang');
Route::get('/kominfo', [\App\Http\Controllers\kominfoController::class, 'index'])->name('kominfo');
Route::get('/psdm', [\App\Http\Controllers\psdmController::class, 'index'])->name('psdm');
Route::get('/tentang', [\App\Http\Controllers\tentangController::class, 'index'])->name('tentang');
Route::get('/kontak', [\App\Http\Controllers\kontakController::class, 'index'])->name('kontak');
Route::get('/proker', [\App\Http\Controllers\prokerController::class, 'index'])->name('proker');
