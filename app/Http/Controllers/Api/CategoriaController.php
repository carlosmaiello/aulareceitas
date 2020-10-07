<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    // GET -> api/categorias
    public function index()
    {
        //
        return Categoria::all();
    }

    // POST -> api/categorias
    public function store(Request $request)
    {
        $categoria = Categoria::create($request->all());
        return $categoria;
    }

    // GET -> api/categorias/$id
    public function show($id)
    {
        //
        $categoria = Categoria::findOrFail($id);
        return $categoria;
    }

    // PUT -> api/categorias/$id
    public function update(Request $request, $id)
    {
        //
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());
        return $categoria;
    }

    // DELETE -> api/categorias/$id
    public function destroy($id)
    {
        //
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
    }
}
