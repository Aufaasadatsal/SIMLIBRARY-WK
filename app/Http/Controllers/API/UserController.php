<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index(Request $request)
    // {
    //     $user = User::all();

    //     if ($user->isEmpty()) {
    //         return response()->json([
    //             'message' => 'Data user kosong',
    //             'error'  => true,
    //         ], 404);
    //     }

    //     return response()->json([
    //         'data' => $user,
    //         'message' => 'Data user ditemukan',
    //         'status' => 200,
    //     ], 200);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max: 30|unique:users',
            'password' => 'required|string|max: 30',
        ]);

        if ($validator->fails()) {
            return response ()->json([
                'message' => 'Gagal menambahkan data user',
                'error'  => $validator->errors(),
            ], 400);
        }

        $user = User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password), // Hash the password
        ]);

        return response()->json([
            'data' => $user,
            'message' => 'Berhasil menambahkan data user',
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
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, User $user, string $id)
    // {
    //     $user = User::find($id);

    //     if (!$user) {
    //         return response()->json([
    //             'message' => 'Data user tidak ditemukan',
    //             'error'  => true,
    //         ], 404);
    //     }

    //     $validator = Validator::make($request->all(), [
    //         "username" => 'nullable|string|max:30|unique:users,username,' . $id,
    //         "password" => 'nullable|string|min:6',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'message' => 'Gagal mengupdate data user',
    //             'error' => $validator->errors(),
    //         ], 400);
    //     }

    //     if ($request->has('username')) {
    //         $user->username = $request->username;
    //     }
    //     if ($request->has('password')) {
    //         $user->password = bcrypt($request->password);
    //     }

    //     $user->save();

    //     return response()->json([
    //         'data' => $user,
    //         'message' => 'Berhasil mengupdate data user',
    //         'status' => 200,
    //     ], 200);
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(User $user, string $id)
    // {
    //     $user = User::find($id);

    //     if (!$user) {
    //         return response()->json([
    //             'message' => 'Data user tidak ditemukan',
    //             'error' => true,
    //         ], 404);
    //     }

    //     $user->delete();

    //     return response()->json([
    //         'message' => 'Berhasil menghapus data user',
    //         'status' => 200,
    //     ], 200);
    // }
}
