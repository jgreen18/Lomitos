<div>
    <x-jet-button wire:click="$set('open', true)">

        Agendar cita


    </x-jet-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">Agendar cita</x-slot>
        <x-slot name="content">
            <div class="inline-grid grid-cols-2 gap-5">
                <div class="mb-4">
                    <x-jet-label value="Nombre del(los) lomito(s)" />
                    <select class="w-64 rounded-md" form="mascota_id" required wire:model='mascota_id'>
                        {{-- <option x-bind:disable="mascota_id">Selecione su mascota</option> --}}
                        @foreach ($mascotas as $mascota)
                            <option selected value="{{ $mascota['id'] }}"> {{ $mascota['nombre'] }} </option>
                        @endforeach
                    </select>

                   {{ $mascota['nombre']}}
                    <x-jet-input-error for='mascota_id'>
                    </x-jet-input-error>
                </div>
                <div class="mb-4 pt-2">
                    @foreach ($servicios as $servicio)
                    <x-jet-label value="Precio por servicio $ {{$servicio['precio']}} " class="flex w-64 pl-4 py-3 my-3 mx-auto border rounded-md" />

                    @endforeach
                </div>
            </div>

            <div class="inline-grid grid-cols-2 gap-5">
                <div class="mb-4">
                    <x-jet-label value="Seleccione una fecha" />
                    <x-jet-input type="date" name="new_year" class="w-64" wire:model='fecha' />
                    <x-jet-input-error for='fecha'>
                    </x-jet-input-error>
                </div>
                <div class="mb-4">
                    <x-jet-label value="Elija una hora" />
                    <x-jet-input type="time" class="w-64" wire:model='hora' />
                    <x-jet-input-error for='hora'>
                    </x-jet-input-error>
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
