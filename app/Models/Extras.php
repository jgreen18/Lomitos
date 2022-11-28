<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extras extends Model
{
    public function citas(){
        return $this->belongsTo('App\Models\Extras');
    }
}
