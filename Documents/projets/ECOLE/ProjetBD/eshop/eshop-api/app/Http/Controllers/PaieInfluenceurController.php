<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaieInfluenceurModel;

class PaieInfluenceurController extends Controller
{
    public function index()
    {
        $paiements = PaieInfluenceurModel::all();
        return response()->json($paiements);
    }

    public function store(Request $request)
    {
        $paiement = PaieInfluenceurModel::create($request->all());
        return response()->json($paiement, 201);
    }

    public function show($idPaiement)
    {
        $paieInfluenceur = PaieInfluenceurModel::where('idPaiement', $idPaiement)->firstOrFail();
        return response()->json($paieInfluenceur);
    }

    public function update(Request $request, $idPaiement)
    {
        $paieInfluenceur = PaieInfluenceurModel::where('idPaiement', $idPaiement)->firstOrFail();
        $paieInfluenceur->update($request->all());
        return response()->json($paieInfluenceur, 200);
    }

    public function destroy($idPaiement)
    {
        $paieInfluenceur = PaieInfluenceurModel::where('idPaiement', $idPaiement)->firstOrFail();
        $paieInfluenceur->delete();
        return response()->json(null, 204);
    }
}
