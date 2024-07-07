<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Aymara extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $fillable = [
        'palabra',
        'significado',
    ];

    #public $table = 'aymaras'; // Set the table name

    public function castellano() {
        return $this->belongsToMany(Aymara::class, 'aymara_detalles', 'aymara_id', 'castellano_id');
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
