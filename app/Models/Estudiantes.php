<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $table = "tb_estudiantes";
    protected $fillable = ["nombre","apellido","direccion","grado","genero"];
   // use HasFactory;
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($alumno) {
            $ultimo_id = static::max('id');
            if (!$ultimo_id) {
                $alumno->id = 'A0001';
            } else {
                $ultimo_numero = intval(substr($ultimo_id, 1));
                $nuevo_numero = $ultimo_numero + 1;
                $nuevo_id = 'A' . str_pad($nuevo_numero, 4, '0', STR_PAD_LEFT);
                $alumno->id = $nuevo_id;
            }
        });
    }
    
}
