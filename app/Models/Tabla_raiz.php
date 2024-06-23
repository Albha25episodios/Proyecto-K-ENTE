<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabla_raiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenido'
    ];

    public function castellano()
    {
        return $this->belongsTo(Castellano::class, 'castellano_id', 'id');
    }
}
