<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visimis extends Model
{
    use HasFactory;

    protected $table = 'visimis';

    protected $fillable = [
        'visi',
        'misi',
        'motto',
    ];
}
