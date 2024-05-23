<?php

namespace App\Http\Controllers;

use App\Models\renta;
use Illuminate\Http\Request;

class RentaController extends Controller
{

    // Método para procesar el formulario de alquiler
    public function rentar(Request $request)
    {
     // Validar los datos del formulario
     $request->validate([
         'ub_rec' => 'required|string',
         'ub_dev' => 'required|string',
         'fe_rec' => 'required|date',
         'ho_rec' => 'required|date_format:H:i',
         'fe_dev' => 'required|date',
         'ho_dev' => 'required|date_format:H:i',
         'cliente_id' => 'required|exists:clientes,id', // Asegúrate de que el cliente exista en la base de datos
         'vehiculo_id' => 'required|exists:vehiculo,id_vehiculo', // Asegúrate de que el vehículo exista en la base de datos
         // Agrega aquí las reglas de validación para los otros campos si es necesario
     ]);

     // Calcular el costo del alquiler (esto es solo un ejemplo, debes implementar tu propia lógica)
     $costo = 100.00; // Ejemplo: costo base de $100

     // Crear una nueva renta con los datos del formulario
     Renta::create([
         'ub_recogida' => $request->ub_rec,
         'ub_devuelta' => $request->ub_dev,
         'fecha_recogida' => $request->fe_rec,
         'hora_recogida' => $request->ho_rec,
         'fecha_devuelta' => $request->fe_dev,
         'hora_devuelta' => $request->ho_dev,
         'costo' => $costo,
         'estado' => 'Pendiente', // Por ejemplo, el estado inicial puede ser pendiente
         'cliente_id_cliente' => $request->cliente_id,
         'vehiculo_id_vehiculo' => $request->vehiculo_id,
         // Agrega aquí los otros campos del modelo si es necesario
     ]);

     // Redireccionar o retornar una respuesta
     return redirect()->back()->with('success', '¡El vehículo ha sido alquilado exitosamente!');
 }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(renta $renta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(renta $renta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, renta $renta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(renta $renta)
    {
        //
    }
}
