<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OPACController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\eBookController;
use App\Http\Controllers\IndexAdminController;
use App\Http\Controllers\BlogAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/information', [InformationController::class, 'index'])->name('information');
Route::get('/opac', [OPACController::class, 'index'])->name('opac');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/download', [DownloadController::class, 'index'])->name('download');
Route::get('/ebook', [eBookController::class, 'index'])->name('ebook');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [IndexAdminController::class, 'index'])->name('index');
    Route::get('/blog', [BlogAdminController::class, 'index'])->name('blog');
    
    Route::get('/login', function () {
        return view('login');
    });
});
