<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Validator;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $peminjaman = Peminjaman::all();
        if ($peminjaman->isEmpty()) {
            return response()->json([
                'message' => 'Data peminjaman kosong',
                'error'  => true,
            ], 404);
        }

        return response()->json([
            'data' => $peminjaman,
            'message' => 'Data peminjaman ditemukan',
            'status' => 200,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'kdPeminjaman' => 'required|string|max:15|unique:peminjaman',
            'kdAnggota' => 'required|string|max:13',
            'name' => 'required|string|max:50',
            'rayon' => 'required|string|max:15',
            'kdItem' => 'required|string|max:25',
            'judulItem' => 'required|string|max:255',
            'keterangan' => 'nullable|string|max:75',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Gagal menambahkan data peminjaman',
                'error'  => $validator->errors(),
            ], 400);
        }
        
        // Ensure 'kdPeminjaman' is passed
        $peminjaman = Peminjaman::create([
            'kdPeminjaman' => $request->kdPeminjaman,
            'kdAnggota' => $request->kdAnggota,
            'name' => $request->name,
            'rayon' => $request->rayon,
            'kdItem' => $request->kdItem,
            'judulItem' => $request->judulItem,
            'keterangan' => $request->keterangan,
        ]);        
        
        // Return the created data with a success message
        return response()->json([
            'data' => $peminjaman,
            'message' => 'Berhasil menambahkan data peminjaman',
            'status' => 201,
        ], 201);
    }    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peminjaman = Peminjaman::find($id);
        if (!$peminjaman) {
            return response()->json([
                'message' => 'Data peminjaman tidak ditemukan',
                'error'  => true,
            ], 404);
        }

        // Validate the incoming data
        $validator = Validator::make($request->all(), [
            'kdPeminjaman' => 'required|string|max:15',
            'kdAnggota' => 'required|string|max:13', // Fix case to match migration
            'name' => 'required|string|max:50',
            'rayon' => 'required|string|max:15',
            'kdItem' => 'required|string|max:25',
            'judulItem' => 'required|string|max:255',
            'keterangan' => 'nullable|string|max:75',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Gagal mengupdate data peminjaman',
                'error'  => $validator->errors(),
            ], 400);
        }

        // Update the peminjaman data
        $peminjaman->kdPeminjaman = $request->input('kdPeminjaman');
        $peminjaman->kdAnggota = $request->input('kdAnggota'); // Fix case
        $peminjaman->name = $request->input('name');
        $peminjaman->rayon = $request->input('rayon');
        $peminjaman->kdItem = $request->input('kdItem');
        $peminjaman->judulItem = $request->input('judulItem');
        $peminjaman->keterangan = $request->input('keterangan');
        $peminjaman->save();

        return response()->json([
            'data' => $peminjaman,
            'message' => 'Berhasil mengupdate data peminjaman',
            'status' => 200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman, string $id)
    {
        $peminjaman = Peminjaman::find($id);
        if (!$peminjaman) {
            return response()->json([
                'message' => 'Data peminjaman tidak ditemukan',
                'error'  => true,
            ], 404);
        }

        $peminjaman->delete();

        return response()->json([
            'message' => 'Berhasil menghapus data peminjaman',
            'status' => 200,
        ], 200);
    }
}