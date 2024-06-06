<?php

namespace App\Http\Controllers;

use App\Models\GastosLocal;
use App\Http\Requests\GastosLocalRequest;

/**
 * Class GastosLocalController
 * @package App\Http\Controllers
 */
class GastosLocalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gastosLocals = GastosLocal::paginate();

        return view('admin.gastos-local.index', compact('gastosLocals'))
            ->with('i', (request()->input('page', 1) - 1) * $gastosLocals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gastosLocal = new GastosLocal();
        return view('admin.gastos-local.create', compact('gastosLocal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GastosLocalRequest $request)
    {
        GastosLocal::create($request->validated());

        return redirect()->route('gastosLocals.index')
            ->with('success', 'Gasto creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $gastosLocal = GastosLocal::find($id);

        return view('admin.gastos-local.show', compact('gastosLocal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gastosLocal = GastosLocal::find($id);

        return view('admin.gastos-local.edit', compact('gastosLocal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GastosLocalRequest $request, GastosLocal $gastosLocal)
    {
        $gastosLocal->update($request->validated());

        return redirect()->route('gastosLocals.index')
            ->with('success', 'Gasto editado exitosamente');
    }

    public function destroy($id)
    {
        GastosLocal::find($id)->delete();

        return redirect()->route('gastosLocals.index')
            ->with('success', 'Gasto eliminado exitosamente');
    }
}
