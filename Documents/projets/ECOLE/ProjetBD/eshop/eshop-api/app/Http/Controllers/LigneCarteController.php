<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LigneCarteModel;

class LigneCarteController extends Controller
{
    public function index()
    {
        $lignesCarte = LigneCarteModel::all();
        return response()->json($lignesCarte);
    }

    public function store(Request $request)
    {
        $ligneCarte = LigneCarteModel::create($request->all());
        return response()->json($ligneCarte, 201);
    }

    public function show($id)
    {
        $ligneCarte = LigneCarteModel::where('id', $id)->firstOrFail();
        return response()->json($ligneCarte);
    }

    public function update(Request $request, $id)
    {
        $ligneCarte = LigneCarteModel::where('id', $id)->firstOrFail();
        $ligneCarte->update($request->all());
        return response()->json($ligneCarte, 200);
    }

    public function destroy($id)
    {
        $ligneCarte = LigneCarteModel::where('id', $id)->firstOrFail();
        $ligneCarte->delete();
        return response()->json(null, 204);
    }
}
