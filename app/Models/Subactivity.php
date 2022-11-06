<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subactivity extends Model
{
    use HasFactory;
    public function estado(){
        return $this->hasOne(Status::class);
    }
    public function actividad(){
        return $this->belongsTo(Activity::class);
    }
}
