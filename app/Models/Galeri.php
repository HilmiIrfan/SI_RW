<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $table = 'galeri';

    protected $primaryKey = 'id_galeri';

    protected $fillable = [
        'nama_foto',
        'detail_foto',
        'foto',
    ];
}
