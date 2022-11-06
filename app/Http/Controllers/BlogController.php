<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\categoria;
class BlogController extends Controller
{
    public function getAllBlogs()
    {
        $blogs = blog::all();
        $categorias = categoria::where('type', 1)->get();
        $blogs->categorias = $categorias;
        $blogsDestaques = $blogs->take(2);
        return view('site/blog/blog', ['blogs' => $blogs, 'blogsDestaques' => $blogsDestaques,'categorias' => $categorias, 'categoriaFiltrada' => 0]);
    }

    public function getBlogByCategoria($idCategoria)
    {
        $blogs = blog::where('id_category',$idCategoria)->get();
        $categorias = categoria::where('type', 1)->get();
        $blogs->categorias = $categorias;
        $blogsDestaques = $blogs->take(2); 
        return view('site/blog/blog', ['blogs' => $blogs, 'blogsDestaques' => $blogsDestaques,'categorias' => $categorias, 'categoriaFiltrada' => $idCategoria]);
    }

    public function getBlog($id)
    {
        $blog = blog::whereId($id)->get();
        $categorias = categoria::where('type', 1)->get();
        return view('site/blog/paginadetalhe', ['materias' => $blog, 'categorias' => $categorias]);
    }

    public function createBlog(Request $request)
    {
        $blog = blog::create($request->all());
        $blog->save();
        return redirect("/blog/$blog->id_category");
    }

    public function updateBlog(Request $request, $id)
    {
        $blog = blog::find($id);
        $blog->update($request->all());
        $blog->save();
        return redirect('/blogs');
    }

    public function deleteBlog($id)
    {
        $blog = blog::find($id);
        $blog->delete();

        return redirect('listablog');
    }

        public function getAdminAllBlogs()
    {
        $blogs = blog::with('categoria')->orderBy('id_category')->get();
        return view('/site/admin/listablog', ['blogs' => $blogs]);
    }
}
