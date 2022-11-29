<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mascotas;
use Illuminate\Support\Facades\Auth;

class AddPet extends Component
{
    public $open = false;
    
    public  $nombre,$edad,$raza,$sexo='Macho' ,$peso, $user_id =1 ; 
   

   

    protected $rules =[
        'nombre' => 'required',
        'edad' => 'required',
        'raza' => 'required',
        'sexo' => 'required',
        'peso' => 'required'
        
    ];
    

    public function save(){
        $this->validate();

        Mascotas::create([
           
            'nombre' => $this->nombre,
            'edad' => $this->edad,
            'raza' => $this->raza,
            'sexo' => $this->sexo,
            'peso' => $this->peso,
            'user_id' => Auth::user()->id,

           
        ]);

         $this->reset(['open','nombre','edad','raza','sexo','peso'    ]);
         $this->emitTo('add-pet','render');
         $this->emit('alert');
        
    }
    
    public function render()
    {
        return view('livewire.add-pet');
    }
}
