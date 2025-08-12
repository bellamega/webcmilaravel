<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // PASTIKAN INI ADA!


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

// INI ADALAH RUTE UTAMA UNTUK MENAMPILKAN ARTIKEL
// Pastikan ini mengarah ke HomeController@index
Route::get('/', [HomeController::class, 'index']);

// BARIS-BARIS DI BAWAH INI HARUS DIKOMENTARI ATAU DIHAPUS UNTUK PROYEK cmi-web-laravel1
// KARENA PROYEK INI HANYA UNTUK MENAMPILKAN ARTIKEL, BUKAN UNTUK AUTENTIKASI.

// require __DIR__.'/auth.php'; // Ini dari Laravel Breeze untuk autentikasi

/*
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rute untuk Articles Management (ini hanya ada di cmi-admin)
    // Kalau ini ada di sini, itu salah tempat.
    // Route::prefix('admin')->name('admin.')->group(function() {
    //     Route::resource('articles', ArticleController::class);
    // });
});
*/