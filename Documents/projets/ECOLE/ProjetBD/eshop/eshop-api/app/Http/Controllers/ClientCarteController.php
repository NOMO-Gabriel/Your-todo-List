<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientCarteModel;

class ClientCarteController extends Controller
{
    public function index()
    {
        $clients = ClientCarteModel::all();
        return response()->json($clients);
    }

    public function store(Request $request)
    {
        $client = ClientCarteModel::create($request->all());
        return response()->json($client, 201);
    }

    public function show($matr)
    {
        $client = ClientCarteModel::where('matr', $matr)->firstOrFail();
        return response()->json($client);
    }

    public function update(Request $request, $matr)
    {
        $client = ClientCarteModel::where('matr', $matr)->firstOrFail();
        $client->update($request->all());
        return response()->json($client, 200);
    }

    public function destroy($matr)
    {
        $client = ClientCarteModel::where('matr', $matr)->firstOrFail();
        $client->delete();
        return response()->json(null, 204);
    }
}
