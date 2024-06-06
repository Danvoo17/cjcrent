<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Http\Requests\CargoRequest;

/**
 * Class CargoController
 * @package App\Http\Controllers
 */
class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cargos = Cargo::paginate();

        return view('admin.cargo.index', compact('cargos'))
            ->with('i', (request()->input('page', 1) - 1) * $cargos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cargo = new Cargo();
        return view('admin.cargo.create', compact('cargo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CargoRequest $request)
    {
        Cargo::create($request->validated());

        return redirect()->route('cargos.index')
            ->with('success', 'Cargo creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cargo = Cargo::find($id);

        return view('admin.cargo.show', compact('cargo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cargo = Cargo::find($id);

        return view('admin.cargo.edit', compact('cargo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CargoRequest $request, Cargo $cargo)
    {
        $cargo->update($request->validated());

        return redirect()->route('cargos.index')
            ->with('success', 'Cargo editado con exito');
    }

    public function destroy($id)
    {
        Cargo::find($id)->delete();

        return redirect()->route('cargos.index')
            ->with('success', 'Cargo eliminado con exito');
    }
}
