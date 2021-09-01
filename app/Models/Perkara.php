<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkara extends Model
{
    use HasFactory;
    protected $table = 'perkara';

    public function jaksa()
    {
        return $this->belongsTo(Jaksa::class, 'id_jaksa'); 
    }

    public function penyidik()
    {
        return $this->belongsTo(penyidik::class, 'id_penyidik'); 
    }

    public function terdakwa()
    {
        return $this->belongsTo(terdakwa::class, 'id_terdakwa'); 
    }
}