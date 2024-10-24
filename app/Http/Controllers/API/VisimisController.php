<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Visimis;
use Illuminate\Http\Request;
use Validator;

class VisimisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $visimis = Visimis::all();
        if ($visimis->isEmpty()) {
            return response()->json([
                'message' => 'Data visimis kosong',
                'error'  => true,
            ], 404);
        }
        return response()->json([
            'data' => $visimis,
            'message' => 'Data visimis ditemukan',
            'status' => 200,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'visi' => 'required|string|max:300',
            'misi' => 'required|string',
            'motto' => 'required|string|max:200',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors(),
                'error'  => true,
            ], 400);
        }

        $visimis = Visimis::create([
            'visi' => $request->visi,
            'misi' => $request->misi,
            'motto' => $request->motto,
        ]);

        return response()->json([
            'data' => $visimis,
            'message' => 'Data visimis ditambahkan',
            'status' => 200,
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Visimis $visimis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visimis $visimis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visimis $visimis, string $id)
    {
        $visimis = Visimis::find($id);

        if (!$visimis) {
            return response()->json([
                'message' => 'Data visimis tidak ditemukan',
                'error' => true,
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'visi' => 'required|string|max:300',
            'misi' => 'required|string',
            'motto' => 'required|string|max:200',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Gagal mengupdate data visimis',
                'error' => $validator->errors(),
            ], 400);
        }

        $visimis->visi = $request->input('visi');
        $visimis->misi = $request->input('misi');
        $visimis->motto = $request->input('motto');
        $visimis->save();

        return response()->json([
            'data' => $visimis,
            'message' => 'Berhasil mengupdate data visimis',
            'status' => 200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visimis $visimis, string $id)
    {
        $visimis = Visimis::find($id);

        if (!$visimis) {
            return response()->json([
                'message' => 'Gagal menghapus data visimis',
                'status' => 400,
            ], 400);
        }

        $visimis->delete();

        return response()->json([
            'message' => 'Berhasil menghapus data visimis',
            'status' => 200,
        ], 200);
    }
}
