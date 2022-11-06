<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public function evento(){
        return $this->belongsTo(Event::class, 'foreign_key', 'other_key');
    }

    public function estado(): BelongsTo{
        return $this->belongsTo(Status::class, 'foreign_key', 'other_key');
    } 

    public function subactividad(){
        return $this->belongsTo(Subactivity::class, 'foreign_key', 'other_key');
    }
    protected $fillable = [
        'nombreEstado',
    ];
}
