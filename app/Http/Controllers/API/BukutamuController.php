<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Bukutamu;
use Illuminate\Http\Request;
use Validator;

class BukutamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $bukutamu = Bukutamu::all();
        if ($bukutamu->isEmpty())
        {
            return response()->json([
                'message' => 'Data bukutamu kosong',
                'error'  => true,
            ], 404);
        }

        return response()->json([
            'message' => 'Data bukutamu ditemukan',
            'data' => $bukutamu,
            'status' => 200,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "tanggal" => 'required|date',
            "name" => 'required|string|max: 50',
            "email" => 'required|email|max: 100',
            "pesan" => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Gagal menambahkan bukutamu',
                'error'  => $validator->errors(),
            ], 400);
        }

        $bukutamu = Bukutamu::create([
            'tanggal' => $request->tanggal,
            'name' => $request->name,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil menambahkan data bukutamu',
        ], 200);
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
    public function show(Bukutamu $bukutamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bukutamu $bukutamu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bukutamu $bukutamu, string $id)
    {
        $bukutamu = Bukutamu::find($id);

        if (!$bukutamu) {
            return response()->json([
                'message' => 'Data bukutamu tidak ditemukan',
                'error'  => true,
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            "tanggal" => 'required|date',
            "name" => 'required|string|max: 50',
            "email" => 'required|email|max: 100',
            "pesan" => 'required|string', 
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Gagal melakukan mengupdate bukutamu',
                'error'  => $validator->errors(),
            ], 400);
        }

        $bukutamu->tanggal = $request->input('tanggal');
        $bukutamu->name = $request->input('name');
        $bukutamu->email = $request->input('email');
        $bukutamu->pesan = $request->input('pesan');
        $bukutamu->save();

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil mengupdate data bukutamu',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bukutamu $bukutamu, string $id)
    {
        $bukutamu = Bukutamu::find($id);

        if (!$bukutamu) {
            return response()->json([
                'message' => 'gagal menghapus data bukutamu',
                'error'  => 400,
            ], 400);
            
            $bukutamu->delete();

            return response()->json([
                'status' => 200,
                'message' => 'Berhasil menghapus data bukutamu',
            ]);
        }
    }
}