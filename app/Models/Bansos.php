<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bansos extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'no_kk',
        'jumlah_tanggungan',
        'gaji',
        'pekerjaan',
        'alamat',
        'pendidikan',
        'surat_tambahan',
        'status',
    ];
}
