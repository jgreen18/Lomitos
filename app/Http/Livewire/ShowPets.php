<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mascotas;
use Illuminate\Support\Facades\Auth;

class ShowPets extends Component
{

    public $sort = 'nombre', $mascota;
    public $direction = 'desc';
    public $open_edit = false;
    protected $listeners = ['render' => 'render', 'delete'];

    protected $rules = [
        'mascota.nombre' => 'required',
        'mascota.edad' => 'required',
        'mascota.raza' => 'required',
        'mascota.sexo' => 'required',
        'mascota.peso' => 'required'

    ];
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

    public function edit(Mascotas $mascota)
    {
        $this->mascota = $mascota;
        $this->open_edit = true;
    }

    public function update()
    {
        $this->validate();
        $this->mascota->save();
        $this->reset(['open_edit']);
        // $this->emitTo('show-pets', 'render');
        $this->emit('alert2');
    }
    public function delete(Mascotas $mascota)
    {
        $mascota->delete();
    }
}
