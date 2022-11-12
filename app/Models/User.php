<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public function evento(){
        return $this->hasMany(Event::class);
    }
    public function actividad(){
        return $this->hasMany(Activity::class);
    }
    protected $fillable = [
        'nombre',
        'apellido',
        'usuario',
        'correo',
        'contraseña'
    ];
}
