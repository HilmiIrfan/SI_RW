<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan'; // Nama tabel di database yang terkait dengan model ini

    protected $primaryKey = 'id_laporan'; // Nama kolom yang merupakan primary key

    protected $fillable = [ // Daftar kolom yang dapat diisi secara massal
        'nama_pelapor',
        'no_hp',
        'subject',
        'domisili_rt',
        'pesan'
        // Tambahkan kolom lain yang sesuai dengan struktur tabel Anda
    ];

    // Jika Anda memiliki relasi dengan model lain, Anda dapat mendefinisikannya di sini
    // Contoh: 
    // public function user() {
    //     return $this->belongsTo(User::class);
    // }
}
