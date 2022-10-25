<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortifolioController extends Controller
{
    public function getAllPortifolios()
    {
        $portifolios = portifolio::all();
        return view('portifolio', ['portifolios' => $portifolios]);
    }

    public function getPortifolio($id)
    {
        $portifolio = portifolio::find($id);
        return view('portifolio', ['portifolio' => $portifolio]);
    }

    public function createPortifolio(Request $request)
    {
        $portifolio = portifolio::create($request->all());
        $portifolio->save();
        return redirect('/portfolioo');
    }

    public function updatePortifolio(Request $request, $id)
    {
        $portifolio = portifolio::find($id);
        $portifolio->update($request->all());
        $portifolio->save();
        return redirect('/portfolioo');
    }

    public function deletePortifolio($id)
    {
        $portifolio = portifolio::find($id);
        $portifolio->delete();
        return redirect('/portfolio');
    }
}
