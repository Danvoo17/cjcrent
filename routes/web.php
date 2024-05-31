<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use app\http\controllers\HomeController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdminController;

use app\models\renta;



Route::resource('clientes', ClienteController::class);

////////////////////////////////////////
// Rutas de usuario estandar ///////////
////////////////////////////////////////


//  Rutas de usuario autenticado ////////////////////////////////////////////////////
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Principal index ////////////
Route::get('/', function () {
    return view('usuario.index');
})->name('index');


// Flota //////////////////////
Route::post('/Flota', function () {
    return request(message);
})->name('fleet');

Route::get('/Flota', [VehiculoController::class, 'mostrarFlota'])->name('fleet');


// Sobre nosotros /////////////
Route::get('/Sobre-nosotros', function () {
    return view('usuario.aboutus');
})->name('about');

// Contactanos ////////////////
Route::get('/Contactanos', function () {
    return view('usuario.contact');
})->name('contact');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'sendMessage'])->name('contact.send')->middleware('auth');


////////////////////////////////////////
// Rutas de administrador //////////////
////////////////////////////////////////


//  Rutas de autenticacion de administrador ////////////////////////////
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/Admin/Dashboard', [AdminController::class, 'dashboard'])->name('ad-dash');
    
});

Route::get('/Cliente', function () {
    return view('administrador.admin.cliente.index');
})->name('ad-cliente');

Route::resources([
    'cliente' => 'App\Http\Controllers\ClienteController',
    // Puedes agregar más recursos aquí
]);


