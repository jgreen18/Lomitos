<div>
    <a class="py-2 px-4 text-white rounded-md cursor-pointer bg-lomito-primary hover:bg-lomito-secondary duration-500"
        wire:click="$set('open', true)">
        <i class="fas fa-edit"></i>
    </a>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Actualizar información de lomito
        </x-slot>
        <x-slot name="content">
            <div class="inline-grid grid-cols-2 gap-5">
                <div class="mb-4">
                    <x-jet-label value="Nombre del lomito" />
                    <x-jet-input wire:model="mascota.nombre" type="text" placeholder="Pluto" />
                    <x-jet-input-error for='nombre'>

                    </x-jet-input-error>


                </div>
                <div class="mb-4">
                    <x-jet-label value="Edad" />
                    <x-jet-input type="number" placeholder="años" wire:model="mascota.edad" />
                    <x-jet-input-error for='edad'>

                    </x-jet-input-error>


                </div>
                <div class="mb-4">
                    <x-jet-label value="Raza" />
                    <x-jet-input type="text" placeholder="Chihuahueño" wire:model="mascota.raza" />
                    <x-jet-input-error for='raza'>

                    </x-jet-input-error>

                </div>

                <div class="mb-4">
                    <select name="" class="w-64 rounded-md mt-5 border-gray-400" wire:model="mascota.sexo">
                        <option selected value="Macho">Macho</option>
                        <option value="Hembra">Hembra</option>
                    </select>
                    <x-jet-input-error for='sexo'>

                    </x-jet-input-error>
                </div>
                <div class="mb-4">
                    <x-jet-label value="Peso" />
                    <x-jet-input type="text" placeholder="kg" wire:model="mascota.peso" />
                    <x-jet-input-error for='peso'>

                    </x-jet-input-error>

                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)" class="mr-2">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" class="disabled:opacity-25">
                Agregar lomito
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
