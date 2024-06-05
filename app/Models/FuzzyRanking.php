<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuzzyRanking extends Model
{
    use HasFactory;
    protected $fillable = [
        'bansos_id',
        'nilai'
    ];

    public function bansos()
    {
        return $this->belongsTo(Bansos::class);
    }
}
