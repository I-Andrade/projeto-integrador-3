<?php

namespace App\Http\Controllers;

use App\Models\InstagramApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InstagramApiController extends Controller
{
public function show_modal($id)
    {

        $item = Items::whereHas('category', function ($query) {
                $query->where('status', 1);
            })->where('id', $id)
                ->where('status', 1)
                ->firstOrFail();


        return view('/site/admin/modal/modalCadCategoria', compact('modalCadCategoria'));

    }
