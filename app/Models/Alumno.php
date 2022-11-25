<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Alumno extends Model
{
    use HasFactory, HasApiTokens;

    protected $table = "alumnos";
    protected $fillable = ['nombre', 'apellido', 'edad', 'direccion'];
    protected $hidden = ['id'];

    public function obtenerAlumnos()
    {
        return Alumno::all();
    }

    public function obtenerAlumnoPorId($id)
    {
        return Alumno::find($id);
    }
}
