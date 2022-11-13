<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subactivity extends Model
{
    use HasFactory, SoftDeletes;
    public function estado(){
        return $this->hasOne(Status::class);
    }
    public function actividad(){
        return $this->belongsTo(Activity::class);
    }
    protected $fillable = [
        'actividad_id',
        'estado_id',
        'nombre',
    ];
}
