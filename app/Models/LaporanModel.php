<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan'; // Nama tabel di database yang terkait dengan model ini
    protected $primaryKey = 'id_laporan'; // Nama kolom yang merupakan primary key

    // Disable timestamps if your table does not have created_at and updated_at columns
    public $timestamps = false;

    // Daftar kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama_pelapor',
        'no_hp',
        'subject',
        'domisili_rt',
        'pesan'
        // Tambahkan kolom lain yang sesuai dengan struktur tabel Anda
    ];

    // Example of attribute casting
    protected $casts = [
        'no_hp' => 'string', // Example: casting no_hp to string
    ];

    // If you have date fields and want them to be treated as Carbon instances
    protected $dates = [
        // 'created_at',
        // 'updated_at'
    ];

    // Jika Anda memiliki relasi dengan model lain, Anda dapat mendefinisikannya di sini
    // Contoh: 
    // public function user() {
    //     return $this->belongsTo(User::class);
    // }
}
