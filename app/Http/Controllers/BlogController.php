<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\categoria;
class BlogController extends Controller
{

    private $url = 'https://drive.google.com/uc?export=view&id=';
    private $perPage = 3;

    public function getAllBlogs()
    {
        $allBlogs = blog::orderByDesc('id')->get();
        $categoriasComMaterias = $allBlogs->pluck('id_category')->unique();
        $categorias = categoria::where('type', 1)->whereIn('id',$categoriasComMaterias)->get();
        $allBlogs->categorias = $categorias;
        $blogsDestaques = $allBlogs->sortByDesc('views')->take(2);

        $blogs = blog::orderByDesc('id')->paginate($this->perPage);
        return view('site/blog/blog', ['allBlogs' => $allBlogs, 'blogs' => $blogs, 'blogsDestaques' => $blogsDestaques,'categorias' => $categorias, 'categoriaFiltrada' => 0]);
    }

    public function getBlogByCategoria($idCategoria)
    {
        $allBlogs = blog::orderByDesc('id')->get();
        $categoriasComMaterias = $allBlogs->pluck('id_category')->unique();
        $categorias = categoria::where('type', 1)->whereIn('id',$categoriasComMaterias)->get();
        $allBlogs->categorias = $categorias;
        $blogsDestaques = $allBlogs->where('id_category',$idCategoria)->sortByDesc('views')->take(2); 

        $blogs = blog::where('id_category',$idCategoria)->paginate($this->perPage);

        return view('site/blog/blog', ['allBlogs' => $allBlogs, 'blogs' => $blogs, 'blogsDestaques' => $blogsDestaques,'categorias' => $categorias, 'categoriaFiltrada' => $idCategoria]);
    }

    public function getBlog($id)
    {
        $blogs = blog::select('id_category')->distinct('id_category')->get();
        $categoriasComMaterias = $blogs->pluck('id_category');
        $categorias = categoria::where('type', 1)->whereIn('id',$categoriasComMaterias)->get();
        $blogs->categorias = $categorias;

        $blog = blog::find($id);
        $blog->increment('views');
    
        return view('site/blog/paginadetalhe', ['materia' => $blog, 'categorias' => $categorias]);
    }

    public function createBlog(Request $request)
    {
        $dados = $request->all();
        if($dados['image'])
            $dados['image'] = $this->url . $dados['image'];
        $blog = blog::create($dados);       
        return redirect("/blog/$blog->id");
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
