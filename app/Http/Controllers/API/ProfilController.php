<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;
use Validator;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $profil = Profil::all();
        if ($profil->isEmpty()) {
            return response()->json([
                'message' => 'Data profil kosong',
                'error'  => true,
            ], 404);
        }
        return response()->json([
            'data' => $profil,
            'message' => 'Data profil ditemukan',
            'status' => 200,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul_profil' => 'required|string|max: 100',
            'isi_profil' => 'required|string',
            'status' => 'required|string|max: 100',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Gagal menambahkan data profil',
                'error'  => $validator->errors(),
            ], 400);
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }

        $profil = Profil::create([
            'judul_profil' => $request->judul_profil,
            'isi_profil' => $request->isi_profil,
            'status' => $request->status,
            'image' => $image_name,
        ]);

        return response()->json([
            'data' => $profil,
            'message' => 'Data profil ditambahkan',
            'status' => 201,
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
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profil $profil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profil $profil, string $id)
    {
        $profil = Profil::find($id_profil);
        if (!$profil) {
            return response()->json([
                'message' => 'Data profil tidak ditemukan',
                'error'  => true,
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'judul_profil' => 'required|string|max: 100',
            'isi_profil' => 'required|string',
            'status' => 'required|string|max: 100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Gagal mengupdate data profil',
                'error'  => $validator->errors(),
            ], 400);
        }

        $profil->judul_profil = $request->input('judul_profil');
        $profil->isi_profil = $request->input('isi_profil');
        $profil->status = $request->input('status');
        $profil->save();

        return response()->json([
            'data' => $profil,
            'message' => 'Berhasil mengupdate data profil',
            'status' => 200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profil $profil, string $id)
    {
        $profil = Profil::find($id);
        if (!$profil) {
            return response()->json([
            'message' => 'Gagal menghapus data profil',
            'status' => 400,
        ], 400);
    }

        $profil->delete();
        
        return response()->json([
            'data' => $profil,
            'message' => 'Berhasil menghapus data profil',
            'status' => 200,
        ], 200);
    }
}
