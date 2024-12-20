<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BukutamuController;
use App\Http\Controllers\API\ArtikelController;
use App\Http\Controllers\API\GaleriController;
use App\Http\Controllers\API\GaleriKategoriController;
use App\Http\Controllers\API\StatistikController;
use App\Http\Controllers\API\VisimisController;
use App\Http\Controllers\API\ProfilController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\PeminjamanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/bukutamu', [BukutamuController::class, 'create']);
Route::get('/bukutamu', [BukutamuController::class, 'index']);
Route::put('/bukutamu/{id}', [BukutamuController::class, 'update']);
Route::delete('/bukutamu/{id}', [BukutamuController::class, 'destroy']);

Route::post('/artikel', [ArtikelController::class, 'create']);
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::put('/artikel/{id}', [ArtikelController::class, 'update']);
Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy']);

Route::post('/galeri', [GaleriController::class, 'create']);
Route::get('/galeri', [GaleriController::class, 'index']);
Route::put('/galeri/{id}', [GaleriController::class, 'update']);
Route::delete('/galeri/{id}', [GaleriController::class, 'destroy']);

Route::post('/galerikategori', [GaleriKategoriController::class, 'create']);
Route::get('/galerikategori', [GaleriKategoriController::class, 'index']);
Route::put('/galerikategori/{id}', [GaleriKategoriController::class, 'update']);
Route::delete('/galerikategori/{id}', [GaleriKategoriController::class, 'destroy']);

Route::post('/statistik', [StatistikController::class, 'create']);
Route::get('/statistik', [StatistikController::class, 'index']);
Route::put('/statistik/{id}', [StatistikController::class, 'update']);
Route::delete('/statistik/{id}', [StatistikController::class, 'destroy']);

Route::post('/visimis', [VisimisController::class, 'create']);
Route::get('/visimis', [VisimisController::class, 'index']);
Route::put('/visimis/{id}', [VisimisController::class, 'update']);
Route::delete('/visimis/{id}', [VisimisController::class, 'destroy']);

Route::post('/profil', [ProfilController::class, 'create']);
Route::get('/profil', [ProfilController::class, 'index']);
Route::put('/profil/{id}', [ProfilController::class, 'update']);
Route::delete('/profil/{id}', [ProfilController::class, 'destroy']);

Route::post('/user', [UserController::class, 'create']);
Route::get('/user', [UserController::class, 'index']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class], 'destroy');

Route::get('/peminjaman', [PeminjamanController::class, 'index']);
Route::post('/peminjaman', [PeminjamanController::class, 'create']);
Route::put('/peminjaman/{id}', [PeminjamanController::class, 'update']);
Route::delete('/peminjaman/{id}', [PeminjamanController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
