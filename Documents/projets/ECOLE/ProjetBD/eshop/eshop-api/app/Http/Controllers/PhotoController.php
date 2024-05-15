<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoModel;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = PhotoModel::all();
        return response()->json($photos);
    }

    public function store(Request $request)
    {
        $photo = PhotoModel::create($request->all());
        return response()->json($photo, 201);
    }

    public function show($idPhoto)
    {
        $photo = PhotoModel::where('idPhoto', $idPhoto)->firstOrFail();
        return response()->json($photo);
    }

    public function update(Request $request, $idPhoto)
    {
        $photo = PhotoModel::where('idPhoto', $idPhoto)->firstOrFail();
        $photo->update($request->all());
        return response()->json($photo, 200);
    }

    public function destroy($idPhoto)
    {
        $photo = PhotoModel::where('idPhoto', $idPhoto)->firstOrFail();
        $photo->delete();
        return response()->json(null, 204);
    }
}
