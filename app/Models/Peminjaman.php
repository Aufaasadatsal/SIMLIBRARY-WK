<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

        protected $table = 'peminjaman';

        protected $fillable = [
            'kdpeminjaman',
            'kdanggota',
            'name',
            'rayon',
            'kdItem',
            'judulItem',
            'keterangan',
        ];
}
