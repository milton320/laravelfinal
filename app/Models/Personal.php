<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Personal extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'ci',
        'extension',
        'complemento',
        'direccion',
        'fecha_eliminacion',
        'fecha_actualizacion',
        'usuario_id',
        
    ];
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
