<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LigneFactureModel;

class LigneFactureController extends Controller
{
    public function index()
    {
        $lignesFacture = LigneFactureModel::all();
        return response()->json($lignesFacture);
    }

    public function store(Request $request)
    {
        $ligneFacture = LigneFactureModel::create($request->all());
        return response()->json($ligneFacture, 201);
    }

    public function show($idLFac)
    {
        $ligneFacture = LigneFactureModel::where('idLFac', $idLFac)->firstOrFail();
        return response()->json($ligneFacture);
    }

    public function update(Request $request, $idLFac)
    {
        $ligneFacture = LigneFactureModel::where('idLFac', $idLFac)->firstOrFail();
        $ligneFacture->update($request->all());
        return response()->json($ligneFacture, 200);
    }

    public function destroy($idLFac)
    {
        $ligneFacture = LigneFactureModel::where('idLFac', $idLFac)->firstOrFail();
        $ligneFacture->delete();
        return response()->json(null, 204);
    }
}
