<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Quechua extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    #public $table = 'quechuas'; // Set the table name
    protected $fillable = [
        'palabra',
        'significado',
    ];

    public function castellano() {
        return $this->belongsToMany(Castellano::class, 'quechua_detalles', 'quechua_id', 'castellano_id');
    }
    
    // Mutador para capitalizar la primera letra de la palabra
    public function setPalabraAttribute($value)
    {
        $this->attributes['palabra'] = ucwords(strtolower($value));
    }

    // Mutador para capitalizar la primera letra de la oracion
    public function setSignificadoAttribute($value)
    {
        $this->attributes['significado'] = ucfirst($value);
    }
}
