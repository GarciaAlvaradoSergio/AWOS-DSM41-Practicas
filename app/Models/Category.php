<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use HasFactory, SoftDeletes;
    public function evento(){
        return $this->belongsTo(Evento::class);
    }
    public function actividad(){
        return $this->hasOne(Activity::class);
    }
    public function nota(){
        return $this->belongsTo(Note::class);
    }
    protected $fillable = [
        'nombreCategoria',
    ];
}
