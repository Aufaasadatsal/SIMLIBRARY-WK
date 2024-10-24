<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Validator;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $artikel = Artikel::all();

        if ($artikel->isEmpty()) {
            return response()->json([
                'message' => 'Data artikel kosong',
                'error'  => true,
            ], 404);
        }

        return response()->json([
            'data' => $artikel,
            'message' => 'Data artikel ditemukan',
            'status' => 200,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul_artikel' => 'required|string|max: 255',
            'isi_artikel' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|string|max: 100',
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => 'Gagal menambahkan data Artikel',
                'error'  => $validator->errors(),
            ], 400);
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }

        $artikel = Artikel::create([
            'judul_artikel' => $request->judul_artikel,
            'isi_artikel' => $request->isi_artikel,
            'image' => $image_name,
            'status' => $request->status
        ]);

        return response()->json([
            'data' => $artikel,
            'message' => 'Berhasil menambahkan data artikel',
            'status' => 200
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
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel, string $id)
    {
        $artikel = Artikel::find($id);
        
        if (!$artikel) {
            return response()->json([
                'message' => 'gagal mengupdate data artikel',
                'error'  => 400,
            ], 400);
        }

        $validator = Validator::make($request->all(), [
            'judul_artikel' => 'required|string|max: 255',
            'isi_artikel' => 'required|string',
            'status' => 'required|string|max: 100',
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => 'Gagal mengupdate data Artikel',
                'error'  => $validator->errors(),
            ], 400);
        }

        $artikel->judul_artikel = $request->input('judul_artikel');
        $artikel->isi_artikel = $request->input('isi_artikel');
        $artikel->status = $request->input('status');
        $artikel->save();

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil mengupdate data artikel',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel, string $id)
    {
        $artikel = Artikel::find($id);

        if (!$artikel) {
            return response()->json([
                'message' => 'gagal menghapus data artikel',
                'status'  => 400,
            ], 400);
        }

        $artikel->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil menghapus data artikel',
        ], 200);
    }
}
