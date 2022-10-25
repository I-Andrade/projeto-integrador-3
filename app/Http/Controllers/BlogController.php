<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getAllBlogs()
    {
        $blogs = blog::all();
        return view('blog', ['blogs' => $blogs]);
    }

    public function getBlog($id)
    {
        $blog = blog::find($id);
        return view('blog', ['blog' => $blog]);
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
