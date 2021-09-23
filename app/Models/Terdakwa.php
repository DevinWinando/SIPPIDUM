<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terdakwa extends Model
{
    use HasFactory;
    protected $table = 'terdakwa';
    protected $primaryKey = 'id_terdakwa';

    public function perkara()
    {
        $this->belongsTo(Perkara::class, 'id_terdakwa');
    }
}