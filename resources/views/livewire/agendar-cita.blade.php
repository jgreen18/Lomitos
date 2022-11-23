<div>
    <x-jet-button wire:click="$set('open', true)">
        Agendar cita
    </x-jet-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">Agendar cita</x-slot>
        <x-slot name="content">
            <div class="mb-4">
                {{-- {{$mascotas}} --}}
                <x-jet-label value="Nombre del(los) lomito(s)" />
                <select class="w-64 rounded-md">
                    @foreach ($mascotas as $mascota)
                        <option value="{{$mascota['nombre']}}">{{$mascota['nombre']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="inline-grid grid-cols-2 gap-5">
                <div class="mb-4">
                     <x-jet-label value="Correo electrónico" />
                     <x-jet-input type="email" placeholder="example@email.com" class="w-64"/>
                </div>
                <div class="mb-4">
                     <x-jet-label value="Teléfono" />
                     <x-jet-input type="tel" placeholder="123 456 78 90" class="w-64"/>
                </div>
                <div class="mb-4">
                     <x-jet-label value="Seleccione una fecha" />
                     <x-jet-input type="date" class="w-64"/>
                </div>
                <div class="mb-4">
                     <x-jet-label value="Elija una hora" />
                     <x-jet-input type="time" class="w-64"/>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)" class="mr-2">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button>
                Agendar cita
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
