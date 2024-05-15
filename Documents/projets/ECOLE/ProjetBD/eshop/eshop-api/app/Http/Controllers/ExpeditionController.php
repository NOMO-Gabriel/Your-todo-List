<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpeditionModel;

class ExpeditionController extends Controller
{
    public function index()
    {
        $expeditions = ExpeditionModel::all();
        return response()->json($expeditions);
    }

    public function store(Request $request)
    {
        $expedition = ExpeditionModel::create($request->all());
        return response()->json($expedition, 201);
    }

    public function show($idExp)
    {
        $expedition = ExpeditionModel::where('idExp', $idExp)->firstOrFail();
        return response()->json($expedition);
    }

    public function update(Request $request, $idExp)
    {
        $expedition = ExpeditionModel::where('idExp', $idExp)->firstOrFail();
        $expedition->update($request->all());
        return response()->json($expedition, 200);
    }

    public function destroy($idExp)
    {
        $expedition = ExpeditionModel::where('idExp', $idExp)->firstOrFail();
        $expedition->delete();
        return response()->json(null, 204);
    }
}
