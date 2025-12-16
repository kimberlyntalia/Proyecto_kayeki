<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function guardar(Request $request)
    {
        Contacto::create([
            'nombre' => $request->nombre,
            'email'  => $request->email,
            'asunto' => $request->asunto,
            'mensaje'=> $request->mensaje,
        ]);

        return back()->with('mensaje', 'Mensaje enviado correctamente');
    }

    public function eliminar($id)
    {
        $contacto = Contacto::findOrFail($id);
        $contacto->delete();

        return back()->with('mensaje', 'Mensaje eliminado correctamente');
    }
}

