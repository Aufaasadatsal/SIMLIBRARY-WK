<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $table = 'profils';

    protected $primaryKey = 'id_profil';

    protected $fillable = [
        'id_profil',
        'judul_profil',
        'isi_profil',
        'status',
        'image',
    ];
}
