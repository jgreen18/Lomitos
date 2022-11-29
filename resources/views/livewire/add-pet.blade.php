<div>
    <x-jet-button wire:click="$set('open', true)">
        Agregar mascota
    </x-jet-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Agregar un nuevo lomito
        </x-slot>
        <x-slot name="content">
            <div class="inline-grid grid-cols-2 gap-5">
                <div class="mb-4">
                    <x-jet-label value="Nombre del lomito" />
                    <x-jet-input type="text" placeholder="Pluto"/>
                </div>
                <div class="mb-4">
                    <x-jet-label value="Edad" />
                    <x-jet-input type="number" placeholder="años"/>
                </div>
                <div class="mb-4">
                    <x-jet-label value="Raza" />
                    <x-jet-input type="text" placeholder="Chihuahueño"/>
                </div>
                <div class="mb-4">
                    <x-jet-label value="Sexo" />
                    <x-jet-input type="text" placeholder="Hembra/Macho"/>
                </div>
                <div class="mb-4">
                    <x-jet-label value="Peso" />
                    <x-jet-input type="text" placeholder="kg"/>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button class="mr-2">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button>
                Agregar lomito
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
