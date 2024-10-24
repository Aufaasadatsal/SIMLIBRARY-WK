<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriKategori extends Model
{
    use HasFactory;

    protected $table = 'galeri_kategoris';

    protected $fillable = [
        'name',
    ];

    public function galeri()
    {
        return $this->hasMany(Galeri::class, 'kategori');
    }
}
