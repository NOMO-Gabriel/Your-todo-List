<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessagerieModel;

class MessagerieController extends Controller
{
    public function index()
    {
        $messages = MessagerieModel::all();
        return response()->json($messages);
    }

    public function store(Request $request)
    {
        $message = MessagerieModel::create($request->all());
        return response()->json($message, 201);
    }

    public function show($idmsg)
    {
        $messagerie = MessagerieModel::where('idmsg', $idmsg)->firstOrFail();
        return response()->json($messagerie);
    }

    public function update(Request $request, $idmsg)
    {
        $messagerie = MessagerieModel::where('idmsg', $idmsg)->firstOrFail();
        $messagerie->update($request->all());
        return response()->json($messagerie, 200);
    }

    public function destroy($idmsg)
    {
        $messagerie = MessagerieModel::where('idmsg', $idmsg)->firstOrFail();
        $messagerie->delete();
        return response()->json(null, 204);
    }
}
