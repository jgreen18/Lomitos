<?php

namespace App\Http\Livewire;

use App\Models\Citas;
use App\Models\Mascotas;
use App\Models\Servicios;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class ShowHistorialC extends Component
{
    public function render()
    {
        // $servicios = Servicios::all();
        $id = Auth::user()->id;
        $hcitas = Citas::where('mascota_id', '=', $id)->get();
        // $servicios = Servicios::where('id', '=', $id)->get();
        $mascotas = Mascotas::where('user_id', '=', $id)->get();
        return view('livewire.show-historial-c', compact('hcitas','mascotas'));
    }
}
