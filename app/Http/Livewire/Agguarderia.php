<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Citas;
use App\Models\Mascotas;
use App\Models\Servicios;
use Illuminate\Support\Facades\Auth;
class Agguarderia extends Component
{
    public $open = false;  

    public  $mascota_id , $servicio_id ='4', $fecha,$hora; 
   

    protected $rules =[
        'hora' => 'required',
        'fecha' => 'required',
        'mascota_id' => 'required',
        'servicio_id' => 'required'
        
    ];
    

    public function save(){
        $this->validate();

        Citas::create([
           
            'fecha_cita' => $this->fecha,
            'hora_cita' => $this->hora,
            'mascota_id' => $this->mascota_id,
            'servicio_id' => $this->servicio_id,
           
        ]);
        $this->reset(['open','fecha','hora']);
         $this->emitTo( 'agendar-cita','render');
         $this->emit('alert');
        
    }
    public function render()
    {
        $id = Auth::user()->id;
        $mascotas = Mascotas::where('user_id' ,'=', $id)->get();
        $servicios = Servicios::where('id',"=",$this->servicio_id)->get();
        
        return view('livewire.agguarderia', compact('mascotas'),compact('servicios'));
    }
}
