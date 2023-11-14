<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agremiado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido_p',
        'apellido_m',
        'id_genero',
        'NUP',
        'NUE',
        'RFC',
        'NSS',
        'fecha_nacimiento',
        'telefono',
        'cuota',
        'id_rol'
    ];
}
