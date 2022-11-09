<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    //RELACION DE 1 A 1 PERSONAL a  USUARIO
    public function usuario(){
        return $this->hasOne(User::class);
    }

    //Relacion 1 a muchos Personal - externos

    public function externos(){
        return $this->hasMany(Externo::class);
    }

    public function internos(){
        return $this->hasMany(Internos::class);
    }
}
