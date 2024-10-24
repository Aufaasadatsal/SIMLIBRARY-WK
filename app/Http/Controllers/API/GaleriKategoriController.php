<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\GaleriKategori;
use Illuminate\Http\Request;
use Validator;

class GaleriKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $galeriKategori = GaleriKategori::all();

        if ($galeriKategori->isEmpty()) {
            return response()->json([
                'message' => 'Data galeri kategori kosong',
                'error'  => true,
            ], 404);
        }

        return response()->json([
            'data' => $galeriKategori,
            'message' => 'Data galeri kategori ditemukan',
            'status' => 200,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Gagal menambahkan data galeri kategori',
                'error' => $validator->errors(),
            ], 400);
        }

        $galeriKategori = GaleriKategori::create([
            'name' => $request->name,
        ]);

        return response()->json([
            'data' => $galeriKategori,
            'message' => 'Berhasil menambahkan data galeri kategori',
            'status' => 200,
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
    public function show(GaleriKategori $galeriKategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GaleriKategori $galeriKategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GaleriKategori $galeriKategori, string $id)
    {
        $galeriKategori = GaleriKategori::find($id);

        if (!$galeriKategori) {
            return response()->json([
                'message' => 'Data galeri kategori tidak ditemukan',
                'error' => true,
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            "name" => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Gagal mengupdate data galeri kategori',
                'error' => $validator->errors(),
            ], 400);
        }

        $galeriKategori->name = $request->input('name');
        $galeriKategori->save();

        return response()->json([
            'data' => $galeriKategori,
            'message' => 'Berhasil mengupdate data galeri kategori',
            'status' => 200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GaleriKategori $galeriKategori, string $id)
    {
        $galeriKategori = GaleriKategori::find($id);

        if (!$galeriKategori) {
            return response()->json([
                'message' => 'Gagal menghapus data galeri kategori',
                'error' => true,
            ], 404);
        }

        $galeriKategori->delete();

        return response()->json([
            'message' => 'Berhasil menghapus data galeri kategori',
            'status' => 200,
        ], 200);
    }
}
