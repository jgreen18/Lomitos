<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddPet extends Component
{
    public $open = false;
    
    public function render()
    {
        return view('livewire.add-pet');
    }
}
