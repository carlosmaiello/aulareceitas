<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Receita;
use Illuminate\Http\Request;

class ReceitaController extends Controller
{
    public function index()
    {
        //
        return Receita::all();
    }

    public function store(Request $request)
    {
        $receita = Receita::create($request->all());
        return $receita;
    }

    public function show($id)
    {
        //
        $receita = Receita::findOrFail($id);
        return $receita;
    }

    public function update(Request $request, $id)
    {
        //
        $receita = Receita::findOrFail($id);
        $receita->update($request->all());
        return $receita;
    }

    public function destroy($id)
    {
        //
        $receita = Receita::findOrFail($id);
        $receita->delete();
    }
}
