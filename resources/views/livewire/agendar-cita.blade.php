<div>
    <x-jet-button wire:click="$set('open', true)">

        Agendar cita
       

    </x-jet-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">Agendar cita</x-slot>
        <x-slot name="content">
            <div class="mb-4">
                
                <x-jet-label value="Nombre del(los) lomito(s)" />
                <select class="w-64 rounded-md" form="mascota_id" required wire:model='mascota_id' >
                    {{-- <option x-bind:disable="mascota_id">Selecione su mascota</option> --}}

                    @foreach ($mascotas as $mascota)
                        <option selected value="{{$mascota['id']}}" > {{$mascota['nombre']}} </option>
                        @endforeach
                        
                    </select>
                    {{$mascota_id}}
                
                {{-- {{$mascotas}} --}}
                
            </div>
            <div class="inline-grid grid-cols-2 gap-5">
                <div class="mb-4">
                     <x-jet-label value="Seleccione una fecha" />
                     <x-jet-input type="date" name="new_year" class="w-64" wire:model='fecha_cita'/>
                     {{$fecha_cita}}
                    

                     
                </div>
                <div class="mb-4">
                     <x-jet-label value="Elija una hora" />
                     <x-jet-input type="time" class="w-64" wire:model='hora_cita'/>
                     {{$hora_cita}}
                </div>
                
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)" class="mr-2">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click=save>
                Agendar cita
            </x-jet-danger-button>
            

        </x-slot>
    </x-jet-dialog-modal>
</div>
