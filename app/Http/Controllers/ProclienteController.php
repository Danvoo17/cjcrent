<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\ClienteRequest;
use Illuminate\Support\Facades\Auth;

class ProclienteController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $hasCliente = Cliente::where('id_user', $user->id)->exists();
        return view('profile.edit', compact('user', 'hasCliente'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $hasCliente = Cliente::where('id_user', $user->id)->exists();
        return view('profile.edit', compact('user', 'hasCliente'));

        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'fecha_nac' => 'required|date',
            'telefono' => 'required|string|max:15',
        ]);

        $cliente = new Cliente;
        $cliente->id_user = Auth::user()->id;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->fecha_nac = $request->fecha_nac;
        $cliente->telefono = $request->telefono;
        $cliente->save();

        return redirect()->route('profile.edit')->with('status', 'Cliente creado correctamente.');
    }
}
