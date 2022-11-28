<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    protected $fillable = [
       
        'hora_cita',
        'fecha_cita',
        'mascota_id',
        'servicio_id',
    ];
    public function mascotas(){
        return $this->hasOne('App\Models\Mascotas');
    }
    public function extras(){
        return $this->hasOne('App\Models\Extras');
    }
}


