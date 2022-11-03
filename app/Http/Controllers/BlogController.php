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
        $blog = blog::find($id);
        $blog = json($blog);
        return view('site/blog', $blog);
    }

    public function createBlog(Request $request)
    {
        $blog = blog::create($request->all());
        $blog->save();
        return redirect('/blog');
    }

    public function updateBlog(Request $request, $id)
    {
        $blog = blog::find($id);
        $blog->update($request->all());
        $blog->save();
        return redirect('/blog');
    }

    public function deleteBlog($id)
    {
        $blog = blog::find($id);
        $blog->delete();
        return redirect('/blog');
    }
}
