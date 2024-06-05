<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Http\Requests\VehiculoRequest;

/**
 * Class VehiculoController
 * @package App\Http\Controllers
 */
class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function mostrarFlota()
     {
         $vehiculos = Vehiculo::all(); // Obtener todos los vehículos de la base de datos
         return view('usuario.fleet', ['vehiculos' => $vehiculos]);
     }


    public function index()
    {
        $vehiculos = Vehiculo::paginate();

        return view('admin.vehiculo.index', compact('vehiculos'))
            ->with('i', (request()->input('page', 1) - 1) * $vehiculos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehiculo = new Vehiculo();
        return view('admin.vehiculo.create', compact('vehiculo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VehiculoRequest $request)
    {
        Vehiculo::create($request->validated());

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehiculo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $vehiculo = Vehiculo::find($id);

        return view('admin.vehiculo.show', compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vehiculo = Vehiculo::find($id);

        return view('admin.vehiculo.edit', compact('vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VehiculoRequest $request, Vehiculo $vehiculo)
    {
        $vehiculo->update($request->validated());

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehiculo updated successfully');
    }

    public function destroy($id)
    {
        Vehiculo::find($id)->delete();

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehiculo deleted successfully');
    }
}
