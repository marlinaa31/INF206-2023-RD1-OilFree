<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeripointController;
use App\Http\Controllers\TukarpointController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\deliveryman_controller;
use App\Http\Controllers\PemesananController;
use Illuminate\Support\Facades\Auth;

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
})->name('welcome');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::middleware([checkRole::class . ':deliveryman'])->group(function(){
        Route::get('/deliveryman', [deliveryman_controller::class, 'index'])->name('deliveryman');
        
    });
});

Route::get('/deskripsideliveryman', function () {
    return view('deskripsideliveryman');
})->name('deskripsi_deliveryman');

Route::get('/pesandeliveryman',[PemesananController::class,'index'])->name('pesan_deliveryman');
Route::post('/pesandeliveryman',[PemesananController::class,'store'])->name('pesan.store');

Route::get('/Informasi', function () {
    return view('Informasi');
})->name('informasi');

Route::get('/alamatuser', function () {
    return view('alamatuser');
})->name('alamat_user');

Route::get('/masuk_pesanan',[deliveryman_controller::class, 'takeOrder'])->name('masuk_pesanan');

Route::get('/profildelivery', function () {
    return view('profildelivery');
})->name('profil_delivery');

Route::get('/beripoint', function () {
    return view('beripoint');
})->name('beri_point');

Route::get('/datadeliveryman', function () {
    return view('datadeliveryman');
})->name('data_deliveryman');

Route::get('/point', function () {
    return view('point');
})->name('point');

Route::get('/tukarpulsa', function () {
    return view('tukarpulsa');
})->name('tukar-pulsa');

Route::get('/dashboarddeliveryman', function () {
    return view('dashboarddeliveryman');
})->name('dashboard_deliveryman');



require __DIR__.'/auth.php';
