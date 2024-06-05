<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use App\Http\Requests\ModeloRequest;

/**
 * Class ModeloController
 * @package App\Http\Controllers
 */
class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modelos = Modelo::paginate();

        return view('admin.modelo.index', compact('modelos'))
            ->with('i', (request()->input('page', 1) - 1) * $modelos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modelo = new Modelo();
        return view('admin.modelo.create', compact('modelo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModeloRequest $request)
    {
        Modelo::create($request->validated());

        return redirect()->route('modelos.index')
            ->with('success', 'Modelo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $modelo = Modelo::find($id);

        return view('admin.modelo.show', compact('modelo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $modelo = Modelo::find($id);

        return view('admin.modelo.edit', compact('modelo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModeloRequest $request, Modelo $modelo)
    {
        $modelo->update($request->validated());

        return redirect()->route('modelos.index')
            ->with('success', 'Modelo updated successfully');
    }

    public function destroy($id)
    {
        Modelo::find($id)->delete();

        return redirect()->route('modelos.index')
            ->with('success', 'Modelo deleted successfully');
    }
}
