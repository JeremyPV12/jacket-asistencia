<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'nombre', 'apellido_paterno', 'apellido_materno', 'fecha_nacimiento', 'direccion'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function asistencias(){
        return $this->hasMany('App\Models\User');
    }
}
