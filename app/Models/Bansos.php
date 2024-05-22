<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bansos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor',
        'uraian',
        'jenis',
        'tahun',
        'diselenggarakan',
        'disalurkan',
        'kategori',
        'alamat',
        'nama',
        'status',
        'pekerjaan',
        'pendidikan',
    ];
}
