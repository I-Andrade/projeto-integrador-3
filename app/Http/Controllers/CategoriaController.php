<?php

namespace App\Http\Controllers;
use App\Models\categoria;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function getAllCategorias()
    {
        $categorias = categoria::all();
        return $categorias;
    }

    public function getCategoria($id)
    {
        $categoria = categoria::find($id);
        return $categoria->description;
    }

    public function createCategoria(Request $request)
    {
        $categoria = categoria::create($request->all());
        $categoria->save();
        return redirect('/blogs');
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

    public function getCategoriasByType($type)
    {
        $categorias = categoria::where('type', $type)->get();
            return $categorias;
    }

    public function getCategoriasBlog()
    {
        $categorias = $this->getCategoriasByType(1);
        return view('/site/admin/admin-blog', ['categorias' => $categorias]);
    }
}
