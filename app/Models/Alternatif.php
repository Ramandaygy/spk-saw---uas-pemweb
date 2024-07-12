<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;
    
    protected $table = 'tb_alternatif'; // Sesuaikan dengan nama tabel Anda
    protected $primaryKey = 'id_alternatif'; // Sesuaikan dengan nama kolom kunci utama
    
    

    public $timestamps = false;

    protected $fillable = [
        'id_alternatif',
        'nama_alternatif',
    ];
}
