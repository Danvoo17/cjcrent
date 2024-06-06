<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Http\Requests\FacturaRequest;

/**
 * Class FacturaController
 * @package App\Http\Controllers
 */
class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facturas = Factura::paginate();

        return view('admin.factura.index', compact('facturas'))
            ->with('i', (request()->input('page', 1) - 1) * $facturas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $factura = new Factura();
        return view('admin.factura.create', compact('factura'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FacturaRequest $request)
    {
        Factura::create($request->validated());

        return redirect()->route('facturas.index')
            ->with('success', 'Factura created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $factura = Factura::find($id);

        return view('admin.factura.show', compact('factura'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $factura = Factura::find($id);

        return view('admin.factura.edit', compact('factura'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FacturaRequest $request, Factura $factura)
    {
        $factura->update($request->validated());

        return redirect()->route('facturas.index')
            ->with('success', 'Factura updated successfully');
    }

    public function destroy($id)
    {
        Factura::find($id)->delete();

        return redirect()->route('facturas.index')
            ->with('success', 'Factura deleted successfully');
    }
}
