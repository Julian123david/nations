<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "countries";
    protected $primaryKey = "country_id";

    public function regiones(){
        //hasmany: Parametros
        //1 Modelo a relacionar
        return $this->belongsTo(Region::class,'country_id');
    }

    public function idiomas(){
        //
        return $this->belongsToMany(Language::class, 'country_languages' , 'country_id' , 'language_id');
    }

    use HasFactory;
}
