<?php

namespace App\Http\Controllers;

use App\Models\Seguro;
use App\Http\Requests\SeguroRequest;

/**
 * Class SeguroController
 * @package App\Http\Controllers
 */
class SeguroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seguros = Seguro::paginate();

        return view('admin.seguro.index', compact('seguros'))
            ->with('i', (request()->input('page', 1) - 1) * $seguros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $seguro = new Seguro();
        return view('admin.seguro.create', compact('seguro'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SeguroRequest $request)
    {
        Seguro::create($request->validated());

        return redirect()->route('seguros.index')
            ->with('success', 'Seguro created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $seguro = Seguro::find($id);

        return view('admin.seguro.show', compact('seguro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $seguro = Seguro::find($id);

        return view('admin.seguro.edit', compact('seguro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SeguroRequest $request, Seguro $seguro)
    {
        $seguro->update($request->validated());

        return redirect()->route('seguros.index')
            ->with('success', 'Seguro updated successfully');
    }

    public function destroy($id)
    {
        Seguro::find($id)->delete();

        return redirect()->route('seguros.index')
            ->with('success', 'Seguro deleted successfully');
    }
}
