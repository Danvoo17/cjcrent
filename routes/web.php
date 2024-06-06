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
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\GastosLocalController;
use App\Http\Controllers\AseguradoraController;
use App\Http\Controllers\SeguroController;
use App\Http\Controllers\rentaController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\IncidenteController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\ReparacioneController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\FailedJobController;
use App\Http\Controllers\ProclienteController;
use App\Http\Controllers\EstadisticasController;

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

    Route::get('dashboard', [AdminController::class, 'index'])->name('ad-dash');
    Route::resource('users', UserController::class);
    Route::resource('clientes', ClienteController::class);
    Route::resource('cargos', CargoController::class);
    Route::resource('empleados', EmpleadoController::class);
    Route::resource('marcas', MarcaController::class);
    Route::resource('modelos', ModeloController::class);
    Route::resource('vehiculos', VehiculoController::class);
    Route::resource('proveedors', ProveedorController::class);
    Route::resource('pedidos', PedidoController::class);
    Route::resource('gastosLocals', GastosLocalController::class);
    Route::resource('mensajes', MensajeController::class);
    Route::resource('failedJobs', FailedJobController::class);
});








