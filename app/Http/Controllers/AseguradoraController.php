<?php

namespace App\Http\Controllers;

use App\Models\Aseguradora;
use App\Http\Requests\AseguradoraRequest;

/**
 * Class AseguradoraController
 * @package App\Http\Controllers
 */
class AseguradoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aseguradoras = Aseguradora::paginate();

        return view('admin.aseguradora.index', compact('aseguradoras'))
            ->with('i', (request()->input('page', 1) - 1) * $aseguradoras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aseguradora = new Aseguradora();
        return view('admin.aseguradora.create', compact('aseguradora'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AseguradoraRequest $request)
    {
        Aseguradora::create($request->validated());

        return redirect()->route('aseguradoras.index')
            ->with('success', 'Aseguradora created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $aseguradora = Aseguradora::find($id);

        return view('admin.aseguradora.show', compact('aseguradora'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $aseguradora = Aseguradora::find($id);

        return view('admin.aseguradora.edit', compact('aseguradora'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AseguradoraRequest $request, Aseguradora $aseguradora)
    {
        $aseguradora->update($request->validated());

        return redirect()->route('aseguradoras.index')
            ->with('success', 'Aseguradora updated successfully');
    }

    public function destroy($id)
    {
        Aseguradora::find($id)->delete();

        return redirect()->route('aseguradoras.index')
            ->with('success', 'Aseguradora deleted successfully');
    }
}
