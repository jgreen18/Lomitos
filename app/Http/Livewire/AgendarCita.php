<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mascotas;
use Illuminate\Support\Facades\Auth;

class AgendarCita extends Component
{
    public $open = false;    
    public function render()
    {
        $id = Auth::user()->id;
        $mascotas = Mascotas::where('user_id' ,'=', $id)->get();
        
        
        return view('livewire.agendar-cita', compact('mascotas') );
    }
}
