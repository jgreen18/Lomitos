<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');

    }

    public function pruebas(){
        return $this->hasOne('App\Models\Mascotas');
    }
    public function citas(){
        return $this->belongsTo('App\Models\Mascotas');
    }
}