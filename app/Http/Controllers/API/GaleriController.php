<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Validator;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $galeri = Galeri::all();

        if ($galeri->isEmpty()) {
            return response()->json([
                'message' => 'Data galeri kosong',
                'error'  => true,
            ], 404);
        }

        return response()->json([
            'data' => $galeri,
            'message' => 'Data galeri ditemukan',
            'status' => 200,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "file" => 'required|string|max:200',
            "kategori" => 'required|integer|exists:galeri_kategoris,id', // Check against GaleriKategori
            "keterangan" => 'required|string|max:255',
            "oleh" => 'required|string|max:100',
            "tgl" => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Gagal menambahkan data galeri',
                'error' => $validator->errors(),
            ], 400);
        }

        $galeri = Galeri::create([
            'file' => $request->file,
            'kategori' => $request->kategori,
            'keterangan' => $request->keterangan,
            'oleh' => $request->oleh,
            'tgl' => $request->tgl,
        ]);

        return response()->json([
            'data' => $galeri,
            'status' => 200,
            'message' => 'Berhasil menambahkan data galeri',
        ], 201); 
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri, string $id)
    {
        $galeri = Galeri::find($id);

        if (!$galeri) {
            return response()->json([
                'message' => 'Data galeri tidak ditemukan',
                'error' => true,
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            "file" => 'required|string|max:200',
            "keterangan" => 'required|string|max:255',
            "oleh" => 'required|string|max:100',
            "tgl" => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Gagal mengupdate data galeri',
                'error' => $validator->errors(),
            ], 400);
        }

        $galeri->file = $request->input('file');
        $galeri->keterangan = $request->input('keterangan');
        $galeri->oleh = $request->input('oleh');
        $galeri->tgl = $request->input('tgl');
        $galeri->save();

        return response()->json([
            'data' => $galeri,
            'message' => 'Berhasil mengupdate data galeri',
            'status' => 200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri, string $id)
    {
        $galeri = Galeri::find($id);

        if (!$galeri) {
            return response()->json([
                'message' => 'Data galeri tidak ditemukan',
                'error' => true,
            ], 404);
        }

        $galeri->delete();

        return response()->json([
            'message' => 'Berhasil menghapus data galeri',
            'status' => 200,
        ], 200);
    }
}
