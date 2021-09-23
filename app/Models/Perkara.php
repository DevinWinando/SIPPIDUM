<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkara extends Model
{
    use HasFactory;
    protected $table = 'perkara';
    protected $primaryKey = 'id_perkara';
    protected $fillable = [
        'nomor',
        'klasifikasi',
        'pasal',
        'id_penyidik',
        'id_jaksa',
        'disamarkan'
    ];

    public function jaksa()
    {
        return $this->belongsTo(Jaksa::class, 'id_jaksa'); 
    }

    public function penyidik()
    {
        return $this->belongsTo(Penyidik::class, 'id_penyidik'); 
    }

    public function terdakwa()
    {
        return $this->hasMany(Terdakwa::class, 'id_perkara'); 
    }
}