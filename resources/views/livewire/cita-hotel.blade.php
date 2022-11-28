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
            <!--Datos de ingreso-->
            <div class="inline-grid grid-cols-2 gap-5">
                <div class="mb-4">
                     <x-jet-label value="Fecha de ingreso" />
                     <x-jet-input type="date" class="w-64"/>
                </div>
                <div class="mb-4">
                     <x-jet-label value="Fecha de salida" />
                     <x-jet-input type="date" class="w-64"/>
                </div>
            </div>
            <!--Servicios extra-->
            <div class="inline-grid grid-cols-2 gap-5">
                <div class="mb-4">
                     <x-jet-label value="Servicios extra" />
                     <select class="w-64 rounded-md" name="" id="">
                        <!--Lista de servicios en checkbox-->
                     </select>
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
