<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use app\http\controllers\HomeController;
use App\Models\Renta;
use App\Http\Requests\RentaRequest;
use App\Models\Cliente;
use App\Http\Requests\ClienteRequest;
use App\Models\Vehiculo;
use App\Http\Requests\VehiculoRequest;

class AdminController extends Controller
{
    public function index()
    {
    

            // Consulta para obtener el total de reservas
            $reservasTotales = renta::count();

            // Consulta para obtener el total de clientes registrados
            $clientesRegistrados = cliente::count();

            // Consulta para obtener la tasa de ocupación
            $vehiculosOcupados = vehiculo::count();

            return view('admin.index', compact('reservasTotales', 'clientesRegistrados', 'vehiculosOcupados'));


    }

    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function dashboard()
    {
        return view('admin.index');
    }

}
