<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\AchatFournisseurModel;

class AchatFournisseurController extends Controller
{
    public function index()
    {
        $achats = AchatFournisseurModel::all();
        return response()->json($achats);
    }

    public function store(Request $request)
    {
        $achat = AchatFournisseurModel::create($request->all());
        return response()->json($achat, 201);
    }

    public function show($idAchat)
    {
        $achat = AchatFournisseurModel::where('idAchat', $idAchat)->firstOrFail();
        return response()->json($achat);
    }

    public function update(Request $request, $idAchat)
    {
        $achat = AchatFournisseurModel::where('idAchat', $idAchat)->firstOrFail();
        $achat->update($request->all());
        return response()->json($achat, 200);
    }

    public function destroy($idAchat)
    {
        $achat = AchatFournisseurModel::where('idAchat', $idAchat)->firstOrFail();
        $achat->delete();
        return response()->json(null, 204);
    }
}
