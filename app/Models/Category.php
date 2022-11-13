<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function evento(){
        return $this->belongsTo(Evento::class);
    }
    public function actividad(){
        return $this->hasOne(Activity::class);
    }
    protected $fillable = [
        'nombreCategoria',
    ];
}
