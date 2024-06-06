<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstadisticasController extends Controller
{
    public function index()
    {
        try {
            // Consulta para obtener las ganancias por mes
            $gananciasPorMes = DB::select("SELECT MONTH(fecha_recogida) AS mes, SUM(costo) AS ganancias FROM renta GROUP BY mes");

            // Consulta para obtener el total de gastos
            $totalGastos = DB::select("SELECT SUM(costo) AS total_gastos FROM gastos_generales");

            // Si no hay resultados para $totalGastos, establecemos su valor en 0
            if(empty($totalGastos)) {
                $totalGastos = [['total_gastos' => 0]];
            }

            // Consulta para obtener el total de reservas
            $reservasTotales = DB::select("SELECT COUNT(*) AS reservas_totales FROM renta");

            // Consulta para obtener el total de clientes registrados
            $clientesRegistrados = DB::select("SELECT COUNT(*) AS clientes_registrados FROM users");

            // Consulta para obtener la tasa de ocupación
            $vehiculosOcupados = DB::select("SELECT COUNT(*) AS vehiculos_ocupados FROM vehiculos WHERE estado = 'Ocupado'");

            return view('estadisticas.index', compact('gananciasPorMes', 'totalGastos', 'reservasTotales', 'clientesRegistrados', 'vehiculosOcupados'));

        } catch (\Exception $e) {
            // Manejar cualquier error que pueda ocurrir al ejecutar las consultas
            return back()->withError($e->getMessage());
        }
    }
}