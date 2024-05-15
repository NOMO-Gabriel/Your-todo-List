<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VilleModel;

class VilleController extends Controller
{
    public function index()
    {
        $villes = VilleModel::all();
        return response()->json($villes);
    }

    public function store(Request $request)
    {
        $ville = VilleModel::create($request->all());
        return response()->json($ville, 201);
    }

    public function show($idVille)
    {
        $ville = VilleModel::where('idVille', $idVille)->firstOrFail();
        return response()->json($ville);
    }

    public function update(Request $request, $idVille)
    {
        $ville = VilleModel::where('idVille', $idVille)->firstOrFail();
        $ville->update($request->all());
        return response()->json($ville, 200);
    }

    public function destroy($idVille)
    {
        $ville = VilleModel::where('idVille', $idVille)->firstOrFail();
        $ville->delete();
        return response()->json(null, 204);
    }
}
