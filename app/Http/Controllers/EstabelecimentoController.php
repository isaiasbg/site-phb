<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estabelecimento;

class EstabelecimentoController extends Controller
{
    public function index()
    {
        $estabelecimentos = Estabelecimento::all()->groupBy('categoria');
        return view('estabelecimentos', compact('estabelecimentos'));
    }
}
