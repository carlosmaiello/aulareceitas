<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Receita;
use Illuminate\Http\Request;

class ReceitaController extends Controller
{
    public function index() {
        $titulo = "Minhas Receitas";
        $receitas = Receita::all();

        return view('site.receita.index', ['titulo' => $titulo, 'receitas' => $receitas]);
    }

    public function show($id) {
        return view('site.receita.show');
    }
}
