<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Vehiculo;

class FiltroController extends Controller
{
    public function index()
{
    // Consulta la base de datos utilizando mysqli para recuperar las marcas
    $conn = new mysqli("localhost", "root", "123456", "cjcrent");

    $marcas = Marca::all();

    return view('usuario.fleet2', compact('marcas'));
}

    public function filtro(Request $request)
    {
        $marca = $request->input('marca');
        $vehiculos = Vehiculo::join('marcas', 'ehiculos.id_modelo', '=', 'arcas.id_marca')
                             ->where('marcas.nombre', $marca)
                             ->get();

        return view('usuario.fleet2', compact('vehiculos'));
    }
}
?>