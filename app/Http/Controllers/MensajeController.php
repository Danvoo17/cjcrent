<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use App\Http\Requests\MensajeRequest;

/**
 * Class MensajeController
 * @package App\Http\Controllers
 */
class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensajes = Mensaje::paginate();

        return view('admin.mensaje.index', compact('mensajes'))
            ->with('i', (request()->input('page', 1) - 1) * $mensajes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mensaje = new Mensaje();
        return view('admin.mensaje.create', compact('mensaje'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MensajeRequest $request)
    {
        Mensaje::create($request->validated());

        return redirect()->route('mensajes.index')
            ->with('success', 'Mensaje created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mensaje = Mensaje::find($id);

        return view('admin.mensaje.show', compact('mensaje'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mensaje = Mensaje::find($id);

        return view('admin.mensaje.edit', compact('mensaje'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MensajeRequest $request, Mensaje $mensaje)
    {
        $mensaje->update($request->validated());

        return redirect()->route('mensajes.index')
            ->with('success', 'Mensaje updated successfully');
    }

    public function destroy($id)
    {
        Mensaje::find($id)->delete();

        return redirect()->route('mensajes.index')
            ->with('success', 'Mensaje deleted successfully');
    }
}
