<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jaksa extends Model
{
    use HasFactory;

    protected $table = 'jaksa';
    protected $fillable = [ 
                            'nama',
                            'nip',
                            'jabatan'
                         ];
    protected $primaryKey = 'id_jaksa';
}