<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portifolio;
use App\Models\imagem;

class PortifolioController extends Controller
{
    private $url = 'https://drive.google.com/uc?export=view&id=';

    public function getAllPortifolios()
    {
        return view('site/portifolio/categorias');
    }

    public function getPortifolio($id)
    {
        $portifolio = portifolio::find($id);
        $imagens = imagem::where('id_portifolio', $id)->get();
        return view('site/portifolio/paginadetalhe', ['portifolio' => $portifolio], ['imagens' => $imagens]);
    }

    public function getPortifolioBYCategoria($categoria)
    {
        $portifolios = portifolio::with('imagems')->where('category', $categoria)->get();
        $portifolios->map(function ($portifolio) {
            $imagemPrincipal = collect([new imagem(['image' => $portifolio->image, 'id_portifolio' =>$portifolio->id])]);
            $imagems = (collect($portifolio->imagems))->union($imagemPrincipal);
            $imagemCapa = ($imagemPrincipal->merge($imagems))->random(1)->first();
            $portifolio->imagemCapa = $imagemCapa->image;
            return $portifolio;
        });
        return view('site/portifolio/sites', ['portifolios' => $portifolios], ['categoria' => $categoria]);
    }

    public function createPortifolio(Request $request)
    {
        $dados = $request->all();
        $dados['image'] = $this->url . $dados['image'];
        $portifolio = portifolio::create($dados);     
        foreach($request->input('imagens') as $imagem) {
            imagem::create(['image' => $this->url . $imagem,'id_portifolio' => $portifolio->id]);
        }
        return redirect('listaportfolio');
    }

    public function updatePortifolio(Request $request, $id)
    {
        $portifolio = portifolio::find($id);
        $portifolio->update($request->all());
        $portifolio->save();
        return redirect('listaportfolio');
    }

    public function deletePortifolio($id)
    {
        $portifolio = portifolio::with('imagems')->find($id);
        $portifolio->imagems()->delete();
        $portifolio->delete();

        return redirect('listaportfolio');
    }

    public function getAdminAllPortifolios()
    {
        $portifolios = portifolio::all()->sortBy('category');
        return view('/site/admin/listaportifolio', ['portifolios' => $portifolios]);
    }
}
