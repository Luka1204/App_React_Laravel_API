<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','apellido','nacionalidad','localidad','direccion','dni','fecha_nac','telefono','email','tipo_atencion','tipo_persona'];
}
