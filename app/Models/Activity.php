<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    public function usuario(){
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }
    public function categoria(){
        return $this->belongsTo(Category::class);
    }
    public function estado(){
        return $this->hasOne(Status::class);
    }
    public function subactividad(){
        return $this->hasMany(Subactivity::class);
    }
    protected $fillable = [
        'categoria_id',
        'estado_id',
        'titulo',
        'fecha'
    ];
}
