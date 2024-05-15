<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategorieModel;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = CategorieModel::all();
        return response()->json($categories);
    }

    public function store(Request $request)
    {
        $categorie = CategorieModel::create($request->all());
        return response()->json($categorie, 201);
    }

    public function show($idCat)
    {
        $categorie = CategorieModel::where('idCat', $idCat)->firstOrFail();
        return response()->json($categorie);
    }

    public function update(Request $request, $idCat)
    {
        $categorie = CategorieModel::where('idCat', $idCat)->firstOrFail();
        $categorie->update($request->all());
        return response()->json($categorie, 200);
    }

    public function destroy($idCat)
    {
        $categorie = CategorieModel::where('idCat', $idCat)->firstOrFail();
        $categorie->delete();
        return response()->json(null, 204);
    }
}
