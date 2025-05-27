<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function show()
    {
        return view('contato');
    }

    public function enviar(Request $request)
    {
        // Simula envio de contato
        return redirect()->back()->with('mensagem', 'Mensagem enviada com sucesso!');
    }
}
