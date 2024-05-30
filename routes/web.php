<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use app\http\controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ClienteController;

use app\models\renta;

Route::get('/', function () {
    return view('usuario.index');
})->name('index');


/*Route::get('/', function () {
    return view('usuario.index');
})->middleware(['auth', 'verified'])->name('index');*/
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/Flota', function () {
    return view('usuario.fleet');
})->name('fleet');

Route::post('/Flota', function () {
    return request(message);
})->name('fleet');

Route::get('/Flota', [VehiculoController::class, 'mostrarFlota'])->name('fleet');



Route::get('/Sobre-nosotros', function () {
    return view('usuario.aboutus');
})->name('about');


Route::get('/Contactanos', function () {
    return view('usuario.contact');
})->name('contact');



Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'sendMessage'])->name('contact.send')->middleware('auth');
