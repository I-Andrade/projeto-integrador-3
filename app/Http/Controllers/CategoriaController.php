<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\categoria;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function getAllCategorias()
    {
        $catBlog = categoria::with('blogs')->where('type',1)->orderBy('description')->get();
        $catBlog->map(function ($cat) {
            return $cat->semRegistros = $cat->blogs->isEmpty();
        });
        
        $catWallpaper = categoria::with('wallpapers')->where('type',2)->orderBy('description')->get();
        $catWallpaper->map(function ($cat) {
            return $cat->semRegistros = $cat->wallpapers->isEmpty();
        });

        return view('/site/admin/admin-cadCategoria',['catBlog' => $catBlog, 'catWallpaper' => $catWallpaper]);
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
        return redirect('/admin-cadCategoria');
    }

    public function updateCategoria(Request $request, $id)
    {
        $categoria = categoria::find($id);
        $categoria->update($request->all());
        $categoria->save();
        return redirect('/admin-cadCategoria');
    }

    public function deleteCategoria($id)
    {
        $categoria = categoria::find($id);
        $categoria->delete();
        return redirect('/admin-cadCategoria');
    }

    public function getCategoriasByType($type)
    {
        $categorias = categoria::where('type', $type)->get();
            return $categorias;
    }

    public function getCategoriasBlogNavBar()
    {
        $blogs = blog::all();
        $categoriasComMaterias = $blogs->pluck('id_category')->unique();
        $categorias = categoria::where('type', 1)->whereIn('id',$categoriasComMaterias)->get();
        return $categorias;
    }

    public function getCategoriasBlog()
    {
        $categorias = $this->getCategoriasByType(1);
        return view('/site/admin/admin-blog', ['categorias' => $categorias]);
    }

        public function getCategoriasWallpaper()
    {
        $categorias = $this->getCategoriasByType(2);
        return view('/site/admin/admin-wallpaper', ['categorias' => $categorias]);
    }
}
