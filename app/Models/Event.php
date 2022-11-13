<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;
    public function usuario(){
    return $this->belongsTo(User::class);
    }
    public function categoria(){
        return $this->hasOne(Category::class, 'id','categoria_id');
    }
    public function estado(){
        return $this->hasOne(Status::class, 'id','estado_id');
    }
    protected $fillable = [
        'nombreEvento',
        'categoria_id',
        'fecha',
        'estado_id'
    ];
}
