<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TontineModel;

class TontineController extends Controller
{
    public function index()
    {
        $tontines = TontineModel::all();
        return response()->json($tontines);
    }

    public function store(Request $request)
    {
        $tontine = TontineModel::create($request->all());
        return response()->json($tontine, 201);
    }

    public function show($idTontine)
    {
        $tontine = TontineModel::where('idTontine', $idTontine)->firstOrFail();
        return response()->json($tontine);
    }

    public function update(Request $request, $idTontine)
    {
        $tontine = TontineModel::where('idTontine', $idTontine)->firstOrFail();
        $tontine->update($request->all());
        return response()->json($tontine, 200);
    }

    public function destroy($idTontine)
    {
        $tontine = TontineModel::where('idTontine', $idTontine)->firstOrFail();
        $tontine->delete();
        return response()->json(null, 204);
    }
}
