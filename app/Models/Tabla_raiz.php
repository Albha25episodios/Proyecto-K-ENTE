<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Tabla_raiz extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $table = 'tabla_raizs';
    protected $primaryKey = 'castellano_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'castellano_id',
        'contenido'
    ];

    public function castellano()
    {
        return $this->belongsTo(Castellano::class, 'castellano_id', 'id');
    }
}
