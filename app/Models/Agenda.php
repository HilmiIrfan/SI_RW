<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agenda';

    protected $primaryKey = 'id_agenda';

    protected $fillable = [
        'tanggal_agenda',
        'nama_agenda',
        'detail_agenda',
    ];
}
