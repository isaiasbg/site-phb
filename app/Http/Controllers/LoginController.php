<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        // Exemplo: Simular login (sem autenticação real)
        return redirect()->route('estabelecimentos');
    }
}

