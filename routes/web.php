<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboardd');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/deskripsideliveryman', function () {
    return view('deskripsideliveryman');
})->name('deskripsi_deliveryman');

Route::get('/pesandeliveryman', function () {
    return view('pesandeliveryman');
})->name('pesan_deliveryman');

Route::get('/Informasi', function () {
    return view('Informasi');
});

Route::get('/Dash', function () {
    return view('dashboard');
});

Route::get('/dashboarddeliveryman', function () {
    return view('dashboarddeliveryman');
});

Route::get('/profildelivery', function () {
    return view('profildelivery');
});

Route::get('/tampilandeliveryman', function () {
    return view('tampilandeliveryman');
});

Route::get('/datadeliveryman', function () {
    return view('datadeliveryman');
})->name('data_deliveryman');

require __DIR__.'/auth.php';
