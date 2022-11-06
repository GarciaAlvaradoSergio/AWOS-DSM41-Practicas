<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function evento(){
        return $this->hasOne(Evento::class, 'foreign_key', 'local_key');
    }
    public function actividad(){
        return $this->hasOne(Activity::class, 'foreign_key', 'local_key');
    }
}