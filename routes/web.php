<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TimController;
use App\Http\Controllers\KendaraanController;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        'title' => 'Home'
    ]);
})->name('home');

Route::get('/jadwal', function () {
    return view('jadwal', [
        'title' => 'Jadwal'
    ]);
});

Route::get('/paket', function () {
    return view('paket', [
        'title' => 'Paket'
    ]);
});

Route::get('/tim-kami', [TimController::class, 'index']);

Route::get('/kendaraan', [KendaraanController::class, 'index']);

Route::get('/kontak', function () {
    return view('kontak', [
        'title' => 'Kontak'
    ]);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
