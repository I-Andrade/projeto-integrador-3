<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portifolio;
use App\Models\imagem;

class PortifolioController extends Controller
{
    public function getAllPortifolios()
    {
        $portifolios = portifolio::all();
        return view('site/portifolio/categorias', ['portifolios' => $portifolios]);
    }

    public function getPortifolio($id)
    {
        $portifolio = portifolio::find($id);
        $imagens = imagem::where('id_portifolio', $id)->get();
        return view('site/portifolio/paginadetalhe', ['portifolio' => $portifolio], ['imagens' => $imagens]);
    }

    public function getPortifolioBYCategoria($categoria)
    {
        $portifolios = portifolio::where('category', $categoria)->get();
        return view('site/portifolio/sites', ['portifolios' => $portifolios], ['categoria' => $categoria]);
    }

    public function createPortifolio(Request $request)
    {
        $portifolio = portifolio::create($request->all());
        $portifolio->save();
        return redirect('/portfolio');
    }

    public function updatePortifolio(Request $request, $id)
    {
        $portifolio = portifolio::find($id);
        $portifolio->update($request->all());
        $portifolio->save();
        return redirect('/portfolio');
    }

    public function deletePortifolio($id)
    {
        $portifolio = portifolio::find($id);
        $portifolio->delete();
        return redirect('/portfolio');
    }
}
