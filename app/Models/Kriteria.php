<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $table= 'tb_kriteria';
    protected $primarykey= 'id_kriteria';
    public $timestamps = false;

    protected $fillable = [
        'id_kriteria',
        'nama_kriteria',
        'atribut',
        'bobot',
    ];
    
}
