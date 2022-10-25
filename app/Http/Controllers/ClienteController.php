<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function getAllClientes()
    {
        $clientes = cliente::all();
        return view('cliente', ['clientes' => $clientes]);
    }

    public function getCliente($id)
    {
        $cliente = cliente::find($id);
        return view('cliente', ['cliente' => $cliente]);
    }

    public function createCliente(Request $request)
    {
        $cliente = cliente::create($request->all());
        $cliente->save();
        return redirect('/');
    }

    public function updateCliente(Request $request, $id)
    {
        $cliente = cliente::find($id);
        $cliente->update($request->all());
        $cliente->save();
        return redirect('/');
    }

    public function deleteCliente($id)
    {
        $cliente = cliente::find($id);
        $cliente->delete();
        return redirect('/');
    }
}
