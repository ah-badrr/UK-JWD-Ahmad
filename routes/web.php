<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PesertaController;
use App\Models\Jurusan;
use App\Models\Peserta;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $jurusan = Jurusan::all();
    $peserta = Peserta::all();
    return view('landing',compact('jurusan','peserta'));
})->name('/');

Route::get('/loginp', function () {
    return view('login');
})->name('loginp');

Route::get('/home', function () {
    session_start();
    if (!$_SESSION) {
        return redirect()->route('/');
        session_destroy();
    }
    return view('peserta');
})->name('home');

Route::get('/plogout', [PesertaController::class, 'logout'])->name('plogout');

Route::get('/registerp', function () {
    $jurusan = Jurusan::all();
    return view('register',compact('jurusan'));
})->name('registerp');

Route::get('/dashboard', function () {
    $jurusan = Jurusan::all();
    $peserta = Peserta::all();
    return view('dashboard', compact('jurusan','peserta'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/jurusan', JurusanController::class);
    Route::resource('/peserta', PesertaController::class);
});

Route::post('/pregister', [PesertaController::class, 'register'])->name('pregister');
Route::post('/plogin', [PesertaController::class, 'login'])->name('plogin');
require __DIR__.'/auth.php';
