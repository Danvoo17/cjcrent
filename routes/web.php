<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('usuario.index');
})->name('index');

Route::get('/index', function () {
    return view('usuario.index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/Flota', function () {
    return view('usuario.fleet');
})->name('fleet');

Route::get('/Equi´po', function () {
    return view('usuario.tema');
})->name('team');

Route::get('/Sobre_nosotros', function () {
    return view('usuario.aboutus');
})->name('about');

Route::get('/Contactanos', function () {
    return view('usuario.contact');
})->name('contact');
