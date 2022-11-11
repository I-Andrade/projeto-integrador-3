<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallpaper;

/**
 * @OA\Swagger(
 *   basePath="/ApiController",
 *   @OA\Info(
 *     title="Wallpaper API - Turma 12 Polo Franca-SP - PI3 Univesp",
 *     version="1.0.0"
 *   )
 * )
 */

class ApiController extends Controller
{
    /**
    * @OA\Get(
    *   path="/api/wallpapers",
    *   tags={"Consumo"},
    *   summary="List wallpapers",
    *   operationId="getAllWallpapers",
    *   @OA\Response(response=200, description="successful operation"),
    *   @OA\Response(response=406, description="not acceptable"),
    *   @OA\Response(response=500, description="internal server error")
    * )
    *
    */
    public function getAllWallpapers()
    {
        $wallpapers = Wallpaper::all();
        return response()->json($wallpapers);
    }

    /**
     * @OA\Get(
     *   path="/api/wallpaper/{Id}",
     *   tags={"Consumo"},
     *   summary="Get Wallpaper by ID",
     *   operationId="getWallpaper",
     *   @OA\Parameter(
     *     name="Id",
     *     in="path",
     *     description="Target Wallpaper.",
     *     required=true
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=406, description="not acceptable"),
     *   @OA\Response(response=500, description="internal server error")
     * )
     *
     */    
    public function getWallpaper($id)
    {
        $wallpaper = Wallpaper::find($id);
        return response()->json($wallpaper);
    }
   
    // /**
    //  * @OA\Post(
    //  *   path="/api/wallpaper",
    //  *   tags={"Manipulação"},
    //  *   summary="Create Wallpaper",
    //  *   operationId="createWallpaper",
    //  *   @OA\Parameter(
    //  *   name="name",
    //  *   in="query",
    //  *   description="Name",
    //  *   required=true
    //  *   ),
    //  *   @OA\Parameter(
    //  *   name="image",
    //  *   in="query",
    //  *   description="Image",
    //  *   required=true
    //  *   ),
    //  *   @OA\Parameter(
    //  *   name="id_category",
    //  *   in="query",
    //  *   description="Id_Category",
    //  *   required=true
    //  *   ),
    //  *   @OA\Parameter(
    //  *   name="author",
    //  *   in="query",
    //  *   description="Author",
    //  *   required=true
    //  *   ),
    //  *   @OA\Parameter(
    //  *   name="description",
    //  *   in="query",
    //  *   description="Description",
    //  *   required=true
    //  *   ),
    //  *   @OA\Response(response=200, description="successful operation"),
    //  *   @OA\Response(response=406, description="not acceptable"),
    //  *   @OA\Response(response=500, description="internal server error")
    //  * )
    //  *
    //  */    
    public function createWallpaper(Request $request)
    {
        $wallpaper = Wallpaper::create($request->all());
        $wallpaper->save();
        return redirect('/');
    }

    // /** @OA\Put(
    // *   path="/api/wallpaper/{id}",
    // *   tags={"Manipulação"},
    // *   summary="Update Wallpaper",
    // *   operationId="updateWallpaper",
    // *   @OA\Parameter(
    // *   name="id",
    // *   in="path",
    // *   description="ID",
    // *   required=true
    // *   ),
    // *   @OA\Parameter(
    // *   name="name",
    // *   in="query",
    // *   description="Name",
    // *   required=false
    // *   ),
    // *   @OA\Parameter(
    // *   name="image",
    // *   in="query",
    // *   description="Image",
    // *   required=false
    // *   ),
    // *   @OA\Parameter(
    // *   name="id_category",
    // *   in="query",
    // *   description="Id_Category",
    // *   required=false
    // *   ),
    // *   @OA\Parameter(
    // *   name="author",
    // *   in="query",
    // *   description="Author",
    // *   required=false
    // *   ),
    // *   @OA\Parameter(
    // *   name="description",
    // *   in="query",
    // *   description="Description",
    // *   required=false
    // *   ),
    // *   @OA\Response(response=200, description="successful operation"),
    // *   @OA\Response(response=406, description="not acceptable"),
    // *   @OA\Response(response=500, description="internal server error")
    // * )
    // *
    // */ 
    public function updateWallpaper(Request $request, $id)
    {
        $wallpaper = Wallpaper::find($id);
        $wallpaper->update($request->all());
        return response()->json($wallpaper);
    }

    // /**
    //  * @OA\Delete(
    //  *   path="/api/wallpaper/{Id}",
    //  *   tags={"Manipulação"},
    //  *   summary="Delete Wallpaper by ID",
    //  *   operationId="deleteWallpaper",
    //  *   @OA\Parameter(
    //  *     name="Id",
    //  *     in="path",
    //  *     description="Target Wallpaper.",
    //  *     required=true
    //  *   ),
    //  *   @OA\Response(response=200, description="successful operation"),
    //  *   @OA\Response(response=406, description="not acceptable"),
    //  *   @OA\Response(response=500, description="internal server error")
    //  * )
    //  *
    //  */    
    public function deleteWallpaper($id)
    {
        $wallpaper = Wallpaper::find($id);
        $wallpaper->delete();
        return response()->json('Deleted');
    }
}