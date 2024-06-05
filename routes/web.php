<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use app\http\controllers\HomeController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloController;

use app\models\renta;





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

    Route::resource('clientes', ClienteController::class);
    Route::resource('users', UserController::class);
    Route::resource('proveedors', ProveedorController::class);
    Route::resource('cargos', CargoController::class);
    Route::resource('vehiculos', VehiculoController::class);
    Route::resource('empleados', EmpleadoController::class);
    Route::resource('marcas', MarcaController::class);
    Route::resource('modelos', ModeloController::class);

    Route::get('/Admin/Dashboard', [AdminController::class, 'dashboard'])->name('ad-dash');
    Route::get('/Admin/Usuario', [UserController::class, 'index'])->name('ad-usuario');
    Route::get('/Admin/Cliente', [ClienteController::class, 'index'])->name('ad-cliente');
    Route::get('/Admin/Proveedor', [ProveedorController::class, 'index'])->name('ad-proveedor');
    Route::get('/Admin/Cargo', [CargoController::class, 'index'])->name('ad-cargo');
    Route::get('/Admin/Vehiculo', [VehiculoController::class, 'index'])->name('ad-vehiculo');
    Route::get('/Admin/Empleado', [EmpleadoController::class, 'index'])->name('ad-empleado');
    Route::get('/Admin/Marca', [MarcaController::class, 'index'])->name('ad-marca');
    Route::get('/Admin/Modelo', [ModeloController::class, 'index'])->name('ad-modelo');

});






