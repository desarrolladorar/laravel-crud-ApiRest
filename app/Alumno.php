<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = ['nombre', 'email'];

    public function notas()
    {
        return $this->hasMany('App\nota', 'alumno_id');
    }

    

    
}
