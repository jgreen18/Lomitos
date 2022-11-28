<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Citas;
use App\Models\Mascotas;
use Illuminate\Support\Facades\Auth;

class AgendarCita extends Component
{
    public $open = false;  

    public  $mascota_id ='1', $servicio_id ='2', $fecha_cita,$hora_cita; 
   

    
    

    public function save(){
        
        Citas::create([
            'fecha_registro',
            'fecha_cita' => $this->fecha_cita,
            'hora_cita' => $this->hora_cita,
            'mascota_id' => $this->mascota_id,
            'servicio_id' => $this->servicio_id,
           
        ]);
        
    }
    public function render()
    {
        $id = Auth::user()->id;
        $mascotas = Mascotas::where('user_id' ,'=', $id)->get();
        
        
        return view('livewire.agendar-cita', compact('mascotas') );
    }

    
}
