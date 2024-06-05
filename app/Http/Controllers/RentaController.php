<?php

namespace App\Http\Controllers;

use App\Models\Renta;
use App\Http\Requests\RentaRequest;

/**
 * Class RentaController
 * @package App\Http\Controllers
 */
class RentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentas = Renta::paginate();

        return view('admin.renta.index', compact('rentas'))
            ->with('i', (request()->input('page', 1) - 1) * $rentas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $renta = new Renta();
        return view('admin.renta.create', compact('renta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RentaRequest $request)
    {
        Renta::create($request->validated());

        return redirect()->route('rentas.index')
            ->with('success', 'Renta created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $renta = Renta::find($id);

        return view('admin.renta.show', compact('renta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $renta = Renta::find($id);

        return view('admin.renta.edit', compact('renta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RentaRequest $request, Renta $renta)
    {
        $renta->update($request->validated());

        return redirect()->route('rentas.index')
            ->with('success', 'Renta updated successfully');
    }

    public function destroy($id)
    {
        Renta::find($id)->delete();

        return redirect()->route('rentas.index')
            ->with('success', 'Renta deleted successfully');
    }
}
