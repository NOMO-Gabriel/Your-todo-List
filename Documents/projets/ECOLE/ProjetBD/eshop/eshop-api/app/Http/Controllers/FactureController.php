<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FactureModel;

class FactureController extends Controller
{
    public function index()
    {
        $factures = FactureModel::all();
        return response()->json($factures);
    }

    public function store(Request $request)
    {
        $facture = FactureModel::create($request->all());
        return response()->json($facture, 201);
    }

    public function show($idFac)
    {
        $facture = FactureModel::where('idFac', $idFac)->firstOrFail();
        return response()->json($facture);
    }

    public function update(Request $request, $idFac)
    {
        $facture = FactureModel::where('idFac', $idFac)->firstOrFail();
        $facture->update($request->all());
        return response()->json($facture, 200);
    }

    public function destroy($idFac)
    {
        $facture = FactureModel::where('idFac', $idFac)->firstOrFail();
        $facture->delete();
        return response()->json(null, 204);
    }
}
