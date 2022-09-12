<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallpaper;

class ApiController extends Controller
{
    public function getAllWallpapers()
    {
        $wallpapers = Wallpaper::all();
        return response()->json($wallpapers);
    }
    
    public function getWallpaper($id)
    {
        $wallpaper = Wallpaper::find($id);
        return response()->json($wallpaper);
    }

    public function createWallpaper(Request $request)
    {
        $wallpaper = new Wallpaper;
        $wallpaper-> name = $request->name;
        $wallpaper-> image = $request->image;
        $wallpaper-> category = $request->category;
        $wallpaper-> author = $request->author;
        $wallpaper-> description = $request->description;
        $wallpaper->save();
        return response()->json(["message" => "Wallpaper created successfully"], 201);
}

    public function updateWallpaper(Request $request, $id)
    {
        $wallpaper = Wallpaper::find($id);
        $wallpaper->update($request->all());
        return response()->json($wallpaper);
    }

    public function deleteWallpaper($id)
    {
        $wallpaper = Wallpaper::find($id);
        $wallpaper->delete();
        return response()->json('deleted');
    }
}