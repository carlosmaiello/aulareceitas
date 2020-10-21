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
        $receita = Receita::findOrFail($id);

        return view('site.receita.show', ['receita' => $receita]);
    }

    public function create() {
        return view('site.receita.create');
    }

    public function store(Request $request) {
        // dd($request->all());

        $receita = Receita::create($request->all());

        if ($receita) {
            return redirect()->route('receitas.index');
        }
        else {
            return redirect()->route('receitas.create');
        }
    }

    public function edit($id) {
        $receita = Receita::findOrFail($id);
        return view('site.receita.edit', ['receita' => $receita]);
    }

    public function update(Request $request, $id) {
        $receita = Receita::findOrFail($id);
        $receita->update($request->all());

        if ($receita) {
            return redirect()->route("receitas.show", $receita->id);
        }
        else {
            return redirect()->route("receitas.edit", $receita->id);
        }
    }
}
