<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Castellano extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    #public $table = 'catellanos'; 

    protected $fillable = [
        'palabra',
        'significado_quechua',
        'significado_aymara',
    ];

    public function quechua() {
        return $this->belongsToMany(Quechua::class, 'quechua_detalles', 'castellano_id', 'quechua_id');
    }

    public function aymara() {
        return $this->belongsToMany('App\Models\Aymara', 'aymara_detalles', 'castellano_id', 'aymara_id');
    }
}
