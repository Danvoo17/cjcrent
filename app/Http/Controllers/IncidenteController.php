<?php

namespace App\Http\Controllers;

use App\Models\Incidente;
use App\Http\Requests\IncidenteRequest;

/**
 * Class IncidenteController
 * @package App\Http\Controllers
 */
class IncidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incidentes = Incidente::paginate();

        return view('admin.incidente.index', compact('incidentes'))
            ->with('i', (request()->input('page', 1) - 1) * $incidentes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $incidente = new Incidente();
        return view('admin.incidente.create', compact('incidente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IncidenteRequest $request)
    {
        Incidente::create($request->validated());

        return redirect()->route('incidentes.index')
            ->with('success', 'Incidente created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $incidente = Incidente::find($id);

        return view('admin.incidente.show', compact('incidente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $incidente = Incidente::find($id);

        return view('admin.incidente.edit', compact('incidente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IncidenteRequest $request, Incidente $incidente)
    {
        $incidente->update($request->validated());

        return redirect()->route('incidentes.index')
            ->with('success', 'Incidente updated successfully');
    }

    public function destroy($id)
    {
        Incidente::find($id)->delete();

        return redirect()->route('incidentes.index')
            ->with('success', 'Incidente deleted successfully');
    }
}
