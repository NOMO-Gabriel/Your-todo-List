<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GestionStockModel;

class GestionStockController extends Controller
{
    public function index()
    {
        $gestionstocks = GestionStockModel::all();
        return response()->json($gestionstocks);
    }

    public function store(Request $request)
    {
        $gestionstock = GestionStockModel::create($request->all());
        return response()->json($gestionstock, 201);
    }

    public function show($idStock)
    {
        $gestionstock = GestionStockModel::where('idStock', $idStock)->firstOrFail();
        return response()->json($gestionstock);
    }

    public function update(Request $request, $idStock)
    {
        $gestionstock = GestionStockModel::where('idStock', $idStock)->firstOrFail();
        $gestionstock->update($request->all());
        return response()->json($gestionstock, 200);
    }

    public function destroy($idStock)
    {
        $gestionstock = GestionStockModel::where('idStock', $idStock)->firstOrFail();
        $gestionstock->delete();
        return response()->json(null, 204);
    }
}
