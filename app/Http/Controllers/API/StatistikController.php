<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Statistik;
use Illuminate\Http\Request;
use Validator;

class StatistikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $statistik = Statistik::all();
        if ($statistik->isEmpty())
        {
            return response()->json([
                'message' => 'Data statistik kosong',
                'error'  => true,
            ], 404);
        }
        return response()->json([
            'data' => $statistik,
            'message' => 'Data statistik ditemukan',
            'status' => 200,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ip' => 'required|ip',
            'tanggal' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Gagal menambahkan statistik',
                'error' => $validator->errors(),
            ], 400);
        }

        $statistik = Statistik::create([
            'ip' => $request->ip,
            'tanggal' => $request->tanggal,
        ]);

        return response()->json([
            'data' => $statistik,
            'message' => 'Berhasil menambahkan data statistik',
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
    public function show(Statistik $statistik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statistik $statistik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Statistik $statistik, string $id)
    {
        $statistik = Statistik::find($id);

        if (!$statistik) {
            return response()->json([
                'message' => 'Data statistik tidak ditemukan',
                'error' => true,
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'ip' => 'required|ip',
            'tanggal' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Gagal mengupdate data statistik',
                'error' => $validator->errors(),
            ], 400);
        }

        $statistik->ip = $request->input('ip');
        $statistik->tanggal = $request->input('tanggal');
        $statistik->save();

        return response()->json([
            'data' => $statistik,
            'message' => 'Berhasil mengupdate data statistik',
            'status' => 200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statistik $statistik, string $id)
    {
        $statistik = Statistik::find($id);

        if (!$statistik) {
            return response()->json([
                'message' => 'Gagal menghapus data statistik',
                'status' => 400,
            ], 400);
        }

        $statistik->delete();

        return response()->json([
            'message' => 'Berhasil menghapus data statistik',
            'status' => 200,
        ], 200);
    }
}
