<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikels';

    protected $primaryKey = 'artikel_id';

    protected $fillable = [
        'judul_artikel',
        'isi_artikel',
        'image',
        'status',
    ];
}
