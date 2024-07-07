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

    //=======================Relaciones---------------------------------------------------------------
    public function quechua() {
        return $this->belongsToMany(Quechua::class, 'quechua_detalles', 'castellano_id', 'quechua_id');
    }

    public function aymara() {
        return $this->belongsToMany('App\Models\Aymara', 'aymara_detalles', 'castellano_id', 'aymara_id');
    }


    // Mutador para capitalizar la primera letra de la palabra
    public function setPalabraAttribute($value)
    {
        $this->attributes['palabra'] = ucwords(strtolower($value));
    }

    // Mutador para capitalizar la primera letra del significado en Quechua
    public function setSignificadoQuechuaAttribute($value)
    {
        $this->attributes['significado_quechua'] = ucfirst($value);
    }

    // Mutador para capitalizar la primera letra del significado en Aymara
    public function setSignificadoAymaraAttribute($value)
    {
        $this->attributes['significado_aymara'] = ucfirst($value);
    }   
}
