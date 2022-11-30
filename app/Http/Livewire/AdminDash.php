<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Citas;
use App\Models\Servicios;
use App\Models\Mascotas;

class AdminDash extends Component
{
    public function render()
    {
        $hcitas = Citas::all();
        $servicios = Servicios::all();
        $mascotas = Mascotas::all();
        return view('livewire.admin-dash',compact('hcitas','servicios','mascotas'));
    }
}
