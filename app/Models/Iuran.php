<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iuran extends Model
{
    use HasFactory;

    protected $table = 'iuran';

    protected $primaryKey = 'id_warga';

    protected $fillable = [
        'nama_warga',
        'tanggal_iuran',
        'nominal',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_warga');
    }
}