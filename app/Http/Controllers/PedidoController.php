<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Http\Requests\PedidoRequest;

/**
 * Class PedidoController
 * @package App\Http\Controllers
 */
class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::paginate();

        return view('admin.pedido.index', compact('pedidos'))
            ->with('i', (request()->input('page', 1) - 1) * $pedidos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pedido = new Pedido();
        return view('admin.pedido.create', compact('pedido'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PedidoRequest $request)
    {
        Pedido::create($request->validated());

        return redirect()->route('pedidos.index')
            ->with('success', 'Pedido creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pedido = Pedido::find($id);

        return view('admin.pedido.show', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pedido = Pedido::find($id);

        return view('admin.pedido.edit', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PedidoRequest $request, Pedido $pedido)
    {
        $pedido->update($request->validated());

        return redirect()->route('pedidos.index')
            ->with('success', 'Pedido editado exitosamentey');
    }

    public function destroy($id)
    {
        Pedido::find($id)->delete();

        return redirect()->route('pedidos.index')
            ->with('success', 'Pedido eliminado exitosamente');
    }
}
