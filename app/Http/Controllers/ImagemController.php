<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagemController extends Controller
{
    public function getAllImagems()
    {
        $imagems = imagem::all();
        return view('imagem', ['imagems' => $imagems]);
    }

    public function getImagem($id)
    {
        $imagem = imagem::find($id);
        return view('imagem', ['imagem' => $imagem]);
    }

    public function createImagem(Request $request)
    {
        $imagem = imagem::create($request->all());
        $imagem->save();
        return redirect('/admin-portfolio');
    }

    public function updateImagem(Request $request, $id)
    {
        $imagem = imagem::find($id);
        $imagem->update($request->all());
        $imagem->save();
        return redirect('/admin-portfolio');
    }

    public function deleteImagem($id)
    {
        $imagem = imagem::find($id);
        $imagem->delete();
        return redirect('/admin-portfolio');
    }
}
