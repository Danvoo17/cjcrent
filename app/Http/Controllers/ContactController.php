<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mensaje;

class ContactController extends Controller
{
    public function index()
    {
        return view('usuario.contact');
    }

    public function sendMessage(Request $request)
{
    $request->validate([
        'asunto' => 'required|string|max:30',
        'mensaje' => 'required|string',
    ]);

    $mensaje = new Mensaje();
    $mensaje->asunto = $request->asunto;
    $mensaje->mensaje = $request->mensaje;
    $mensaje->email = Auth::user()->email; // Obtener el email del usuario autenticado
    $mensaje->save();

    return redirect('/')->with('success', 'Mensaje enviado exitosamente');
}


}