<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GestionnaireModel;

class GestionnaireController extends Controller
{
    public function index()
    {
        $gestionnaires = GestionnaireModel::all();
        return response()->json($gestionnaires);
    }

    public function store(Request $request)
    {
        $gestionnaire = GestionnaireModel::create($request->all());
        return response()->json($gestionnaire, 201);
    }

    public function show($idGest)
    {
        $gestionnaire = GestionnaireModel::where('idGest', $idGest)->firstOrFail();
        return response()->json($gestionnaire);
    }

    public function update(Request $request, $idGest)
    {
        $gestionnaire = GestionnaireModel::where('idGest', $idGest)->firstOrFail();
        $gestionnaire->update($request->all());
        return response()->json($gestionnaire, 200);
    }

    public function destroy($idGest)
    {
        $gestionnaire = GestionnaireModel::where('idGest', $idGest)->firstOrFail();
        $gestionnaire->delete();
        return response()->json(null, 204);
    }
}
