<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProduitModel;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = ProduitModel::all();
        return response()->json($produits);
    }

    public function store(Request $request)
    {
        $produit = ProduitModel::create($request->all());
        return response()->json($produit, 201);
    }

    public function show($codePro)
    {
        $produit = ProduitModel::where('codePro', $codePro)->firstOrFail();
        return response()->json($produit);
    }

    public function update(Request $request, $codePro)
    {
        $produit = ProduitModel::where('codePro', $codePro)->firstOrFail();
        $produit->update($request->all());
        return response()->json($produit, 200);
    }

    public function destroy($codePro)
    {
        $produit = ProduitModel::where('codePro', $codePro)->firstOrFail();
        $produit->delete();
        return response()->json(null, 204);
    }
}
