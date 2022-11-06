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
        return view('site/blog/blog', ['blogs' => $blogs], ['categorias' => $categorias]);
    }

    public function getBlog($id)
    {
        $blogs = blog::where('id_category',$id)->get();
        $categorias = categoria::where('type', 1)->get();
        $blogs->categorias = $categorias;
        return view('site/blog/blog', ['blogs' => $blogs], ['categorias' => $categorias]);
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
        return redirect('/blogs');
    }
}
