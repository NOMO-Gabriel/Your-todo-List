<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommandeModel;

class CommandeController extends Controller
{
    public function index()
    {
        $commandes = CommandeModel::all();
        return response()->json($commandes);
    }

    public function store(Request $request)
    {
        $commande = CommandeModel::create($request->all());
        return response()->json($commande, 201);
    }

    public function show($idCommande)
    {
        $commande = CommandeModel::where('idCommande', $idCommande)->firstOrFail();
        return response()->json($commande);
    }

    public function update(Request $request, $idCommande)
    {
        $commande = CommandeModel::where('idCommande', $idCommande)->firstOrFail();
        $commande->update($request->all());
        return response()->json($commande, 200);
    }

    public function destroy($idCommande)
    {
        $commande = CommandeModel::where('idCommande', $idCommande)->firstOrFail();
        $commande->delete();
        return response()->json(null, 204);
    }
}
