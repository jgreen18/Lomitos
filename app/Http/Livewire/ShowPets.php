<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mascotas;
use Illuminate\Support\Facades\Auth;

class ShowPets extends Component
{
    public $sort = 'nombre';
    public $direction = 'desc';
    protected $listeners = ['render'=>'render'];
    public function render()
    {
        $id = Auth::user()->id;
        $mascotas = Mascotas::where('user_id', '=', $id)
            ->orderBy($this->sort, $this->direction)
            ->get();
        return view('livewire.show-pets', compact('mascotas'));
    }
    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }
}
