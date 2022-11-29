<?php

namespace App\Http\Livewire;

use App\Models\Mascotas;
use Livewire\Component;

class UpdatePet extends Component
{
    public $open = false;
    public $mascota;
    // public  $nombre, $edad, $raza, $sexo = 'Macho', $peso, $user_id = 1;
    protected $rules = [
        'mascota.nombre' => 'required',
        'mascota.edad' => 'required',
        'mascota.raza' => 'required',
        'mascota.sexo' => 'required',
        'mascota.peso' => 'required'

    ];

    public function save()
    {
        $this->validate();
        $this->mascota->save();
        $this->reset(['open']);
        $this->emitTo('show-pets','render');
        $this->emit('alert2');
        
    }

    public function mount(Mascotas $mascota)
    {
        $this->mascota = $mascota;
    }

    public function render()
    {
        return view('livewire.update-pet');
    }
}
