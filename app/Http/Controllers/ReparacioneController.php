<?php

namespace App\Http\Controllers;

use App\Models\Reparacione;
use App\Http\Requests\ReparacioneRequest;

/**
 * Class ReparacioneController
 * @package App\Http\Controllers
 */
class ReparacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reparaciones = Reparacione::paginate();

        return view('admin.reparacione.index', compact('reparaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $reparaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reparacione = new Reparacione();
        return view('admin.reparacione.create', compact('reparacione'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReparacioneRequest $request)
    {
        Reparacione::create($request->validated());

        return redirect()->route('reparaciones.index')
            ->with('success', 'Reparacione created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $reparacione = Reparacione::find($id);

        return view('admin.reparacione.show', compact('reparacione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reparacione = Reparacione::find($id);

        return view('admin.reparacione.edit', compact('reparacione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReparacioneRequest $request, Reparacione $reparacione)
    {
        $reparacione->update($request->validated());

        return redirect()->route('reparaciones.index')
            ->with('success', 'Reparacione updated successfully');
    }

    public function destroy($id)
    {
        Reparacione::find($id)->delete();

        return redirect()->route('reparaciones.index')
            ->with('success', 'Reparacione deleted successfully');
    }
}
