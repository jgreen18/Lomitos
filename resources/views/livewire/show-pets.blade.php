<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
        <!-- component -->
        <div class="flex justify-end py-4 px-4">
            @livewire('add-pet')
        </div>
        <x-table>

            <table class="min-w-full leading-normal divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                            wire:click="order('nombre')">
                            Nombre

                            @if ($sort == 'nombre')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                            wire:click="order('edad')">
                            Edad
                            @if ($sort == 'edad')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                            wire:click="order('raza')">
                            Raza
                            @if ($sort == 'raza')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Sexo
                        </th>
                        <th class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                            wire:click="order('peso')">
                            Peso
                            @if ($sort == 'peso')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Opciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mascotas as $mascota)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $mascota->nombre }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $mascota->edad }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $mascota->raza }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $mascota->sexo }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $mascota->peso }}
                                </p>
                            </td>
                            <td class=" flex px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                {{-- @livewire('update-pet', ['mascota'=>$mascota], key($mascota->id)) --}}
                                <a class="py-2 px-4 text-white rounded-md cursor-pointer bg-lomito-primary hover:bg-lomito-secondary duration-500"
                                    wire:click="edit({{ $mascota }})">
                                    <i class="fas fa-edit"></i>
                                </a>
                                {{-- @livewire('delete-pet', ['mascota' => $mascota], key($mascota->id)) --}}
                                <a class="ml-2 py-2 px-4 text-white rounded-md cursor-pointer bg-red-500 hover:bg-red-600 duration-500"
                                    wire:click="$emit('deletePet', {{ $mascota->id }})">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-table>
    </div>
    <x-jet-dialog-modal wire:model="open_edit">
        <x-slot name="title">
            Actualizar información
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
            <x-jet-secondary-button wire:click="$set('open_edit', false)" class="mr-2">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" class="disabled:opacity-25">
                Actualizar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
    @push('js')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Livewire.on('deletePet', mascotaId => {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "No serás capaz de revertir esta acción.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('show-pets', 'delete', mascotaId);
                        Swal.fire(
                            '¡Información eliminada!',
                            'Tus datos han sido eliminados',
                            'success'
                        )
                    }
                })
            });
        </script>
    @endpush
</div>
