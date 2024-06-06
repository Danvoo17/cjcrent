<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use App\Http\Requests\MantenimientoRequest;

/**
 * Class MantenimientoController
 * @package App\Http\Controllers
 */
class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mantenimientos = Mantenimiento::paginate();

        return view('admin.mantenimiento.index', compact('mantenimientos'))
            ->with('i', (request()->input('page', 1) - 1) * $mantenimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mantenimiento = new Mantenimiento();
        return view('admin.mantenimiento.create', compact('mantenimiento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MantenimientoRequest $request)
    {
        Mantenimiento::create($request->validated());

        return redirect()->route('mantenimiento.index')
            ->with('success', 'Mantenimiento created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mantenimiento = Mantenimiento::find($id);

        return view('admin.mantenimiento.show', compact('mantenimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mantenimiento = Mantenimiento::find($id);

        return view('admin.mantenimiento.edit', compact('mantenimiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MantenimientoRequest $request, Mantenimiento $mantenimiento)
    {
        $mantenimiento->update($request->validated());

        return redirect()->route('mantenimiento.index')
            ->with('success', 'Mantenimiento updated successfully');
    }

    public function destroy($id)
    {
        Mantenimiento::find($id)->delete();

        return redirect()->route('mantenimiento.index')
            ->with('success', 'Mantenimiento deleted successfully');
    }
}
