<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FournisseurModel;

class FournisseurController extends Controller
{
    public function index()
    {
        $fournisseurs = FournisseurModel::all();
        return response()->json($fournisseurs);
    }

    public function store(Request $request)
    {
        $fournisseur = FournisseurModel::create($request->all());
        return response()->json($fournisseur, 201);
    }

    public function show($idFour)
    {
        $fournisseur = FournisseurModel::where('idFour', $idFour)->firstOrFail();
        return response()->json($fournisseur);
    }

    public function update(Request $request, $idFour)
    {
        $fournisseur = FournisseurModel::where('idFour', $idFour)->firstOrFail();
        $fournisseur->update($request->all());
        return response()->json($fournisseur, 200);
    }

    public function destroy($idFour)
    {
        $fournisseur = FournisseurModel::where('idFour', $idFour)->firstOrFail();
        $fournisseur->delete();
        return response()->json(null, 204);
    }
}
