<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = ['curso', 'nota', 'alumno_id'];

    public function alumnos()
    {
        return $this->BelongsTo('App\alumno', 'alumno_id');
        
    }

   

    
}
