<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',	
        'contenido',	
        'fecha',	
        'categoria_id'
    ];
    public function categoria(){
        return $this->belongsTo(Category::class, 'categoria_id');
    }

}
