<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mascotas;

class AgendarCita extends Component
{
    public $open = false;    
    public function render()
    {
        $mascotas = Mascotas::all();
        return view('livewire.agendar-cita', compact('mascotas'));
    }
}
