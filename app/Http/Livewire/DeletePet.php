<?php

namespace App\Http\Livewire;

use App\Models\Mascotas;
use Livewire\Component;

class DeletePet extends Component
{
    public $mascota;

    public function delete(){
        Mascotas::deleted([
            'id' => $this-> mascota.id;
        ]);
        $this-> emitTo('show-pets', 'render');
        $this->emitTo();
    } 

    public function mount(Mascotas $mascota)
    {
        $this->mascota = $mascota;
    }

    public function render()
    {
        return view('livewire.delete-pet');
    }
}
