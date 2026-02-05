<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre'  => ['required', 'string', 'max:120'],
            'correo'  => ['required', 'email', 'max:120'],
            'mensaje' => ['required', 'string', 'max:3000'],
        ]);

        Mail::raw(
            "Nombre: {$data['nombre']}\nCorreo: {$data['correo']}\n\nMensaje:\n{$data['mensaje']}",
            function ($m) use ($data) {
                $m->to('alejandra.garcia@mgi-go.com')
                  ->subject('Contacto desde la web - MGI Group')
                  ->replyTo($data['correo'], $data['nombre']);
            }
        );

        return back()->with('ok', 'Mensaje enviado correctamente.');
    }
}
