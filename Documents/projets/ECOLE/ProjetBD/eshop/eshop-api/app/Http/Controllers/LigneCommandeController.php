<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LigneLigneCommandeModell;

class LigneCommandeController extends Controller
{
    public function index()
    {
        $lignesCommande = LigneLigneCommandeModell::all();
        return response()->json($lignesCommande);
    }

    public function store(Request $request)
    {
        $ligneCommande = LigneLigneCommandeModell::create($request->all());
        return response()->json($ligneCommande, 201);
    }

    public function show($idLignCom)
    {
        $ligneCommande = LigneCommandeModel::where('idLignCom', $idLignCom)->firstOrFail();
        return response()->json($ligneCommande);
    }

    public function update(Request $request, $idLignCom)
    {
        $ligneCommande = LigneCommandeModel::where('idLignCom', $idLignCom)->firstOrFail();
        $ligneCommande->update($request->all());
        return response()->json($ligneCommande, 200);
    }

    public function destroy($idLignCom)
    {
        $ligneCommande = LigneCommandeModel::where('idLignCom', $idLignCom)->firstOrFail();
        $ligneCommande->delete();
        return response()->json(null, 204);
    }
}
