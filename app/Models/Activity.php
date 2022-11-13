<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use HasFactory, SoftDeletes;

    public function usuario(){
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }
    public function categoria(){
        return $this->belongsTo(Category::class);
    }
    public function estado(){
        return $this->hasOne(Status::class, 'id', 'estado_id');
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
