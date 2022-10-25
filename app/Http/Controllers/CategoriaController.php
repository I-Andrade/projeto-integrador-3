<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function getAllCategorias()
    {
        $categorias = categoria::all();
        return view('categoria', ['categorias' => $categorias]);
    }

    public function getCategoria($id)
    {
        $categoria = categoria::find($id);
        return view('categoria', ['categoria' => $categoria]);
    }

    public function createCategoria(Request $request)
    {
        $categoria = categoria::create($request->all());
        $categoria->save();
        return redirect('/');
    }

    public function updateCategoria(Request $request, $id)
    {
        $categoria = categoria::find($id);
        $categoria->update($request->all());
        $categoria->save();
        return redirect('/');
    }

    public function deleteCategoria($id)
    {
        $categoria = categoria::find($id);
        $categoria->delete();
        return redirect('/');
    }
}
