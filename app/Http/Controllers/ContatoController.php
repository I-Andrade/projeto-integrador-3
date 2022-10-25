<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function getAllContatos()
    {
        $contatos = contato::all();
        return view('contato', ['contatos' => $contatos]);
    }

    public function getContato($id)
    {
        $contato = contato::find($id);
        return view('contato', ['contato' => $contato]);
    }

    public function createContato(Request $request)
    {
        $contato = contato::create($request->all());
        $contato->save();
        return redirect('/');
    }

    public function updateContato(Request $request, $id)
    {
        $contato = contato::find($id);
        $contato->update($request->all());
        $contato->save();
        return redirect('/');
    }

    public function deleteContato($id)
    {
        $contato = contato::find($id);
        $contato->delete();
        return redirect('/');
    }
}
