<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BansosTerima extends Model
{
    use HasFactory;

    protected $table = 'bansos_terima';

    protected $fillable = [
        'bansos_id',
    ];

    public function bansos()
    {
        return $this->belongsTo(Bansos::class);
    }
}