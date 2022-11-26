<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use HasFactory,SoftDeletes;

    public function evento(){
        return $this->belongsTo(Event::class, 'foreign_key', 'other_key');
    }

    public function actividad(): BelongsTo{
        return $this->belongsTo(Activity::class, 'foreign_key', 'other_key');
    } 

    public function subactividad(){
        return $this->belongsTo(Subactivity::class, 'foreign_key', 'other_key');
    }
    protected $fillable = [
        'nombreEstado',
    ];
}
