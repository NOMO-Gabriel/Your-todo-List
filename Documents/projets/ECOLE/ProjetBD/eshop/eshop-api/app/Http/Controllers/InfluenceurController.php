<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfluenceurModel;

class InfluenceurController extends Controller
{
    public function index()
    {
        $influenceurs = InfluenceurModel::all();
        return response()->json($influenceurs);
    }

    public function store(Request $request)
    {
        $influenceur = InfluenceurModel::create($request->all());
        return response()->json($influenceur, 201);
    }

    public function show($idInf)
    {
        $influenceur = InfluenceurModel::where('idInf', $idInf)->firstOrFail();
        return response()->json($influenceur);
    }

    public function update(Request $request, $idInf)
    {
        $influenceur = InfluenceurModel::where('idInf', $idInf)->firstOrFail();
        $influenceur->update($request->all());
        return response()->json($influenceur, 200);
    }

    public function destroy($idInf)
    {
        $influenceur = InfluenceurModel::where('idInf', $idInf)->firstOrFail();
        $influenceur->delete();
        return response()->json(null, 204);
    }
}
