<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Externos extends Model
{
    use HasFactory;
    //Relacion 1 a muchos inversa Personal - externos
    public function persona(){
        return $this->belongsTo(Personal::class);
    }
}
